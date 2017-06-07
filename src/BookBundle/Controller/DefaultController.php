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
        return $this->render('BookBundle:Front:list_wilders.html.twig');
    }

    /**
     * @Route("/listrealisations")
     */
    public function listRealisationsAction()
    {
        return $this->render('BookBundle:Front:list_realisations.html.twig');
    }
}
