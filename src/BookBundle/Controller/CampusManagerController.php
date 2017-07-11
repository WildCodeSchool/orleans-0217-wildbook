<?php

namespace BookBundle\Controller;

use BookBundle\Entity\CampusManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;

/**
 * Campusmanager controller.
 *
 * @Route("campusmanager")
 * @Security("has_role('ROLE_ADMIN')")
 */
class CampusManagerController extends Controller
{
    /**
     * Lists all campusManager entities.
     *
     * @Route("/", name="campusmanager_index")
     * @Method("GET")
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $campusManagers = $em->getRepository('BookBundle:CampusManager')->findAll();

        return $this->render('campusmanager/index.html.twig', array(
            'campusManagers' => $campusManagers,
        ));
    }

    /**
     * Creates a new campusManager entity.
     *
     * @Route("/new", name="campusmanager_new")
     * @Method({"GET", "POST"})
     *
     */
    public function newAction(Request $request)
    {
        $campusManager = new Campusmanager();
        $form = $this->createForm('BookBundle\Form\CampusManagerType', $campusManager);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $campusManager->setUser($this->getUser());
            $em->persist($campusManager);
            $em->flush();

            return $this->redirectToRoute('campusmanager_index');
        }

        return $this->render('campusmanager/new.html.twig', array(
            'campusManager' => $campusManager,
            'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing campusManager entity.
     *
     * @Route("/{id}/edit", name="campusmanager_edit")
     * @Method({"GET", "POST"})
     *
     */
    public function editAction(Request $request, CampusManager $campusManager)
    {
        $deleteForm = $this->createDeleteForm($campusManager);
        $editForm = $this->createForm('BookBundle\Form\CampusManagerType', $campusManager);
        $editForm->handleRequest($request);

        $idCampusManager = $campusManager->getUser()->getId();
        $idUser = $this->getUser()->getId();


        if ($idCampusManager === $idUser or in_array('ROLE_SUPER_ADMIN',$this->getUser()->getRoles())){

            if ($editForm->isSubmitted() && $editForm->isValid()) {
                $this->getDoctrine()->getManager()->flush();
                return $this->redirectToRoute('campusmanager_index');
            }
            return $this->render('campusmanager/edit.html.twig', array(
                'campusManager' => $campusManager,
                'edit_form' => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
            ));
        } else {
            $this->addFlash('danger', 'Tu n\'as pas accès à cette ressource');
            return $this->redirectToRoute('one_campus_index');
        }

    }

    /**
     * Deletes a campusManager entity.
     *
     * @Route("/{id}", name="campusmanager_delete")
     * @Method("DELETE")
     *
     */
    public function deleteAction(Request $request, CampusManager $campusManager)
    {
        $form = $this->createDeleteForm($campusManager);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($campusManager);
            $em->flush();
        }

        return $this->redirectToRoute('campusmanager_index');
    }

    /**
     * Creates a form to delete a campusManager entity.
     *
     * @param CampusManager $campusManager The campusManager entity
     *
     * @return \Symfony\Component\Form\Form The form
     *
     */
    private function createDeleteForm(CampusManager $campusManager)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('campusmanager_delete', array('id' => $campusManager->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }

    /**
     * Displays a form to edit an existing language entity.
     *
     * @Route("/{id}/delete", name="campusmanager_indexdelete")
     * @Method({"GET", "POST"})
     *
     */
    public function indexDeleteAction(CampusManager $campusManager)
    {
        $deleteForm = $this->createDeleteForm($campusManager);

        return $this->render('delete.html.twig', array(
            'delete_form' => $deleteForm->createView(),
        ));
    }
}
