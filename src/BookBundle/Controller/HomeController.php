<?php

namespace BookBundle\Controller;

use BookBundle\Entity\Wilder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SearchType;


class HomeController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('BookBundle:Front:accueil.html.twig');
    }

    /**
     * Shows a wilder entity.
     *
     * @Route("/wilder/{id}/profile", name="wilder_profile")
     */
    public function wilderProfileAction($id)
    {

        $em = $this->getDoctrine()->getManager();

        $wilder = $em->getRepository('BookBundle:Wilder')
            ->findOneById($id);

        return $this->render('BookBundle:Front:wilder.html.twig',array(
            'wilder'=>$wilder
        ));
    }

}
