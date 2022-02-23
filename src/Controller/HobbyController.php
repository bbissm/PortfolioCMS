<?php

namespace App\Controller;
use App\Entity\Hobby;
use App\Entity\Project;
use App\Service\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use App\Entity\Attachment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\HobbyType;
use Symfony\Component\HttpFoundation\Request;

class HobbyController extends AbstractController
{
	private $entityManager;
	private $uploadDir;
	private $fileUploader;

	public function __construct(EntityManagerInterface $entityManager,FileUploader $fileUploader,ParameterBagInterface $params)
	{
		$this->entityManager = $entityManager;
		$this->uploadDir = $params->get('app.path.hobby_attachments');
		$this->fileUploader = $fileUploader;
	}

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
			$hobby = $form->getData();
			$files = $request->files->get('hobby')['my_files'];
			// loop through uploaded files and set images
			foreach ($files as $key => $file) {
				$attachment = $this->fileUploader->upload($file, $this->uploadDir, $hobby, 'hobby', $key);
				$attachment->setHobby($hobby);
				$this->entityManager->persist($attachment);
			}
			$this->entityManager->persist($hobby);
			$this->entityManager->flush();
			$this->addFlash('success', 'Successfully created new hobby');
			return $this->redirectToRoute('edit_hobby', ['id'=>$hobby->getId()]);
		}
		return $this->render('form/form_hobby.html.twig', [
			'form' => $form->createView(),
			'attachments' => $hobby->getMyFiles()
		]);
	}

	/**
	 * @Route("/editHobby-{id}", name="edit_hobby")
	 */
	public function edit(int $id, Request $request, Hobby $hobby, FileUploader $fileUploader, SluggerInterface $slugger): Response
	{
		$form = $this->createForm(HobbyType::class, $hobby);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			// loop through uploaded files and set images
			$files = $request->files->get('hobby')['my_files'];
			foreach ($files as $key => $file) {
				$attachment = $fileUploader->upload($file, $this->getParameter('app.path.hobby_attachments'), $hobby, 'hobby', $key);
				$attachment->setHobby($hobby);
				$this->entityManager->persist($attachment);
			}
			$this->entityManager->persist($hobby);
			$this->entityManager->flush();
			$this->addFlash('success', 'Successfully updated "'.$hobby->getTitle().'"');

			return $this->redirectToRoute('edit_hobby', ['id'=>$id]); // Very important! Without it the form will be submitted by each page reload!
		}
		return $this->render('form/form_hobby.html.twig', [
			'form' => $form->createView(),
			'attachments' => $hobby->getMyFiles()
		]);
	}

	/**
	 * @Route("/deleteHobby-{id}", name="delete_hobby")
	 */
	public function delete(int $id)
	{
		$hobby = $this->entityManager->getRepository(Hobby::class)->find($id);
		$attachments = $hobby->getMyFiles();
		foreach ($attachments as $attachment) {
			$this->entityManager->remove($attachment);
			unlink($this->uploadDir.'/'.$attachment->getImageFile());
		}
		$this->entityManager->remove($hobby);
		$this->entityManager->flush();

		return $this->redirectToRoute('homepage');
	}

	/**
	 * VIA FETCH
	 * @Route("hobby/attachment/delete/{id}")
	 */
	public function deleteAttachment(int $id) {
		$attachment = $this->entityManager
			->getRepository(Attachment::class)
			->find($id);
		$this->entityManager->remove($attachment);
		$this->entityManager->flush();
		unlink($this->uploadDir.'/'.$attachment->getImageFile());
		$response = new Response();
		return $response->send();
	}

	/**
	 * VIA FETCH
	 * @Route("/attachment/{sorting}/sort/{id}")
	 * Method({"POST"})
	 */
	public function sortAttachments(int $sorting, int $id) {
		$attachment = $this->entityManager
			->getRepository(Attachment::class)
			->find($id);
		$attachment->setSorting($sorting);
		$this->entityManager->persist($attachment);
		$this->entityManager->flush();
	}

    /**
     * FETCH
     * @Route("/hobby/{id}/sort/{sorting}")
     */
    public function sortProject($id, $sorting) {
        $entityManager = $this->getDoctrine()->getManager();
        $hobbies = $this->getDoctrine()
            ->getRepository(Hobby::class)
            ->find($id);
        $hobbies->setSorting($sorting);
        $entityManager->persist($hobbies);
        $entityManager->flush();
    }
}
