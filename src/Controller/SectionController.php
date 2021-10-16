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

class SectionController extends AbstractController
{

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

			return $this->redirectToRoute('homepage');
		}

		return $this->render('form/form_section.html.twig', [
			'form' => $form->createView()
		]);

	}

	/**
	 * @Route("/editSection-{id}", name="edit_section")
	 */
	public function editSection($id, Request $request, Section $section, EntityManagerInterface $entityManager,FileUploader $fileUploader) : Response
	{
		if (null === $section = $entityManager->getRepository(Section::class)->find($id)) {
			throw $this->createNotFoundException('No task found for id '.$id);
		}

		$originalContent = new ArrayCollection();

		// Create an ArrayCollection of the current Content objects in the database
		foreach ($section->getContent() as $content) {
			$originalContent->add($content);
		}
		//$files = $request->files->get('project')['my_files'];

		$form = $this->createForm(SectionType::class, $section);
		$form->handleRequest($request);

		// For attachments
		if ($form->isSubmitted() && $form->isValid()) {
			foreach($request->files->get('section')['content'] as $contentFiles) {
				foreach($contentFiles['my_files'] as $file){
					if ($file) {
						$fileUploader->upload($file, $this->getParameter('app.path.section_attachments'));
					}
				}
			}

			// remove the relationship between the Content and the Section
			foreach ($originalContent as $content) {
				if (false === $section->getContent()->contains($content)) {
					// If the entry should stay in the database
					$content->setSection(null);
					// if you wanted to delete the Tag entirely, you can also do that
					//$entityManager->remove($content);
					$entityManager->persist($content);
				}
			}
			$entityManager->persist($section);
			$entityManager->flush();
			//return $this->redirectToRoute('edit_section', ['id' => $id]);
		}

		return $this->render('form/form_section.html.twig', [
			'form' => $form->createView()
		]);

	}

}
