<?php

namespace BookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('BookBundle:Front:accueil.html.twig');
    }

    /**
     * @Route("/listwilders")
     */
    public function listWildersAction()
    {
        return $this->render('BookBundle:Front:wilder_search.html.twig');
    }

    /**
     * @Route("/search_realisation")
     */
    public function listRealisationsAction()
    {
        return $this->render('BookBundle:Front:realisation_search.html.twig');
    }
}
