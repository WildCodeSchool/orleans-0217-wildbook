<?php
/**
 * Created by PhpStorm.
 * User: wilder7
 * Date: 08/06/17
 * Time: 17:37
 */
namespace BookBundle\Controller;
use BookBundle\Entity\Language;
use BookBundle\Entity\Project;
use BookBundle\Entity\Promotion;
use BookBundle\Entity\School;
use BookBundle\Entity\Wilder;
use BookBundle\Form\WilderSearchType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HttpKernel\Exception\HttpException;
use BookBundle\Repository\WilderRepository;
/**
 * WilderSearch Controller.
 *
 * @Route("search_wilder")
 */
class WilderSearchController extends Controller
{
    /**
     * @Route("/" , name="search_wilder")
     */
    public function listWildersAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();


        $form = $this->createForm(WilderSearchType::class, ['csrf_protection' => false]);
        $form->handleRequest($request);
        $blocResult = false;


        if ($form->isValid() && $form->isSubmitted()) {
            $blocResult = true;
            $data = $form->getData();
            $languages = $data['language'];
            $schools = $data['school'];
            $promotions = $data['promotion'];
            $wildersSearch = '';

            if ($schools[0] == null) {
                $wildersSearch = $em->getRepository(wilder::class)->searchBy(null, $languages);
            } elseif ($languages[0] == null) {
                $wildersSearch = $em->getRepository(wilder::class)->searchBy($schools, null);
            } else {
                $wildersSearch = $em->getRepository(wilder::class)->searchBy($schools, $languages);
            }

            return $this->render('BookBundle:Front:wilder_search.html.twig', array(
                'blocResult' => $blocResult,
                'form' => $form->createView(),
                'wildersSearch' => $wildersSearch
            ));
        }

        return $this->render('BookBundle:Front:wilder_search.html.twig', array(
            'blocResult' => $blocResult,
            'form' => $form->createView()
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
        if ($request->isXmlHttpRequest()) {
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