<?php

namespace App\Controller;

use App\Entity\Attachment;
use App\Entity\Hobby;
use App\Entity\Project;
use App\Entity\Section;
use App\Form\ContactType;
use ArrayObject;
use Doctrine\Common\Collections\ArrayCollection;
use Swift_Mailer;
use Swift_Message;
use Symfony\Component\Form\FormView;
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
    public function home(Request $request, Swift_Mailer $mailer): Response
    {
		$sections = $this->getDoctrine()
			->getRepository(Section::class)
			->findBy([],['sorting' => 'ASC']);
		$hobbies = $this->getDoctrine()
			->getRepository(Hobby::class)
			->findAll();
		$projects = $this->getDoctrine()
			->getRepository(Project::class)
			->findAll();
		$form = $this->contactForm($request, $mailer);

		return $this->render('homepage.html.twig', ['sections' =>$sections,'projects'=>$projects,'hobbies'=>$hobbies,'form'=>$form]);
    }

	/**
	 * FETCH
	 * @Route("/section/{id}/sort/{sorting}")
	 */
    public function sortSections(Request $request, $id, $sorting) {
		$entityManager = $this->getDoctrine()->getManager();
		$sections = $this->getDoctrine()
			->getRepository(Section::class)
			->find($id);
		$sections->setSorting($sorting);
		$entityManager->persist($sections);
		$entityManager->flush();

	}

	public function contactForm(Request $request, Swift_Mailer $mailer): FormView
	{
		$form = $this->createForm(ContactType::class);
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {

			// $form->getData() holds the submitted values
			// but, the original `$task` variable has also been updated
			$contact = $form->getData();

			$message = (new Swift_Message('Hello Email'))
				->setFrom($contact['email'])
				->setTo('martin.ivanenko@hotmail.com')
				//->setTo('info@minigraphx.de')
				->setBody('<h1>Thanks for Contacting us!</h1>',
					//$this->renderView(
					// templates/emails/registration.html.twig
					//'emails/registration.html.twig',
					//['name' => $name]
					// ),
					'text/html'
				)
			;
			$mailer->send($message, $error);

			$this->addFlash('success', 'Your message has been sent');
		}
		return $form->createView();
	}
}
