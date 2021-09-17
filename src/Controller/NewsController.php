<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\News;
use App\Form\NewsType;

/**
 * Class NewsController
 * @package App\Controller
 */
class NewsController extends BaseController
{
    /**
     * @Route("/news", name="news")
     */
    public function list(Request $request): Response
    {
        $news = $this->getDoctrine()
            ->getRepository(News::class)
            ->findAll();

        if (!$news) {
            throw $this->createNotFoundException(
                'No News found'
            );
        }


        return $this->render('news.html.twig', ['news'=>$news]);
    }

    /**
     * @Route("/news/{id}", name="news_detail")
     */
    public function detail(Request $request, News $news): Response
    {

        return $this->render('news_detail.html.twig', ['detail' =>$news]);

    }

    /**
     * @Route("/addNews", name="create_news")
     *
     */
    public function createNews(Request $request): Response
    {
        $news = new News();
        $form = $this->createForm(NewsType::class, $news);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $news = $form->getData();
            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($news);
            $entityManager->flush();

            return $this->redirectToRoute('news');
        }
        return $this->render('form_news.html.twig', [
            'form' => $form->createView(),

        ]);

    }

    /**
     * @Route("/editNews-{id}", name="edit_news")
     */
    public function update(int $id, Request $request, News $news): Response
    {
        $form = $this->createForm(NewsType::class, $news);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $news = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($news);
            $entityManager->flush();

            return $this->redirectToRoute('news');
        }
        return $this->render('form_news.html.twig', [
            'form' => $form->createView(),

        ]);
    }


    /**
     * @Route("/deleteNews-{id}", name="delete_news")
     */
    public function delete(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $news = $entityManager->getRepository(News::class)->find($id);
        $entityManager->remove($news);
        $entityManager->flush();

        return $this->redirectToRoute('news');
    }
}
