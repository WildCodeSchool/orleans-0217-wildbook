<?php

namespace BookBundle\Controller;

use BookBundle\Entity\Project;
use BookBundle\Form\ProjectSearchType;
use BookBundle\Repository\ProjectRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use BookBundle\Service\FileUploader;


/**
 * Project controller.
 *
 * @Route("project")
 */
class ProjectController extends Controller
{
    /**
     * Lists all project entities.
     *
     * @Route("/", name="project_index")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(ProjectSearchType::class);
        $form->handleRequest($request);

        $input = $categories = $schools = $promotions = '';
        $projectsSearch = '';

        if ($form->isValid() && $form->isSubmitted()) {
            $blocResult = true;
            $data = $form->getData();
            $schools = $data['school'];
            $categories = $data['category'];
            $promotions = $data['promotion'];

            if ($schools[0] == null & $categories[0] == null) {
                $projectsSearch = $em->getRepository(Project::class)->searchBy(null, null, $promotions);
            } elseif ($schools[0] == null & $promotions[0] == null) {
                $projectsSearch = $em->getRepository(Project::class)->searchBy(null, $categories, null);
            } elseif ($categories[0] == null & $promotions[0] == null) {
                $projectsSearch = $em->getRepository(Project::class)->searchBy($schools, null, null);
            } elseif ($schools[0] == null) {
                $projectsSearch = $em->getRepository(Project::class)->searchBy(null, $categories, $promotions);
            } elseif ($categories[0] == null) {
                $projectsSearch = $em->getRepository(Project::class)->searchBy($schools, null, $promotions);
            } elseif ($promotions[0] == null) {
                $projectsSearch = $em->getRepository(Project::class)->searchBy($schools, $categories, null);
            } else {
                $projectsSearch = $em->getRepository(Project::class)->searchBy($schools, $categories, $promotions);
            }
        }

        return $this->render('project/index.html.twig', array(
            'form' => $form->createView(),
            'projects' => $projectsSearch,
        ));

    }

    /**
     * Creates a new project entity.
     *
     * @Route("/new", name="project_new")
     * @Method({"GET", "POST"})
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function newAction(Request $request, FileUploader $fileUploader)
    {
        $project = new Project();
        $form = $this->createForm('BookBundle\Form\ProjectType', $project);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();


            $em->persist($project);
            $em->flush();

            return $this->redirectToRoute('project_index');
        }

        return $this->render('project/new.html.twig', array(
            'project' => $project,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a project entity.
     *
     * @Route("/{id}", name="project_show")
     * @Method("GET")
     */
    public function showAction(Project $project)
    {
        $deleteForm = $this->createDeleteForm($project);

        if (in_array('ROLE_ADMIN', $this->getUser()->getRoles())) {
            return $this->render('project/show.html.twig', array(
                'project' => $project,
                'delete_form' => $deleteForm->createView(),
            ));
        } else {
            $userId = $this->getUser()->getId();
            $projectId = $project->getId();

            $em = $this->getDoctrine()->getManager();
            $projectsUser = $em->getRepository('BookBundle:Project')->projectsByWilder($userId);
            $projectsUserId = [];
            foreach ($projectsUser as $projectUser) {
                $projectsUserId[] = $projectUser->getId();
            }
            if (in_array($projectId, $projectsUserId)) {
                return $this->render('project/show.html.twig', array(
                    'project' => $project,
                    'delete_form' => $deleteForm->createView(),
                ));
            }
        }
    }

    /**
     * Displays a form to edit an existing project entity.
     *
     * @Route("/{id}/edit", name="project_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Project $project, FileUploader $fileUploader)
    {
        $deleteForm = $this->createDeleteForm($project);
        $editForm = $this->createForm('BookBundle\Form\ProjectType', $project);
        $editForm->handleRequest($request);

        if (in_array('ROLE_ADMIN', $this->getUser()->getRoles())) {
            if ($editForm->isSubmitted() && $editForm->isValid()) {
                $this->getDoctrine()->getManager()->flush();
                return $this->redirectToRoute('project_index');
            }
            return $this->render('project/edit.html.twig', array(
                'project' => $project,
                'edit_form' => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
            ));
        } else {
            $userId = $this->getUser()->getId();
            $projectId = $project->getId();

            $em = $this->getDoctrine()->getManager();
            $projectsUser = $em->getRepository('BookBundle:Project')->projectsByWilder($userId);
            $projectsUserId = [];
            foreach ($projectsUser as $projectUser) {
                $projectsUserId[] = $projectUser->getId();
            }
            if (in_array($projectId, $projectsUserId)) {
                if ($editForm->isSubmitted() && $editForm->isValid()) {
                    $this->getDoctrine()->getManager()->flush();
                    return $this->redirectToRoute('project_one_wilder_index');
                }
                return $this->render('project/edit.html.twig', array(
                    'project' => $project,
                    'edit_form' => $editForm->createView(),
                ));
            } else {
                return $this->redirectToRoute('project_one_wilder_index');
            }

        }

    }

    /**
     * Deletes a project entity.
     *
     * @Route("/{id}", name="project_delete")
     * @Method("DELETE")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function deleteAction(Request $request, Project $project)
    {
        $form = $this->createDeleteForm($project);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($project);
            $em->flush();
        }

        return $this->redirectToRoute('project_index');
    }

    /**
     * Creates a form to delete a project entity.
     *
     * @param Project $project The project entity
     *
     * @return \Symfony\Component\Form\Form The form
     *
     * @Security("has_role('ROLE_ADMIN')")
     */
    private function createDeleteForm(Project $project)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('project_delete', array('id' => $project->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }

    /**
     * Displays a form to edit an existing language entity.
     *
     * @Route("/{id}/delete", name="project_indexdelete")
     * @Method({"GET", "POST"})
     */
    public function indexDeleteAction(Project $project)
    {
        $deleteForm = $this->createDeleteForm($project);

        return $this->render('delete.html.twig', array(
            'delete_form' => $deleteForm->createView(),
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
