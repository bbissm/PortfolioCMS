<?php

namespace App\Controller;

use App\Entity\Attachment;
use App\Entity\Hobby;
use App\Entity\Project;
use App\Entity\Section;
use ArrayObject;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class HomeController
 * @package App\Controller
 * @Route(requirements={"lang": "de|fr|en"})
 */
class HomeController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     * $routeParams has all needed global variables
    */
    public function home(Request $request): Response
    {

		$hobbies = $this->getDoctrine()
			->getRepository(Hobby::class)
			->findAll();

		foreach ($hobbies as $hobby) {
			$attachments = $this->getDoctrine()
				->getRepository(Attachment::class)
				->findBy(['hobby_id' => $hobby->getId()],['sorting'=> 'ASC']);
			$hobby->attachments = $attachments;
		}

		$projects = $this->getDoctrine()
			->getRepository(Project::class)
			->findAll();

		foreach ($projects as $project) {
			$attachments = $this->getDoctrine()
				->getRepository(Attachment::class)
				->findBy(['project_id' => $project->getId()],['sorting'=> 'ASC']);
			$project->attachments = $attachments;
		}


		$sections = $this->getDoctrine()
			->getRepository(Section::class)
			->findBy([],['sorting' => 'ASC']);

		return $this->render('homepage.html.twig', ['hobbies'=>$hobbies, 'sections' =>$sections, 'projects'=>$projects]);
    }

	/**
	 * @Route("/section/{id}/sort/{sorting}")
	 */
    public function sortSections(Request $request, $id, $sorting) {
		// getting highest current id of hobby // TODO: Make it more simple
		$entityManager = $this->getDoctrine()->getManager();
		$sections = $this->getDoctrine()
			->getRepository(Section::class)
			->find($id);
		$sections->setSorting($sorting);
		$entityManager->persist($sections);
		$entityManager->flush();

	}
}
