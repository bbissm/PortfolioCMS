<?php

namespace App\Controller;

use App\Entity\Attachment;
use App\Entity\Content;
use App\Entity\Section;
use App\Form\SectionType;
use App\Repository\SectionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\FileUploader;
use Symfony\Component\String\Slugger\SluggerInterface;

class SectionController extends AbstractController
{

	public function __construct()
	{
	}

	/**
	 * @Route("/addSection", name="add_section")
	 */
	public function addSection(Request $request, EntityManagerInterface $entityManager) : Response
	{
		$section = new Section();
		$form = $this->createForm(SectionType::class, $section);


		$form->handleRequest($request);

		// For attachments
		if ($form->isSubmitted() && $form->isValid()) {

			// getting highest current id of project // TODO: Make it more simple
			$query = $this->getDoctrine()->getManager()->createQuery(
				'SELECT MAX(s.sorting)
				FROM App\Entity\Section s'
			);
			$sorting = $query->getResult()[0][1];

			// $form->getData() holds the submitted values
			$section = $form->getData();

			// ... perform some action, such as saving the task to the database
			// for example, if Task is a Doctrine entity, save it!
			$entityManager = $this->getDoctrine()->getManager();
			$section->setSorting($sorting+1);
			$entityManager->persist($section);
			$entityManager->flush();

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
	public function editSection($id, Request $request, Section $section, EntityManagerInterface $entityManager,FileUploader $fileUploader, SluggerInterface $slugger) : Response
	{
		if (null === $section = $entityManager->getRepository(Section::class)->find($id)) {
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
					$attachments = $entityManager
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

			return $this->redirectToRoute('edit_section', ['id' => $id]);
		}

		$contents = $section->getContent();
		return $this->render('form/form_section.html.twig', [
			'form' => $form->createView(),
			'contents' => $contents
		]);
	}

	/**
	 * VIA FETCH
	 * @Route("section/attachment/delete/{id}")
	 */
	public function deleteAttachment(Request $request, $id) {
		$upload_dir = $this->getParameter('app.path.section_attachments');
		$attachment = $this->getDoctrine()->getManager()
			->getRepository(Attachment::class)
			->find($id);
		$entityManager = $this->getDoctrine()->getManager();
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
		$entityManager = $this->getDoctrine()->getManager();
		$attachment = $this->getDoctrine()->getManager()
			->getRepository(Attachment::class)
			->find($id);
		$attachment->setSorting($sorting);
		$entityManager->persist($attachment);
		$entityManager->flush();
	}

}
