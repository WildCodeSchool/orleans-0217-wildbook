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

        $homeWildersIndex = $em->getRepository(HomeWilder::class)->findAll();

        $form = $this->createForm(HomeWilderType::class, $homewilder);
        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
            if(isset($homeWildersIndex) && !empty($homeWildersIndex)){


                foreach ($homeWildersIndex as $homeWilderIndex){

                    $homeWilderIndex->getWilder()->setHomeWilder();
//                    dump($homeWilderIndex);die();
                    $em->remove($homeWilderIndex);
                    $em->persist($homeWilderIndex->getWilder());
                    $em->flush();
                }
            }
            $homewilder->getWilder()->setHomeWilder($homewilder);
            $em = $this->getDoctrine()->getManager();
            $em->persist($homewilder);
            $em->flush();
        }

        return $this->render('wilder/wilderHome.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     *
     * @Route("wilder/view", name="wilder_view")
     */
    public function viewHomeWilderAction()
    {
        $em = $this->getDoctrine()->getManager();
        $homeWilder = $em->getRepository(HomeWilder::class)->findAll();

        return $this->render('wilder/accueilHomeWilder.html.twig', array(
            'homeWilder' => $homeWilder
        ));
    }

}