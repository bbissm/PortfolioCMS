<?php

namespace App\Controller;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use App\Entity\Attachment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Project;
use App\Form\ProjectType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class ProjectController extends AbstractController
{
	/**
	 * @Route("/addProject", name="create_work")
	 *
	 */
	public function create(Request $request): Response
	{
		$project = new Project();
		$form = $this->createForm(ProjectType::class, $project);


		$form->handleRequest($request);

		// For attachments
		if ($form->isSubmitted() && $form->isValid()) {

			// $form->getData() holds the submitted values
			$project = $form->getData();

			// ... perform some action, such as saving the task to the database
			// for example, if Task is a Doctrine entity, save it!
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($project);
			$entityManager->flush();

			// getting highest current id of project // TODO: Make it more simple
			$query = $this->getDoctrine()->getManager()->createQuery(
				'SELECT MAX(h.id)
				FROM App\Entity\Project h'
			);
			$newProjectId = $query->getResult()[0][1];


			$upload_dir = $this->getParameter('app.path.project_attachments');

			$files = $request->files->get('project')['my_files'];

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
				$attachment->setProjectId($newProjectId);
				$attachment->setSorting($i++);
				$entityManager->persist($attachment);
			}
			$entityManager->flush();
			return $this->redirectToRoute('homepage');
		}

		return $this->render('form/form_project.html.twig', [
			'form' => $form->createView()
		]);

	}

	/**
	 * @Route("/editProject-{id}", name="edit_project")
	 */
	public function edit(int $id, Request $request, Project $project): Response
	{
		$form = $this->createForm(ProjectType::class, $project);
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
			$upload_dir = $this->getParameter('app.path.project_attachments');
			$files = $request->files->get('project')['my_files'];

			// getting highest current id of project // TODO: Make it more simple
			$query = $this->getDoctrine()->getManager()->createQuery(
				'SELECT MAX(a.sorting)
				FROM App\Entity\Attachment a
				WHERE a.project_id ='.$project->getId()
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
				$attachment->setProjectId($id);
				$attachment->setSorting($sorting+$i);
				$entityManager->persist($attachment);

			}
			$entityManager->flush();


			// $form->getData() holds the submitted values
			// but, the original `$task` variable has also been updated
			$project = $form->getData();

			// ... perform some action, such as saving the task to the database
			// for example, if Task is a Doctrine entity, save it!
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($project);
			$entityManager->flush();

			return $this->redirectToRoute('homepage');
		}


		$attachments = $this->getDoctrine()
			->getRepository(Attachment::class)
			->findBy(['project_id'=>$id], ['sorting'=>'ASC']);

		return $this->render('form/form_project.html.twig', [
			'form' => $form->createView(),
			'attachments' => $attachments
		]);
	}

	/**
	 * @Route("/deleteProject-{id}", name="delete_project")
	 */
	public function delete(int $id): Response
	{
		$upload_dir = $this->getParameter('app.path.project_attachments');
		// Remove all attachments linked to Project

		$attachments = $this->getDoctrine()->getManager()
			->getRepository(Attachment::class)
			->findBy(['project_id'=>$id]);

		$entityManager = $this->getDoctrine()->getManager();
		foreach ($attachments as $attach) {
			$entityManager->remove($attach);
			unlink($upload_dir.'/'.$attach->getImageFile());
		}
		$entityManager->flush();

		$entityManager = $this->getDoctrine()->getManager();
		$project = $entityManager->getRepository(Project::class)->find($id);
		$entityManager->remove($project);
		$entityManager->flush();

		return $this->redirectToRoute('homepage');
	}

	/**
	 * @Route("project/attachment/delete/{id}")
	 */
	public function deleteAttachment(Request $request, $id) {
		$upload_dir = $this->getParameter('app.path.project_attachments');
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
