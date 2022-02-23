<?php

namespace App\Controller;

use App\Entity\Section;
use App\Service\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\String\Slugger\SluggerInterface;
use App\Entity\Attachment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Project;
use App\Form\ProjectType;
use Symfony\Component\HttpFoundation\Request;

class ProjectController extends AbstractController
{
	private $entityManager;
	private $uploadDir;
	private $fileUploader;

	public function __construct(EntityManagerInterface $entityManager,FileUploader $fileUploader,ParameterBagInterface $params)
	{
		$this->entityManager = $entityManager;
		$this->uploadDir = $params->get('app.path.project_attachments');
		$this->fileUploader = $fileUploader;
	}

	/**
	 * @Route("/addProject", name="create_project")
	 *
	 */
	public function create(Request $request): Response
	{
		$project = new Project();
		$form = $this->createForm(ProjectType::class, $project);
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
			$project = $form->getData();
			$files = $request->files->get('project')['my_files'];
			// loop through uploaded files and set images
			foreach ($files as $key => $file) {
				$attachment = $this->fileUploader->upload($file, $this->uploadDir, $project, 'project', $key);
				$attachment->setProject($project);
				$this->entityManager->persist($attachment);
			}
			$this->entityManager->persist($project);
			$this->entityManager->flush();
			$this->addFlash('success', 'Successfully created new project');
			return $this->redirectToRoute('edit_project', ['id'=>$project->getId()]);
		}
		return $this->render('form/form_project.html.twig', [
			'form' => $form->createView(),
			'attachments' => $project->getMyFiles()
		]);
	}

	/**
	 * @Route("/editProject-{id}", name="edit_project")
	 */
	public function edit(int $id, Request $request, Project $project): Response
	{
		$oldSkills = $project->getSkills();
		$form = $this->createForm(ProjectType::class, $project);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			// loop through uploaded files and set images
			$files = $request->files->get('project')['my_files'];
			foreach ($files as $key => $file) {
				$attachment = $this->fileUploader->upload($file, $this->getParameter('app.path.project_attachments'), $project, 'project', $key);
				$attachment->setProject($project);
				$this->entityManager->persist($attachment);
			}
			$newSkills = $project->getSkills();
			foreach($oldSkills as $skill) {
				//if (false === $newSkills->contains($skill)) {

				//}
			}
			$project->setSkills($newSkills);
			$this->entityManager->persist($project);
			$this->entityManager->flush();
			$this->addFlash('success', 'Successfully updated "'.$project->getTitle().'"');
			return $this->redirectToRoute('edit_project', ['id'=>$id]); // Very important! Without it the form will be submitted by each page reload!
		}
		return $this->render('form/form_project.html.twig', [
			'form' => $form->createView(),
			'attachments' => $project->getMyFiles()
		]);
	}

	/**
	 * @Route("/deleteProject-{id}", name="delete_project")
	 */
	public function delete(int $id)
	{
		$project = $this->entityManager->getRepository(Project::class)->find($id);
		$attachments = $project->getMyFiles();
		foreach ($attachments as $attachment) {
			$this->entityManager->remove($attachment);
			unlink($this->uploadDir.'/'.$attachment->getImageFile());
		}
		$this->entityManager->remove($project);
		$this->entityManager->flush();

		return $this->redirectToRoute('homepage');
	}

	/**
	 * VIA FETCH
	 * @Route("project/attachment/delete/{id}")
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
     * @Route("/project/{id}/sort/{sorting}")
     */
    public function sortProject($id, $sorting) {
        $entityManager = $this->getDoctrine()->getManager();
        $projects = $this->getDoctrine()
            ->getRepository(Project::class)
            ->find($id);
        $projects->setSorting($sorting);
        $entityManager->persist($projects);
        $entityManager->flush();
    }
}
