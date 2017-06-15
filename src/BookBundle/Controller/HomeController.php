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

    /**
     * Shows a project entity.
     *
     * @Route("/project/{id}/detail", name="project_detail")
     */
    public function projectDeatailAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $project = $em->getRepository('BookBundle:Project')
            ->findOneById($id);

        return $this->render('BookBundle:Front:realisation.html.twig',array(
            'project'=>$project
        ));
    }

}
