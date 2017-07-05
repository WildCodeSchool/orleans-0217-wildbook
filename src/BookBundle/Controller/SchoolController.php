<?php

namespace BookBundle\Controller;

use BookBundle\Entity\School;
use BookBundle\Service\ConvertCity;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;

/**
 * School controller.
 *
 * @Route("school")
 */
class SchoolController extends Controller
{
    /**
     * Lists all school entities.
     *
     * @Route("/", name="school_index")
     * @Method("GET")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $schools = $em->getRepository('BookBundle:School')->findAll();

        return $this->render('school/index.html.twig', array(
            'schools' => $schools,
        ));
    }

    /**
     * Creates a new school entity.
     *
     * @Route("/new", name="school_new")
     * @Method({"GET", "POST"})
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     */
    public function newAction(Request $request, ConvertCity $convert )
    {
        $school = new School();
        $form = $this->createForm('BookBundle\Form\SchoolType', $school);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $school->setLocation($convert->convertGps($form['address']->getData()));
            $em = $this->getDoctrine()->getManager();
            $em->persist($school);
            $em->flush();
            $this->addFlash('success', 'Nouvelle école enregistrée');

            return $this->redirectToRoute('school_index', array('id' => $school->getId()));
        }

        return $this->render('school/new.html.twig', array(
            'school' => $school,
            'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing school entity.
     *
     * @Route("/{id}/edit", name="school_edit")
     * @Method({"GET", "POST"})
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     */
    public function editAction(Request $request, School $school, ConvertCity $convert)
    {
        $deleteForm = $this->createDeleteForm($school);
        $editForm = $this->createForm('BookBundle\Form\SchoolType', $school);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $school->setLocation($convert->convertGps($school->getAddress()));
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('warning', 'École modifiée');
            return $this->redirectToRoute('school_index');
        }

        return $this->render('school/edit.html.twig', array(
            'school' => $school,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a school entity.
     *
     * @Route("/{id}", name="school_delete")
     * @Method("DELETE")
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     */
    public function deleteAction(Request $request, School $school)
    {
        $form = $this->createDeleteForm($school);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($school);
            $em->flush();
            $this->addFlash('danger', 'École supprimée');
        }

        return $this->redirectToRoute('school_index');
    }

    /**
     * Creates a form to delete a school entity.
     *
     * @param School $school The school entity
     *
     * @return \Symfony\Component\Form\Form The form
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     */
    private function createDeleteForm(School $school)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('school_delete', array('id' => $school->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * Displays a form to edit an existing school entity.
     *
     * @Route("/{id}/delete", name="school_indexdelete")
     * @Method({"GET", "POST"})
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     */
    public function indexDeleteAction(School $school)
    {
        $deleteForm = $this->createDeleteForm($school);

        return $this->render('delete.html.twig', array(
            'delete_form' => $deleteForm->createView(),
        ));
    }
}
