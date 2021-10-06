<?php

namespace App\Controller;

use App\Form\ContactType;
use Swift_Mailer;
use Swift_Message;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends BaseController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function sendEmail(Request $request, Swift_Mailer $mailer): Response
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

            return $this->redirectToRoute('contact');
        }
        return $this->render('contact.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
