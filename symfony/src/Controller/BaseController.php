<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Page;
use Symfony\Component\HttpFoundation\RequestStack;


class BaseController extends AbstractController
{
    protected $pageInfos;
    protected $page;
    /**
     * zuständig für globale Variable für restliche controller
     **/
    public function __construct(RequestStack $requestStack)
    {
        // set custom attributes
        $requestStack->getCurrentRequest()->attributes->set('pageParams', [
            'eintrage'=>[0=>'Martin',1=>'Andreas'],
        ]);
        // get all attributes for global usage
        $this->pageInfos = $requestStack->getCurrentRequest()->attributes->all();
    }

    /**
     * Zuständig für Twig response
     * addiert variablen zu den jeweiligen gerenderten templates
     **/
    public function render(string $view, array $parameters = [], Response $response = null): Response
    {
        $pages = $this->getDoctrine()->getRepository(Page::class)->findBy(['active'=> 1, 'hide_menu' => false]);
        $page = $this->getDoctrine()->getRepository(Page::class)->findOneBy(['active'=> 1, 'route' => $this->pageInfos['_route']]);
        $this->pageInfos['page'] = $page;
        $this->pageInfos['menu'] = $pages;


        $parameters = array_merge($parameters,$this->pageInfos);

        /** @var Page $page  **/ // Hat kein Einfluss auf den Result

        //getting template if page exists
        $page = $this->pageInfos['page'];
        if ($page != null) {
            if ( $page->getTemplate() != "") {
                $view =  $page->getTemplate();
            }
        }else{
            $view = '404.html.twig';
        }

        return parent::render($view,$parameters,$response);
    }
}
