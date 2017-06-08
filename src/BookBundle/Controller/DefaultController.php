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
     * @Route("/search_wilder")
     */
    public function listWildersAction()
    {
        $em = $this->getDoctrine()->getManager();
        $languages = $em->getRepository('BookBundle:Language')->findAll();
        $schools = $em->getRepository('BookBundle:School')->findAll();
        $promotions = $em->getRepository('BookBundle:Promotion')->findAll();
        $availabilities = $em->getRepository('BookBundle:Availability')->findAll();
        return $this->render('BookBundle:Front:wilder_search.html.twig' , array(
            'languages' => $languages,
            'schools' => $schools,
            'promotions' => $promotions,
            'availabilities' => $availabilities,
        ));
    }


    /**
     * @Route("/search_realisation", name="search_realisation")
     */
    public function listRealisationsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $projects = $em->getRepository('BookBundle:Project')->findAll();
        $categories = $em->getRepository('BookBundle:Category')->findAll();
        $schools = $em->getRepository('BookBundle:School')->findAll();
        $promotions = $em->getRepository('BookBundle:Promotion')->findAll();

        return $this->render('BookBundle:Front:realisation_search.html.twig' ,array(
            'projects' => $projects,
            'categories' => $categories,
            'schools' => $schools,
            'promotions' => $promotions,
        ));
    }

}
