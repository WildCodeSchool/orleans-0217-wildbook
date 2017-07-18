<?php

namespace BookBundle\Controller;

use BookBundle\Entity\Picture;
use BookBundle\Entity\Project;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Picture controller.
 *
 * @Route("picture")
 */
class PictureController extends Controller
{
    /**
     * Lists all picture entities.
     *
     * @Route("/", name="picture_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pictures = $em->getRepository('BookBundle:Picture')->findAll();

        return $this->render('picture/index.html.twig', array(
            'pictures' => $pictures,
        ));
    }

    /**
     * Creates a new picture entity.
     *
     * @Route("/{id}/new", name="picture_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, Project $project)
    {
        $picture = new Picture();
        $pictureForm = $this->createForm('BookBundle\Form\PictureType', $picture);
        $pictureForm->handleRequest($request);

        if ($pictureForm->isSubmitted() && $pictureForm->isValid()) {
            if ($picture->getIsPrincipal()) {
                $pictures = $project->getPictures();
                foreach ($pictures as $pictureOld) {
                    $pictureOld->setIsPrincipal(false);
                }
            }
            $picture->setProject($project);
            $em = $this->getDoctrine()->getManager();
            $em->persist($picture);
            $em->flush();

            return $this->redirectToRoute('project_edit', array('id' => $project->getId()));

        }

        return $this->render('picture/new.html.twig', array(
            'picture' => $picture,
            'project' => $project,
            'form' => $pictureForm->createView(),
        ));
    }

    /**
     * Finds and displays a picture entity.
     *
     * @Route("/{id}", name="picture_show")
     * @Method("GET")
     */
    public function showAction(Picture $picture)
    {
        $deleteForm = $this->createDeleteForm($picture);

        return $this->render('picture/show.html.twig', array(
            'picture' => $picture,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing picture entity.
     *
     * @Route("/{id}/edit", name="picture_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Picture $picture)
    {
        $deleteForm = $this->createDeleteForm($picture);
        $editForm = $this->createForm('BookBundle\Form\PictureType', $picture);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('picture_edit', array('id' => $picture->getId()));
        }

        return $this->render('picture/edit.html.twig', array(
            'picture' => $picture,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing availability entity.
     *
     * @Route("/{id}/delete", name="picture_indexdelete")
     * @Method({"GET", "POST"})
     *
     */
    public function indexDeleteAction(Picture $picture)
    {
        $deleteForm = $this->createDeleteForm($picture);

        return $this->render('delete.html.twig', array(
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a picture entity.
     *
     * @Route("/delete-image/{id}", name="picture_delete")
     * @Method("GET")
     */
    public function deleteAction(Request $request, Picture $picture)
    {
        $form = $this->createDeleteForm($picture);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $project = $picture->getProject();
        $em->remove($picture);
        $em->flush();

        return $this->redirectToRoute('project_edit', array('id' => $project->getId()));
    }

    /**
     * Creates a form to delete a picture entity.
     *
     * @param Picture $picture The picture entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Picture $picture)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('picture_delete', array('id' => $picture->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
}
