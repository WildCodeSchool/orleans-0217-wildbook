<?php

namespace BookBundle\Controller;

use BookBundle\Entity\School;
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
        $em = $this->getDoctrine()->getManager();
        $schools = $em->getRepository(School::class)->findAll();
        $wilders = $em->getRepository(Wilder::class)->findAll();
        return $this->render('BookBundle:Front:accueil.html.twig', array(
            'schools' => $schools,
            'wilders' =>$wilders
        ));
    }

    /**
     * Shows a wilder entity.
     *
     * @Route("/profile_wilder/{id}", name="profile_wilder")
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
     * @Route("/detail_project/{id}", name="detail_project")
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
