<?php
/**
 * Created by PhpStorm.
 * User: wilder7
 * Date: 25/06/17
 * Time: 19:55
 */

namespace BookBundle\Controller;


use BookBundle\Form\WilderAccueilType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use BookBundle\Entity\Wilder;

/**
 * Class WilderAccueilController
 * @package BookBundle\Controller
 */
class WilderAccueilController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("wilder/accueil", name="wilder_accueil")
     */
    public function wilderAccueilAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(WilderAccueilType::class);
        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
            $data = $form->getData();
            $wilderAccueil = $data['wilder'];
            $accroche = $data['accroche'];
//            $wilderAccueil = array(
//                'wilder'=>$wilder,
//                'accroche'=>$accroche
//            );
            return $this->render('BookBundle:Front:accueil.html.twig', array(
                'wilderAccueil'=>$wilderAccueil,
                'accroche'=>$accroche
            ));
        }

        return $this->render('wilder/wilderAccueil.html.twig', array(
            'form' => $form->createView()
        ));
    }


}