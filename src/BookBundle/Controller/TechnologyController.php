<?php

namespace BookBundle\Controller;

use BookBundle\Entity\Technology;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Technology controller.
 *
 * @Route("technology")
 */
class TechnologyController extends Controller
{
    /**
     * Lists all technology entities.
     *
     * @Route("/", name="technology_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $technologies = $em->getRepository('BookBundle:Technology')->findAll();

        return $this->render('technology/index.html.twig', array(
            'technologies' => $technologies,
        ));
    }

    /**
     * Creates a new technology entity.
     *
     * @Route("/new", name="technology_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $technology = new Technology();
        $form = $this->createForm('BookBundle\Form\TechnologyType', $technology);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($technology);
            $em->flush();

            return $this->redirectToRoute('technology_index');
        }

        return $this->render('technology/new.html.twig', array(
            'technology' => $technology,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a technology entity.
     *
     * @Route("/{id}", name="technology_show")
     * @Method("GET")
     */
    public function showAction(Technology $technology)
    {
        $deleteForm = $this->createDeleteForm($technology);

        return $this->render('technology/show.html.twig', array(
            'technology' => $technology,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing technology entity.
     *
     * @Route("/{id}/edit", name="technology_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Technology $technology)
    {
        $deleteForm = $this->createDeleteForm($technology);
        $editForm = $this->createForm('BookBundle\Form\TechnologyType', $technology);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('technology_edit', array('id' => $technology->getId()));
        }

        return $this->render('technology/edit.html.twig', array(
            'technology' => $technology,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a technology entity.
     *
     * @Route("/{id}", name="technology_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Technology $technology)
    {
        $form = $this->createDeleteForm($technology);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($technology);
            $em->flush();
        }

        return $this->redirectToRoute('technology_index');
    }

    /**
     * Creates a form to delete a technology entity.
     *
     * @param Technology $technology The technology entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Technology $technology)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('technology_delete', array('id' => $technology->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
