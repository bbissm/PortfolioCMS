<?php

namespace App\Controller;

use App\Entity\Attachment;
use App\Entity\Hobby;
use App\Entity\Project;
use App\Entity\Section;
use App\Form\ContactType;
use ArrayObject;
use Doctrine\Common\Collections\ArrayCollection;
use Psr\Log\LoggerInterface;
use Swift_Mailer;
use Swift_Message;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\FormView;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Message;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use Symfony\Component\Security\Core\Security;

/**
 * Class HomeController
 * @package App\Controller
 * @Route(requirements={"lang": "de|fr|en"})
 */
class HomeController extends AbstractController
{
	private $isAuthenticated;
	private $mailer;

	public function __construct(Security $security, MailerInterface $mailer)
	{
		$this->isAuthenticated = $security->isGranted('ROLE_DEV') || $security->isGranted('ROLE_USER');
		$this->mailer = $mailer;
	}

	/**
     * @Route("/", name="homepage")
     * $routeParams has all needed global variables
    */
    public function home(Request $request): Response
    {
		$sectionsFindBy = $this->isAuthenticated ? [] : ['active' => 1];
			$sections = $this->getDoctrine()
			->getRepository(Section::class)
			->findBy($sectionsFindBy,['sorting' => 'ASC']);
		$hobbies = $this->getDoctrine()
			->getRepository(Hobby::class)
			->findAll();
		$projects = $this->getDoctrine()
			->getRepository(Project::class)
			->findAll();
		$readMe = file_get_contents($this->getParameter('kernel.project_dir').'/readme.md');

		// Contactform
		$form = $this->createForm(ContactType::class);
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
			$html = '';
			// get data
			foreach ($form->getData() as $key => $value){
				$html .= '<p>'.$key.': '.$value.'</p>';
			}
			$email = (new Email())
				->from('info@martin-skills.ch')
				->to('info@martin-skills.ch')
				->subject('Kontaktformumlar wurde ausgefüllt!')
				->html($html)
			;
			$emailConfirmation = (new Email())
				->from('info@martin-skills.ch')
				->to($form->getData()['email'])
				->subject('Bestätigung Kontaktformular')
				->text(
					"Hallo, \n\n\n Danke für dein Interesse an meiner Webseite und dass du mich kontaktiert hast. 
				\n\n Ich werde mich bei dir in den nächsten 12 Stunden melden. \n\n\n\n Liebe Grüsse \n\n Martin"
				)
			;
			$this->mailer->send($email);
			$this->mailer->send($emailConfirmation);
			$this->addFlash('success', 'Your message has been sent');
			return $this->redirect($this->generateUrl('homepage').'#contact');
		}
		// Contactform end


		return $this->render('homepage.html.twig', ['sections' =>$sections,'projects'=>$projects,'hobbies'=>$hobbies, 'form' => $form->createView(), 'readme' => $readMe]);
    }

	/**
	 * FETCH
	 * @Route("/section/{id}/sort/{sorting}")
	 */
    public function sortSections($id, $sorting) {
		$entityManager = $this->getDoctrine()->getManager();
		$sections = $this->getDoctrine()
			->getRepository(Section::class)
			->find($id);
		$sections->setSorting($sorting);
		$entityManager->persist($sections);
		$entityManager->flush();

	}
}
