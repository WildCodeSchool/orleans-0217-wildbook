<?php

namespace BookBundle\Controller;

use BookBundle\Entity\Wilder;
use BookBundle\Service\CodeWarsApi;
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
     * @Route("/profile_wilder/{id}", name="profile_wilder")
     */
    public function wilderProfileAction(CodeWarsApi $codewarsApi, Wilder $wilder )
    {
        $score = $codewarsApi->codeWarsScore($wilder->getCodewarsUsername());
        $em = $this->getDoctrine()->getManager();

        $wilder = $em->getRepository('BookBundle:Wilder')
            ->findOneById($wilder);

        return $this->render('BookBundle:Front:wilder.html.twig',array(
            'wilder'=>$wilder,
            'codewars'=>$score
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
