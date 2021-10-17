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
	public function editSection($id, Request $request, Section $section, EntityManagerInterface $entityManager,FileUploader $fileUploader, SluggerInterface $slugger) : Response
	{

		$oldContent = new ArrayCollection();

		// Create content before submit
		foreach ($section->getContent() as $content) {
			$oldContent->add($content);
		}
		$form = $this->createForm(SectionType::class, $section);
		$form->handleRequest($request);
		$files = $request->files->get('section')['content'];
		// For attachments
		if ($form->isSubmitted() && $form->isValid()) {
			$newContent = $section->getContent();
			// Create content before submit and remove the relationship between the Content and the Section
			dump($request);
			foreach ($oldContent as $content) {
				if (false === $newContent->contains($content)) {
					// If the entry should stay in the database
					$content->setSection(null);
					// if you wanted to delete the Tag entirely, you can also do that
					//$entityManager->remove($content);
					$entityManager->persist($content);
				}

			}
			/*for ($i = 0; $i < count($newContent); $i++) {
				dump($files);
				$file = $files[$i]['imageFile'] ?? '';
				if ($file) {
					$originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
					$safeFilename = $slugger->slug($originalFilename);
					$fileName = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();

					$newContent[$i]->setImageFile($fileName);
				}
			}*/

			foreach($files as $key => $file) {
				$file = $file['imageFile'];
				$fileName = '';
				if ($file) {
					$originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
					$safeFilename = $slugger->slug($originalFilename);
					$fileName = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();
				}
				foreach ($newContent as $content) {
					$content->setImageFile($fileName);
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
