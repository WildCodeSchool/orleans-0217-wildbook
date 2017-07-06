<?php

namespace BookBundle\Controller;

use BookBundle\Entity\HomeWilder;
use BookBundle\Entity\School;
use BookBundle\Entity\Wilder;
use BookBundle\Service\CodeWarsApi;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SearchType;


class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $schools = $em->getRepository(School::class)->findAll();
        $wilders = $em->getRepository(Wilder::class)->findAll();
        return $this->render('BookBundle:Front:accueil.html.twig', array(
            'schools' => $schools,
            'wilders' => $wilders
        ));
    }

    /**
     * Shows a wilder entity.
     *
     * @Route("/profile_wilder/{id}", name="profile_wilder")
     */
    public function wilderProfileAction(CodeWarsApi $codewarsApi, Wilder $wilder)
    {
        $score = $codewarsApi->codeWarsScore($wilder->getCodewarsUsername());

        if (($wilder->getUserActivation() == true) && ($wilder->getManagerActivation() == true)) {
            return $this->render('BookBundle:Front:wilder.html.twig', array(
                'wilder' => $wilder,
                'codewars' => $score
            ));
        } else {
            $this->addFlash('danger', 'Cette ressource n\'est pas disponible.');
            return $this->redirectToRoute('search_wilder');
        }

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

        return $this->render('BookBundle:Front:realisation.html.twig', array(
            'project' => $project
        ));
    }
}
