<?php

namespace BookBundle\Controller;

use BookBundle\Entity\Wilder;
use BookBundle\Service\FileUploader;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Wilder controller.
 *
 * @Route("wilder")
 */
class WilderController extends Controller
{
    /**
     * Lists all wilder entities.
     *
     * @Route("/", name="wilder_index")
     * @Method("GET")
     * @Security("has_role('ROLE_USER')")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $wilders = $em->getRepository('BookBundle:Wilder')->findAll();

        return $this->render('wilder/index.html.twig', array(
            'wilders' => $wilders,
        ));
    }

    /**
     * Creates a new wilder entity.
     *
     * @Route("/new", name="wilder_new")
     * @Method({"GET", "POST"})
     * @Security("has_role('ROLE_USER')")
     */
    public function newAction(Request $request, FileUploader $fileUploader)
    {
        $wilder = new Wilder();
        $form = $this->createForm('BookBundle\Form\WilderType', $wilder);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $wilder->setUser($this->getUser());

            $em->persist($wilder);
            $em->flush();

            return $this->redirectToRoute('wilder_index');
        }

        return $this->render('wilder/new.html.twig', array(
            'wilder' => $wilder,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a wilder entity.
     *
     * @Route("/{id}", name="wilder_show")
     * @Method("GET")
     * @Security("has_role('ROLE_USER')")
     */
    public function showAction(Wilder $wilder)
    {
        $deleteForm = $this->createDeleteForm($wilder);
        $idWilder = $wilder->getUser()->getId();
        $idUser = $this->getUser()->getId();
        var_dump($this->getUser()->getRoles());

        if ($idWilder === $idUser or 'ROLE_ADMIN' === $this->getUser()->getRoles()) {
            return $this->render('wilder/show.html.twig', array(
                'wilder' => $wilder,
                'delete_form' => $deleteForm->createView(),
            ));
        } else {
            throw new Exception('chemin interdit');
        }

    }

    /**
     * Displays a form to edit an existing wilder entity.
     *
     * @Route("/{id}/edit", name="wilder_edit")
     * @Method({"GET", "POST"})
     * @Security("has_role('ROLE_USER')")
     */
    public function editAction(Request $request, Wilder $wilder, FileUploader $fileUploader)
    {
        $deleteForm = $this->createDeleteForm($wilder);


        $editForm = $this->createForm('BookBundle\Form\WilderType', $wilder);
        $editForm->handleRequest($request);

        $idWilder = $wilder->getUser()->getId();
        $idUser = $this->getUser()->getId();

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('wilder_index');
        }

        if ($idWilder === $idUser){


        return $this->render('wilder/edit.html.twig', array(
            'wilder' => $wilder,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
        }
    }

    /**
     * Deletes a wilder entity.
     *
     * @Route("/{id}", name="wilder_delete")
     * @Method("DELETE")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function deleteAction(Request $request, Wilder $wilder)
    {
        $form = $this->createDeleteForm($wilder);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($wilder);
            $em->flush();
        }

        return $this->redirectToRoute('wilder_index');
    }

    /**
     * Creates a form to delete a wilder entity.
     *
     * @param Wilder $wilder The wilder entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Wilder $wilder)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('wilder_delete', array('id' => $wilder->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
