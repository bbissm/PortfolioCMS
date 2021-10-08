<?php

namespace App\Controller;

use App\Entity\Attachment;
use App\Entity\Hobby;
use ArrayObject;
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
		$hobbyArray = [];

		foreach ($hobbies as $key => $hobby) {
			$attachments = $this->getDoctrine()
				->getRepository(Attachment::class)
				->findBy(['hobby_id' => $hobby->getId()]);
			$hobby->attachments = $attachments;
		}
		if (!$hobbies) {
			throw $this->createNotFoundException(
				'No Hobby found'
			);
		}
		return $this->render('homepage.html.twig', ['hobbies'=>$hobbies]);
    }
}
