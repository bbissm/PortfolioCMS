<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Page;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;


class BaseController extends AbstractController
{
    protected $pageInfos;

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
     **/
    public function render(string $view, array $parameters = [], Response $response = null): Response
    {
        $parameters = array_merge($parameters,$this->pageInfos);
        return parent::render($view,$parameters,$response);
    }
}
