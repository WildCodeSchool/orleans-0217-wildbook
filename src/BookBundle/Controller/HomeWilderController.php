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
use BookBundle\Repository\WilderRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

/**
 * Class HomeWilderController
 * @package BookBundle\Controller
 * @Route("wilder/accueil")
 */
class HomeWilderController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/", name="wilder_accueil")
     */
    public function wilderAccueilAction(Request $request = null)
    {
        $homewilder = new HomeWilder();
        $em = $this->getDoctrine()->getManager();

        $homeWilder = $em->getRepository(HomeWilder::class)->findOneBy([]);

        $form = $this->createForm(HomeWilderType::class, $homewilder);
        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
            if (isset($homeWilder) && !empty($homeWilder)) {
                $em->remove($homeWilder);
                $em->flush();
            }

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
     * @Route("/view", name="wilder_view")
     */
    public function viewHomeWilderAction()
    {
        $em = $this->getDoctrine()->getManager();
        $homeWilder = $em->getRepository(HomeWilder::class)->findAll();

        return $this->render('wilder/accueilHomeWilder.html.twig', array(
            'homeWilder' => $homeWilder
        ));
    }

    /**
     * @Route("/ajax/{input}")
     * @Method("POST")
     *
     * @param Request $request
     * @param $input
     *
     * @return JsonResponse
     */
    public function autocompleteAction(Request $request, $input)
    {
        if ($request->isXmlHttpRequest()){
            /**
             * @var $repository WilderRepository
             */
            $repository = $this->getDoctrine()->getRepository('BookBundle:Wilder');
            $data = $repository->getLike($input);
            return new JsonResponse(array("data" => json_encode($data)));
        } else {
            throw new HttpException('500', 'Invalid call');
        }
    }

}