<?php

namespace App\Controller;

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
		return $this->render('form_hobby.html.twig', [
			'form' => $form->createView(),

		]);
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
