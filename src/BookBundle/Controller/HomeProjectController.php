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
use BookBundle\Form\ResetProjectType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\HttpException;
use BookBundle\Form\ProjectSearchType;
use BookBundle\Repository\ProjectRepository;

/**
 * Class HomeProjectController
 * @package BookBundle\Controller
 * @Route("project/accueil")
 */
class HomeProjectController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/", name="project_accueil")
     */
    public function projectHomeAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(HomeProjectType::class);
        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
            $data = $form->getData();
            $homeProject = $em->getRepository(Project::class)->find($data['title']->getId());
            $homeProject->setHomeProject(true);
            $homeProject->setHomeTextProject($data['homeTextProject']);
            $em->persist($homeProject);
            $em->flush();
            $this->addFlash('success', 'Le projet est mis en avant sur le site');
        }

        $homeProjects = $em->getRepository(Project::class)->findByHomeProject(true);
        return $this->render('project/projectHome.html.twig', array(
            'form' => $form->createView(),
            'homeProjects' => $homeProjects,
        ));

    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/view", name="project_view")
     */
    public function viewHomeProjectAction()
    {
        $em = $this->getDoctrine()->getManager();
        $homeProjects = $em->getRepository(Project::class)->findByHomeProject(true);

        return $this->render('project/accueilHomeProject.html.twig', array(
            'homeProjects' => $homeProjects,
        ));
    }


    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/reset/{id}", name="project_reset")
     */
    public function resetHomeProject(Request $request, Project $project)
    {
        $em = $this->getDoctrine()->getManager();
        $project->setHomeProject(false);
        $em->flush();
        $this->addFlash('success', 'Le projet '. $project->getTitle().' n\'est plus mis en avant');

        return $this->redirectToRoute('project_accueil');
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
             * @var $repository ProjectRepository
             */
            $repository = $this->getDoctrine()->getRepository('BookBundle:Project');
            $data = $repository->getLikeAdmin($input);
            return new JsonResponse(array("data" => json_encode($data)));
        } else {
            throw new HttpException('500', 'Invalid call');
        }
    }

}