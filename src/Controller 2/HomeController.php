<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
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
     *
    */
    public function home(Request $request): Response
    {
        $routeName = $request->attributes->get('_route');
        $routeParameters = $request->attributes->get('_route_params');
        $allAttributes = $request->attributes->all();

        $number = random_int(0, 100);

        return $this->render('homepage.html.twig', [
            'number' => $number,

        ]);
    }
}
