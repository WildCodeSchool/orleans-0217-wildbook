<?php
/**
 * Created by PhpStorm.
 * User: wilder7
 * Date: 27/06/17
 * Time: 17:51
 */

namespace BookBundle\Controller;

use BookBundle\Entity\Project;
use BookBundle\Form\HomeProjectType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\HttpException;
use BookBundle\Form\ProjectSearchType;
use BookBundle\Repository\ProjectRepository;

class HomeProjectController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("project/accueil", name="project_accueil")
     */
    public function projectHomeAction(Request $request)
    {
        $homeProject = new Project();
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(HomeProjectType::class);

        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
            $data = $form->getData();
            dump($data->getTitle());
            $em = $this->getDoctrine()->getManager();
            $homeProject = $em->getRepository(Project::class)->findOneByTitle($data->getTitle());
            $homeProject->sethomeProject($data->gethomeProject());
            $homeProject->sethomeTextProject($data->gethomeTextProject());
            $em->persist($homeProject);
            $em->flush();
        }

        return $this->render('project/projectHome.html.twig', array(
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
        if ($request->isXmlHttpRequest()){
            /**
             * @var $repository ProjectRepository
             */
            $repository = $this->getDoctrine()->getRepository('BookBundle:Project');
            $data = $repository->getLike($input);
            return new JsonResponse(array("data" => json_encode($data)));
        } else {
            throw new HttpException('500', 'Invalid call');
        }
    }

}