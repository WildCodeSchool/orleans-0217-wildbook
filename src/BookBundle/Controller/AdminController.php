<?php
/**
 * Created by PhpStorm.
 * User: wilder7
 * Date: 12/06/17
 * Time: 22:23
 */

namespace BookBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{

    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('BookBundle:Front:accueil.html.twig');
    }

}