<?php

namespace BookBundle\Controller;

use BookBundle\Entity\Wilder;
use BookBundle\Service\ConvertCity;
use BookBundle\Service\FileUploader;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
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
     */
    public function newAction(Request $request, FileUploader $fileUploader, ConvertCity $convert)
    {
        $wilder = new Wilder();
        $form = $this->createForm('BookBundle\Form\WilderType', $wilder);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $address = $form['postalCode']->getData() .' '. $form['city']->getData();
            $wilder->setLocation($convert->convertGps($address));
            $em = $this->getDoctrine()->getManager();
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
     */
    public function showAction(Wilder $wilder)
    {
        $deleteForm = $this->createDeleteForm($wilder);

        return $this->render('wilder/show.html.twig', array(
            'wilder' => $wilder,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing wilder entity.
     *
     * @Route("/{id}/edit", name="wilder_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Wilder $wilder, FileUploader $fileUploader)
    {
        $deleteForm = $this->createDeleteForm($wilder);
        $editForm = $this->createForm('BookBundle\Form\WilderType', $wilder);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('wilder_index');
        }

        return $this->render('wilder/edit.html.twig', array(
            'wilder' => $wilder,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a wilder entity.
     *
     * @Route("/{id}", name="wilder_delete")
     * @Method("DELETE")
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
