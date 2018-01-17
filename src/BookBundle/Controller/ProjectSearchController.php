<?php

namespace BookBundle\Controller;

use BookBundle\Entity\Category;
use BookBundle\Entity\Project;
use BookBundle\Entity\Promotion;
use BookBundle\Entity\School;
use BookBundle\Form\ProjectSearchType;
use BookBundle\Repository\ProjectRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;


/**
 * ProjectSearch Controller.
 *
 * @Route("search_realisation")
 */
class ProjectSearchController extends Controller
{
    /**
     * @Route("/", name="search_realisation")
     */
    public function listRealisationsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(ProjectSearchType::class);
        $form->handleRequest($request);

        $categories=$schools=$promotions=$projectsSearch='';

        if ($form->isValid() && $form->isSubmitted()) {
            $data = $form->getData();
            $schools = $data['school'];
            $categories = $data['category'];
            $promotions = new ArrayCollection();
            if (key_exists('promotion', $data)) {
                $promotions = $data['promotion'];
            }

            $projectsSearch = $em->getRepository(Project::class)->searchBy($schools, $categories, $promotions);
        }

        return $this->render('BookBundle:Front:realisation_search.html.twig' ,array(
            'form' => $form->createView(),
            'projectsSearch' => $projectsSearch,
        ));
    }


    /**
     * @Route("/ajax-thumbnail/{input}")
     * @Method("POST")
     *
     * @param Request $request
     * @param $input
     *
     * @return JsonResponse
     */
    public function autocompleteThumbnailAction(Request $request, $input)
    {
        if ($request->isXmlHttpRequest()){
            /**
             * @var $repository ProjectRepository
             */
            $em = $this->getDoctrine()->getManager();
            $projects =  $em->getRepository('BookBundle:Project')->getLike($input);
            return $this->render('BookBundle:Front:project_thumbnails.html.twig', [
                'projects' => $projects,
                ]
            );
        } else {
            throw new HttpException('500', 'Invalid call');
        }
    }
}