<?php

namespace App\Controller;

use App\Entity\Attachment;
use App\Entity\Content;
use App\Entity\Section;
use App\Form\SectionType;
use App\Repository\SectionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\FileUploader;
use Symfony\Component\String\Slugger\SluggerInterface;

class SectionController extends AbstractController
{
	private $doctrine;

	public function __construct(ManagerRegistry $doctrine)
	{
		$this->doctrine = $doctrine;
	}

	/**
	 * @Route("/addSection", name="add_section")
	 */
	public function addSection(Request $request) : Response
	{
		$section = new Section();
		$form = $this->createForm(SectionType::class, $section);


		$form->handleRequest($request);

		// For attachments
		if ($form->isSubmitted() && $form->isValid()) {

			// getting highest current id of project // TODO: Make it more simple
			$query = $this->doctrine->getManager()->createQuery(
				'SELECT MAX(s.sorting)
				FROM App\Entity\Section s'
			);
			$sorting = $query->getResult()[0][1];

			// $form->getData() holds the submitted values
			$section = $form->getData();

			// ... perform some action, such as saving the task to the database
			// for example, if Task is a Doctrine entity, save it!
			$entityManager = $this->doctrine->getManager();
			$section->setSorting($sorting+1);
			$section->setDeleted(NULL);
			$entityManager->persist($section);
			$entityManager->flush();
			$this->addFlash('success', 'Successfully created new section');
			return $this->redirectToRoute('edit_section', ['id' => $section->getId()]);
		}
		$contents = $section->getContent();
		return $this->render('form/form_section.html.twig', [
			'form' => $form->createView(),
			'contents' => $contents
		]);
	}

	/**
	 * @Route("/editSection-{id}", name="edit_section")
	 */
	public function editSection($id, Request $request, Section $section,FileUploader $fileUploader, SluggerInterface $slugger) : Response
	{
		if (null === $section = $this->doctrine->getRepository(Section::class)->find($id)) {
			throw $this->createNotFoundException('No Section found for id '.$id);
		}
		$upload_dir = $this->getParameter('app.path.section_attachments');
		$oldContent = new ArrayCollection();

		// Create content before submit
		foreach ($section->getContent() as $content) {
			$oldContent->add($content);
		}

		$form = $this->createForm(SectionType::class, $section);
		$form->handleRequest($request);

        $entityManager = $this->doctrine->getManager();
		// For attachments
		if ($form->isSubmitted() && $form->isValid()) {

			$newContent = $section->getContent();
			// Create content after submit and remove the relationship between the Content and the Section
			foreach ($oldContent as $content) {
				if (false === $newContent->contains($content)) {
					// If the entry should stay in the database
					//$content->setSection(null);
					// if you wanted to delete the Content entirely, you can also do that


					//Remove attachments linked to removed content ! remove first attachment, then content
					$attachments = $this->doctrine
						->getRepository(Attachment::class)
						->findBy(['content'=>$content]);
					foreach ($attachments as $attachment) {
						$content->removeMyFile($attachment);
						unlink($upload_dir.'/'.$attachment->getImageFile());
					}
					$entityManager->remove($content);
					$entityManager->persist($content);
				}
			}

			$entityManager->persist($section);
			$entityManager->flush();

			$filesArray = [];
			$contents = $request->files->get('section')['content'];

			// FILEUPLOAD START ////////////////////////////////// ! add first content, then attachments
			//prepare files array
			foreach ($contents as $key => $value) {
				$filesArray[$key] = array_filter($value);
			}

			// Insert files separately to db
			$filesArray = array_filter($filesArray);
			foreach ($filesArray as $key => $value) {
				$content = $section->getContent()[$key];
				$i = 0;
				foreach ($value['my_files'] as $file) {
					$i++;
					$attachment = $fileUploader->upload($file, $upload_dir, $content, 'content', $i);
					$attachment->setContent($content);
					$entityManager->persist($attachment);
				}
			}
			$entityManager->flush();
			// FILEUPLOAD END //////////////////////////////////
			$this->addFlash('success', 'Successfully updated '.$section->getName().' section');
			return $this->redirectToRoute('edit_section', ['id' => $id]);
		}

		$contents = $section->getContent();
		return $this->render('form/form_section.html.twig', [
			'form' => $form->createView(),
			'contents' => $contents
		]);
	}

	/**
	 * @Route("/deleteSection-{id}", name="delete_section")
	 * @param Request $request
	 * @param $id
	 */
	public function deleteSection(Request $request, $id){
		$entityManager = $this->doctrine->getManager();
		$section = $this->doctrine->getManager()
			->getRepository(Section::class)
			->find($id);
		$section->setDeleted(true);
		$entityManager->persist($section);
		$entityManager->flush();
		return $this->redirectToRoute('homepage');
	}

	/**
	 * VIA FETCH
	 * @Route("section/attachment/delete/{id}")
	 */
	public function deleteAttachment(Request $request, $id) {
		$upload_dir = $this->getParameter('app.path.section_attachments');
		$attachment = $this->doctrine->getManager()
			->getRepository(Attachment::class)
			->find($id);
		$entityManager = $this->doctrine->getManager();
		$entityManager->remove($attachment);
		$entityManager->flush();
		unlink($upload_dir.'/'.$attachment->getImageFile());
		$response = new Response();
		return $response->send();
	}

	/**
	 * @Route("/attachment/{sorting}/sort/{id}")
	 * Method({"POST"})
	 */
	public function sortAttachments(Request $request,$sorting, $id) {
		$entityManager = $this->doctrine->getManager();
		$attachment = $this->doctrine->getManager()
			->getRepository(Attachment::class)
			->find($id);
		$attachment->setSorting($sorting);
		$entityManager->persist($attachment);
		$entityManager->flush();
	}

}
