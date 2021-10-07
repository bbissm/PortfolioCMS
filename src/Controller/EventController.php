<?php

namespace App\Controller;

use App\Entity\Event;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EventController extends AbstractController
{
    /**
     * @Route("/event", name="event")
     */
    public function list(): Response
    {
        $events = $this->getDoctrine()
            ->getRepository(Event::class)
            ->findAll();
        if (!$events) {
            throw $this->createNotFoundException(
                'No Events found'
            );
        }
        return $this->render('event.html.twig', ['events'=>$events]);

    }
}
