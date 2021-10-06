<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class HomeController
 * @package App\Controller
 * @Route(requirements={"lang": "de|fr|en"})
 */
class HomeController extends BaseController
{
    /**
     * @Route("/", name="homepage")
     * $routeParams has all needed global variables
    */
    public function home(Request $request): Response
    {

        $number = random_int(0, 100);

        return $this->render('homepage.html.twig', [
            'number' => $number,
        ]);
    }
}
