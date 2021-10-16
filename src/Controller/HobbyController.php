<?php

namespace App\Controller;
use Symfony\Contracts\HttpClient\HttpClientInterface;
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

		// For attachments
		if ($form->isSubmitted() && $form->isValid()) {

			// $form->getData() holds the submitted values
			$hobby = $form->getData();

			// ... perform some action, such as saving the task to the database
			// for example, if Task is a Doctrine entity, save it!
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($hobby);
			$entityManager->flush();

			// getting highest current id of hobby // TODO: Make it more simple
			$query = $this->getDoctrine()->getManager()->createQuery(
				'SELECT MAX(h.id)
				FROM App\Entity\Hobby h'
			);
			$newHobbyId = $query->getResult()[0][1];


			$upload_dir = $this->getParameter('app.path.hobby_attachments');
			$files = $request->files->get('hobby')['my_files'];

			// loop through uploaded files and set images
			$entityManager = $this->getDoctrine()->getManager();
			$i = 0;
			foreach ($files as $file) {
				$originFileName = $file->getClientOriginalName().'.'.$file->guessExtension();
				$filename = md5(uniqid());
				$file->move($upload_dir,$filename);
				$attachment = new Attachment();
				$attachment->setImageFile($filename);
				$attachment->setImage($file->getClientOriginalName($originFileName));
				$attachment->setHobbyId($newHobbyId);
				$attachment->setSorting($i++);
				$entityManager->persist($attachment);
			}
			$entityManager->flush();
			//return $this->redirectToRoute('homepage');
		}

		return $this->render('form/form_hobby.html.twig', [
			'form' => $form->createView()
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

			// getting highest current id of hobby // TODO: Make it more simple
			$query = $this->getDoctrine()->getManager()->createQuery(
				'SELECT MAX(a.sorting)
				FROM App\Entity\Attachment a
				WHERE a.hobby_id ='.$hobby->getId()
			);
			$sorting = $query->getResult()[0][1];

			// loop through uploaded files and set images
			$entityManager = $this->getDoctrine()->getManager();
			$i = 0;
			foreach ($files as $file) {
				$i++;
				$originFileName = $file->getClientOriginalName().'.'.$file->guessExtension();
				$filename = md5(uniqid());
				$file->move($upload_dir,$filename);

				$attachment = new Attachment();
				$attachment->setImageFile($filename);
				$attachment->setImage($file->getClientOriginalName($originFileName));
				$attachment->setHobbyId($id);
				$attachment->setSorting($sorting+$i);
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

			//return $this->redirectToRoute('homepage');
		}


		$attachments = $this->getDoctrine()
			->getRepository(Attachment::class)
			->findBy(['hobby_id'=>$id], ['sorting'=>'ASC']);

		return $this->render('form/form_hobby.html.twig', [
			'form' => $form->createView(),
			'attachments' => $attachments
		]);
	}

	/**
	 * @Route("/deleteHobby-{id}", name="delete_hobby")
	 */
	public function delete(int $id): Response
	{
		$upload_dir = $this->getParameter('app.path.hobby_attachments');
		// Remove all attachments linked to Hobby

		$attachments = $this->getDoctrine()->getManager()
			->getRepository(Attachment::class)
			->findBy(['hobby_id'=>$id]);

		$entityManager = $this->getDoctrine()->getManager();
		foreach ($attachments as $attach) {
			$entityManager->remove($attach);
			unlink($upload_dir.'/'.$attach->getImageFile());
		}
		$entityManager->flush();

		$entityManager = $this->getDoctrine()->getManager();
		$hobby = $entityManager->getRepository(Hobby::class)->find($id);
		$entityManager->remove($hobby);
		$entityManager->flush();

		return $this->redirectToRoute('homepage');
	}

	/**
	 * @Route("hobby/attachment/delete/{id}")
	 */
	public function deleteAttachment(Request $request, $id) {
		$upload_dir = $this->getParameter('app.path.hobby_attachments');
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
