<?php
/**
 * Created by PhpStorm.
 * User: wilder7
 * Date: 20/06/17
 * Time: 12:18
 */

namespace BookBundle\Controller;

use BookBundle\Entity\HomeWilder;
use BookBundle\Entity\Wilder;
use BookBundle\Form\HomeWilderType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\HttpFoundation\Request;



class HomeWilderController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("wilder/accueil", name="wilder_accueil")
     */
    public function wilderAccueilAction(Request $request = null)
    {
        $homewilder = new HomeWilder();
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(HomeWilderType::class, $homewilder);
        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($homewilder);
            dump($homewilder);die();
            $em->flush();
        }

        return $this->render('wilder/wilderHome.html.twig', array(
            'form' => $form->createView()
        ));
    }

}