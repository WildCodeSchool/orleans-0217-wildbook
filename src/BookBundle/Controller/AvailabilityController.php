<?php

namespace BookBundle\Controller;

use BookBundle\Entity\Availability;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;


/**
 * Availability controller.
 *
 * @Route("availability")
 * @Security("has_role('ROLE_ADMIN')")
 */
class AvailabilityController extends Controller
{
    /**
     * Lists all availability entities.
     *
     * @Route("/", name="availability_index")
     * @Method("GET")
     *
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $availabilities = $em->getRepository('BookBundle:Availability')->findAll();

        return $this->render('availability/index.html.twig', array(
            'availabilities' => $availabilities,
        ));
    }

    /**
     * Creates a new availability entity.
     *
     * @Route("/new", name="availability_new")
     * @Method({"GET", "POST"})
     *
     */
    public function newAction(Request $request)
    {
        $availability = new Availability();
        $form = $this->createForm('BookBundle\Form\AvailabilityType', $availability);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($availability);
            $em->flush();
            $this->addFlash('success', 'Nouveau statut enregistré');
            return $this->redirectToRoute('availability_index', array('id' => $availability->getId()));
        }

        return $this->render('availability/new.html.twig', array(
            'availability' => $availability,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a availability entity.
     *
     * @Route("/{id}", name="availability_show")
     * @Method("GET")
     *
     */
    public function showAction(Availability $availability)
    {
        $deleteForm = $this->createDeleteForm($availability);

        return $this->render('availability/show.html.twig', array(
            'availability' => $availability,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing availability entity.
     *
     * @Route("/{id}/edit", name="availability_edit")
     * @Method({"GET", "POST"})
     *
     */
    public function editAction(Request $request, Availability $availability)
    {
        $deleteForm = $this->createDeleteForm($availability);
        $editForm = $this->createForm('BookBundle\Form\AvailabilityType', $availability);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('warning', 'Statut modifié');
            return $this->redirectToRoute('availability_index', array('id' => $availability->getId()));
        }

        return $this->render('availability/edit.html.twig', array(
            'availability' => $availability,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing availability entity.
     *
     * @Route("/{id}/delete", name="availability_indexdelete")
     * @Method({"GET", "POST"})
     *
     */
    public function indexDeleteAction( Availability $availability)
    {
        $deleteForm = $this->createDeleteForm($availability);

        return $this->render('delete.html.twig', array(
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a availability entity.
     *
     * @Route("/{id}", name="availability_delete")
     * @Method("DELETE")
     *
     */
    public function deleteAction(Request $request, Availability $availability)
    {
        $form = $this->createDeleteForm($availability);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($availability);
            $em->flush();
            $this->addFlash('danger', 'Statut supprimé');
        }

        return $this->redirectToRoute('availability_index');
    }

    /**
     * Creates a form to delete a availability entity.
     *
     * @param Availability $availability The availability entity
     *
     * @return \Symfony\Component\Form\Form The form
     * @Security("has_role('ROLE_ADMIN')")
     */
    private function createDeleteForm(Availability $availability)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('availability_delete', array('id' => $availability->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
