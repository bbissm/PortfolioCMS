<?php

namespace App\Controller;

use App\Entity\Attachment;
use App\Entity\Hobby;
use ReCaptcha\ReCaptcha;
use App\Entity\Project;
use App\Entity\Section;
use App\Form\ContactType;
use ArrayObject;
use Symfony\Component\Form\FormError;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Persistence\ManagerRegistry;
use Psr\Log\LoggerInterface;
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
	private $doctrine;

    public function __construct(Security $security, MailerInterface $mailer, ManagerRegistry $doctrine)
	{
		$this->isAuthenticated = $security->isGranted('ROLE_DEV') || $security->isGranted('ROLE_USER');
		$this->mailer = $mailer;
		$this->doctrine = $doctrine;
    }

	/**
     * @Route("/", name="homepage")
     * $routeParams has all needed global variables
    */
    public function home(Request $request, ): Response
    {
		$findSectionsByActive = $this->isAuthenticated ? ['deleted' => null] : ['active' => 1, 'deleted' => null];
		$sections = $this->doctrine
			->getRepository(Section::class)
			->findBy($findSectionsByActive,['sorting' => 'ASC']);
        $findByActive = $this->isAuthenticated ? [] : ['active' => 1];
        $hobbies = $this->doctrine
			->getRepository(Hobby::class)
			->findBy($findByActive,['sorting' => 'ASC']);
		$projects = $this->doctrine
			->getRepository(Project::class)
			->findBy($findByActive,['sorting' => 'ASC']);
		$readMe = file_get_contents($this->getParameter('kernel.project_dir').'/DOCS.md');

		// Contactform
        $site_key = $this->getParameter('app.RECAPTCHA_SITE_KEY');
        $secret_key = $this->getParameter('app.RECAPTCHA_SECRET_KEY');
        $recaptcha = new ReCaptcha($secret_key);
        $form = $this->createForm(ContactType::class);
		$form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $captcha = $form->get('captcha')->getData();
            if(!empty($captcha)) {
                $resp = $recaptcha->verify($captcha, $_SERVER['REMOTE_ADDR']);
                if ($resp->isSuccess()) {
                    $this->sendEmail($form);
                    return $this->redirect($this->generateUrl('homepage').'#contact');
                } else {
                    $form->get('captcha')->addError(new FormError('Captcha is not valid'));
                    return new Response('Captcha is not valid', 400);
                }
            }
        }
		// contactform end

		$return = [
			'sections' => $sections,
			'sectionDevAccess' => [1,2,4,10], // Get all sections only ROLE_DEV can access
			'projectDevAccess' => [13,14,36], // Get all projects only ROLE_DEV can access
			'hobbyDevAccess' => [35,36,37], // Get all hobbies only ROLE_DEV can access
			'projects'=>$projects,
			'hobbies'=>$hobbies,
			'form' => $form->createView(),
			'readme' => $readMe
		];
		return $this->render('homepage.html.twig', $return);
    }

	/**
	 * FETCH
	 * @Route("/section/{id}/sort/{sorting}")
	 */
    public function sortSections($id, $sorting) {
		$entityManager = $this->doctrine->getManager();
		$sections = $this->doctrine
			->getRepository(Section::class)
			->find($id);
		$sections->setSorting($sorting);
		$entityManager->persist($sections);
		$entityManager->flush();

	}

	public function sendEmail($form)
	{
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
		$this->addFlash('success', 'Danke. Deine Nachricht wurde abgeschickt!');
	}
}
