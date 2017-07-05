<?php

namespace BookBundle\Controller;

use BookBundle\Entity\Promotion;
use BookBundle\Form\PromotionType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;

/**
 * Promotion controller.
 *
 * @Route("promotion")
 * @Security("has_role('ROLE_ADMIN')")
 */
class PromotionController extends Controller
{
    /**
     * Lists all promotion entities.
     *
     * @Route("/", name="promotion_index")
     * @Method("GET")
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $promotions = $em->getRepository('BookBundle:Promotion')->findAll();

        return $this->render('promotion/index.html.twig', array(
            'promotions' => $promotions,
        ));
    }

    /**
     * Creates a new promotion entity.
     *
     * @Route("/new", name="promotion_new")
     * @Method({"GET", "POST"})
     *
     */
    public function newAction(Request $request)
    {
        $promotion = new Promotion();
        $form = $this->createForm(PromotionType::class, $promotion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($promotion);
            $em->flush();
            $this->addFlash('success', 'Nouvelle promotion enregistrée');

            return $this->redirectToRoute('promotion_index', array('id' => $promotion->getId()));
        }

        return $this->render('promotion/new.html.twig', array(
            'promotion' => $promotion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing promotion entity.
     *
     * @Route("/{id}/delete", name="promotion_indexdelete")
     * @Method({"GET", "POST"})
     *
     */
    public function indexDeleteAction( Promotion $promotion)
    {
        $deleteForm = $this->createDeleteForm($promotion);

        return $this->render('delete.html.twig', array(
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing promotion entity.
     *
     * @Route("/{id}/edit", name="promotion_edit")
     * @Method({"GET", "POST"})
     *
     */
    public function editAction(Request $request, Promotion $promotion)
    {
        $deleteForm = $this->createDeleteForm($promotion);
        $editForm = $this->createForm('BookBundle\Form\PromotionType', $promotion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('warning', 'Promotion modifiée');

            return $this->redirectToRoute('promotion_index', array('id' => $promotion->getId()));
        }

        return $this->render('promotion/edit.html.twig', array(
            'promotion' => $promotion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a promotion entity.
     *
     * @Route("/{id}", name="promotion_delete")
     * @Method("DELETE")
     *
     */
    public function deleteAction(Request $request, Promotion $promotion)
    {
        $form = $this->createDeleteForm($promotion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($promotion);
            $em->flush();
            $this->addFlash('danger', 'Promotion supprimée');
        }

        return $this->redirectToRoute('promotion_index');
    }

    /**
     * Creates a form to delete a promotion entity.
     *
     * @param Promotion $promotion The promotion entity
     *
     * @return \Symfony\Component\Form\Form The form
     *
     */
    private function createDeleteForm(Promotion $promotion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('promotion_delete', array('id' => $promotion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
