<?php

namespace App\Controller;

use App\Entity\Hobby;
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
		$hobby = $this->getDoctrine()
			->getRepository(Hobby::class)
			->findAll();

		if (!$hobby) {
			throw $this->createNotFoundException(
				'No Hobby found'
			);
		}
		return $this->render('homepage.html.twig', ['hobbies'=>$hobby]);
    }
}
