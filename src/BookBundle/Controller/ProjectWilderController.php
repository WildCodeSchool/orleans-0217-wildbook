<?php

namespace BookBundle\Controller;

use BookBundle\Entity\Project;
use BookBundle\Entity\ProjectWilder;
use BookBundle\Entity\Wilder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;

/**
 * Projectwilder controller.
 *
 * @Route("projectwilder")
 */
class ProjectWilderController extends Controller
{
    /**
     * Lists all projectWilder entities.
     *
     * @Route("/", name="projectwilder_index")
     * @Method("GET")
     * @Security("has_role('ROLE_USER')")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $projectWilders = $em->getRepository('BookBundle:ProjectWilder')->findAll();

        return $this->render('projectwilder/index.html.twig', array(
            'projectWilders' => $projectWilders,
        ));
    }

    /**
     * Creates a new projectWilder entity.
     *
     * @Route("/new", name="projectwilder_new")
     * @Method({"GET", "POST"})
     * @Security("has_role('ROLE_USER')")
     */
    public function newAction(Request $request, Project $project, Wilder $wilder)
    {
        $projectWilder = new Projectwilder();
        $form = $this->createForm('BookBundle\Form\ProjectWilderType', $projectWilder);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($projectWilder);
            $em->flush();
            $this->addFlash('success', $wilder->getFulName().' ajouter au projet '. $project->getTitle());
        }

        return $this->render('projectwilder/new.html.twig', array(
            'projectWilder' => $projectWilder,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a projectWilder entity.
     *
     * @Route("/{id}", name="projectwilder_show")
     * @Method("GET")
     * @Security("has_role('ROLE_USER')")
     */
    public function showAction(ProjectWilder $projectWilder)
    {
        $deleteForm = $this->createDeleteForm($projectWilder);

        return $this->render('projectwilder/show.html.twig', array(
            'projectWilder' => $projectWilder,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing projectWilder entity.
     *
     * @Route("/{id}/edit", name="projectwilder_edit")
     * @Method({"GET", "POST"})
     * @Security("has_role('ROLE_USER')")
     */
    public function editAction(Request $request, ProjectWilder $projectWilder)
    {
        $deleteForm = $this->createDeleteForm($projectWilder);
        $editForm = $this->createForm('BookBundle\Form\ProjectWilderType', $projectWilder);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('projectwilder_index');
        }

        return $this->render('projectwilder/edit.html.twig', array(
            'projectWilder' => $projectWilder,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a projectWilder entity.
     *
     * @Route("/{id}", name="projectwilder_delete")
     * @Method("DELETE")
     * @Security("has_role('ROLE_USER')")
     */
    public function deleteAction(Request $request, ProjectWilder $projectWilder)
    {
        $form = $this->createDeleteForm($projectWilder);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($projectWilder);
            $em->flush();
        }

        return $this->redirectToRoute('projectwilder_index');
    }

    /**
     * Creates a form to delete a projectWilder entity.
     *
     * @param ProjectWilder $projectWilder The projectWilder entity
     *
     * @return \Symfony\Component\Form\Form The form
     * @Security("has_role('ROLE_USER')")
     */
    private function createDeleteForm(ProjectWilder $projectWilder)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('projectwilder_delete', array('id' => $projectWilder->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * Displays a form to edit an existing language entity.
     *
     * @Route("/{id}/delete", name="projectwilder_indexdelete")
     * @Method({"GET", "POST"})
     * @Security("has_role('ROLE_USER')")
     */
    public function indexDeleteAction( ProjectWilder $projectWilder)
    {
        $deleteForm = $this->createDeleteForm($projectWilder);

        return $this->render('delete.html.twig', array(
            'delete_form' => $deleteForm->createView(),
        ));
    }
}
