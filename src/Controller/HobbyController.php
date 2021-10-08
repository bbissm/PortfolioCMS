<?php

namespace App\Controller;

use App\Entity\Attachment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Hobby;
use App\Form\HobbyType;
use Symfony\Component\HttpFoundation\Request;

class HobbyController extends AbstractController
{
	/**
	 * @Route("/addHobby", name="create_hobby")
	 *
	 */
	public function create(Request $request): Response
	{
		$hobby = new Hobby();
		$form = $this->createForm(HobbyType::class, $hobby);
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
			var_dump($request);
			die();
			$upload_dir = $this->getParameter('uploads_directory');
			$files = $request->files->get('post')['my_files'];
			foreach ($files as $file) {
				$filename = md5(uniqid()).' '.$file->guessExtension();
				$file->move($upload_dir,$filename);
			}

			// $form->getData() holds the submitted values
			// but, the original `$task` variable has also been updated
			//$hobby = $form->getData();
			// ... perform some action, such as saving the task to the database
			// for example, if Task is a Doctrine entity, save it!
			//$entityManager = $this->getDoctrine()->getManager();
			//$entityManager->persist($hobby);
			//$entityManager->flush();

			return $this->redirectToRoute('homepage');
		}
		return $this->render('form_hobby.html.twig', [
			'form' => $form->createView(),

		]);

	}

	/**
	 * @Route("/editHobby-{id}", name="edit_hobby")
	 */
	public function edit(int $id, Request $request, Hobby $hobby): Response
	{

		$form = $this->createForm(HobbyType::class, $hobby);
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
			$upload_dir = $this->getParameter('app.path.hobby_attachments');
			$files = $request->files->get('hobby')['my_files'];


			// first delete image in folder
			/*if ($hobby->getImage() != ''){
				unlink($upload_dir.'/'.$hobby->getImage());
			}*/

			//$attachment->setImage(''); // then delete image in db

			// loop through uploaded files and set images
			$entityManager = $this->getDoctrine()->getManager();
			foreach ($files as $file) {
				$originFileName = $file->getClientOriginalName().'.'.$file->guessExtension();
				$filename = md5(uniqid());
				$file->move($upload_dir,$filename);

				$attachment = new Attachment();
				$attachment->setImageFile($filename);
				$attachment->setImage($file->getClientOriginalName($originFileName));
				$attachment->setHobbyId($id);

				$entityManager->persist($attachment);

			}
			$entityManager->flush();


			// $form->getData() holds the submitted values
			// but, the original `$task` variable has also been updated
			$hobby = $form->getData();

			// ... perform some action, such as saving the task to the database
			// for example, if Task is a Doctrine entity, save it!
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($hobby);
			$entityManager->flush();

			return $this->redirectToRoute('homepage');
		}


		$attachments = $this->getDoctrine()
			->getRepository(Attachment::class)
			->findBy(['hobby_id'=>$id]);

		return $this->render('form_hobby.html.twig', [
			'form' => $form->createView(),
			'attachments' => $attachments
		]);
	}

	function object_to_array($data)
	{
		if (is_array($data) || is_object($data))
		{
			$result = [];
			foreach ($data as $key => $value)
			{
				$result[$key] = (is_array($data) || is_object($data)) ? object_to_array($value) : $value;
			}
			return $result;
		}
		return $data;
	}

	/**
	 * @Route("/deleteHobby-{id}", name="delete_hobby")
	 */
	public function delete(int $id): Response
	{
		$entityManager = $this->getDoctrine()->getManager();
		$hobby = $entityManager->getRepository(Hobby::class)->find($id);
		$entityManager->remove($hobby);
		$entityManager->flush();

		return $this->redirectToRoute('homepage');
	}
}
