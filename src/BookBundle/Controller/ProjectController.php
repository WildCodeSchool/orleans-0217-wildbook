<?php

namespace BookBundle\Controller;

use BookBundle\Entity\Picture;
use BookBundle\Entity\Project;
use BookBundle\Entity\ProjectWilder;
use BookBundle\Form\PictureType;
use BookBundle\Form\ProjectSearchType;
use BookBundle\Repository\ProjectRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\HttpException;


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

        $input = $categories = $schools = $promotions = $projectsSearch = '';

        if ($form->isValid() && $form->isSubmitted()) {
            $data = $form->getData();
            $schools = $data['school'];
            $categories = $data['category'];
            $promotions = $data['promotion'];

            $projectsSearch = $em->getRepository(Project::class)->searchBy($schools, $categories, $promotions);

        }

        return $this->render('project/index.html.twig', array(
            'form'     => $form->createView(),
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
    public function newAction(Request $request)
    {

        $project = new Project();
        $projectWilder = new ProjectWilder();
        $form = $this->createForm('BookBundle\Form\ProjectType', $project);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $projectWilder->setProject($project);
            $em->persist($project);
            $em->flush();
            $this->addFlash('success', 'Nouveau projet ' . $project->getTitle() . ' enregistré');

            return $this->redirectToRoute('project_index');
        }

        return $this->render('project/new.html.twig', array(
            'project' => $project,
            'form'    => $form->createView(),
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

        if (!in_array('ROLE_ADMIN', $this->getUser()->getRoles())) {
            $projectId = $project->getId();
            $em = $this->getDoctrine()->getManager();
            $projects = $em->getRepository('BookBundle:Project')->projectsByWilder($this->getUser()->getId());

            $projectsUserId = [];
            foreach ($projects as $projectUser) {
                $projectsUserId[] = $projectUser->getId();
            }

            if (!in_array($projectId, $projectsUserId)) {
                $this->addFlash('danger', 'Tu n\'as pas accès à cette ressource');

                return $this->redirectToRoute('home_admin');
            }
        }

        return $this->render('project/show.html.twig', array(
            'project'     => $project,
            'delete_form' => $deleteForm->createView(),
        ));

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
     * Displays a form to edit an existing project entity.
     *
     * @Route("/{id}/edit", name="project_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Project $project)
    {
        $deleteForm = $this->createDeleteForm($project);

        $originalProjectWilders = new ArrayCollection();
        foreach ($project->getProjectWilders() as $projectWilder) {
            $originalProjectWilders->add($projectWilder);
        }

        $editForm = $this->createForm('BookBundle\Form\ProjectType', $project);
        $pictureForm = $this->createForm(PictureType::class);
        $editForm->handleRequest($request);
        $pictures = $project->getPictures();

        $userId = $this->getUser()->getId();
        $projectId = $project->getId();
        $em = $this->getDoctrine()->getManager();

        $projects = $em->getRepository('BookBundle:Project')->projectsByWilder($userId);
        $projectsUserId = [];
        foreach ($projects as $projectUser) {
            $projectsUserId[] = $projectUser->getId();
        }

        if (in_array('ROLE_ADMIN', $this->getUser()->getRoles()) || in_array($projectId, $projectsUserId)) {
            if ($editForm->isSubmitted() && $editForm->isValid()) {
                // gestion du delete
                foreach ($originalProjectWilders as $projectWilder) {
                    if (false === $project->getProjectWilders()->contains($projectWilder)) {
                        $em->remove($projectWilder);
                    }
                }

                $em->persist($project);

                $em->flush();

                $this->addFlash('warning', 'Projet ' . $project->gettitle() . ' modifié');

                return $this->redirectToRoute('project_edit', ['id' => $project->getId()]);

            }

            return $this->render('project/edit.html.twig', array(
                'project'      => $project,
                'pictures'     => $pictures,
                'edit_form'    => $editForm->createView(),
                'picture_form' => $pictureForm->createView(),
                'delete_form'  => $deleteForm->createView(),
            ));

        } else {
            $this->addFlash('danger', 'Tu n\'as pas accès à cette ressource');

            return $this->redirectToRoute('project_one_wilder_index');
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
            $this->addFlash('danger', 'Projet ' . $project->gettitle() . ' supprimé');
        }

        return $this->redirectToRoute('project_index');
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

    /**
     * @Route("/hide-visibility/{id}", name="project_wilder_visibility")
     */
    public function hideVisibilityAction(ProjectWilder $projectWilder)
    {
        if ($projectWilder->getWilder()->getUser() === $this->getUser()) {
            $em = $this->getDoctrine()->getManager();
            $this->addFlash('success', 'Visibilité modifiée pour ce projet');
            $projectWilder->setVisibility(!$projectWilder->getVisibility());
            $em->flush();
        } else {
            throw new AccessDeniedHttpException('Vous n\avez pas l\'autorisation d\effectuer cette action');

        }

        return $this->redirectToRoute('project_edit', [
            'id'=>$projectWilder->getProject()->getId(),
        ]);

    }
}
