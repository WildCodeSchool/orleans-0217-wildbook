<?php

namespace BookBundle\Controller;

use BookBundle\Entity\Language;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;

/**
 * Language controller.
 *
 * @Route("language")
 * @Security("has_role('ROLE_ADMIN')")
 */
class LanguageController extends Controller
{
    /**
     * Lists all language entities.
     *
     * @Route("/", name="language_index")
     * @Method("GET")
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $languages = $em->getRepository('BookBundle:Language')->findAll();

        return $this->render('language/index.html.twig', array(
            'languages' => $languages,
        ));
    }

    /**
     * Creates a new language entity.
     *
     * @Route("/new", name="language_new")
     * @Method({"GET", "POST"})
     *
     */
    public function newAction(Request $request)
    {
        $language = new Language();
        $form = $this->createForm('BookBundle\Form\LanguageType', $language);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($language);
            $em->flush();
            $this->addFlash('success', 'Nouveau langage enregistré');
            return $this->redirectToRoute('language_index', array('id' => $language->getId()));
        }

        return $this->render('language/new.html.twig', array(
            'language' => $language,
            'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing language entity.
     *
     * @Route("/{id}/edit", name="language_edit")
     * @Method({"GET", "POST"})
     *
     */
    public function editAction(Request $request, Language $language)
    {
        $deleteForm = $this->createDeleteForm($language);
        $editForm = $this->createForm('BookBundle\Form\LanguageType', $language);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('warning', 'Langage modifié');

            return $this->redirectToRoute('language_index', array('id' => $language->getId()));
        }

        return $this->render('language/edit.html.twig', array(
            'language' => $language,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a language entity.
     *
     * @Route("/{id}", name="language_delete")
     * @Method("DELETE")
     *
     */
    public function deleteAction(Request $request, Language $language)
    {
        $form = $this->createDeleteForm($language);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($language);
            $em->flush();
            $this->addFlash('danger', 'Langage supprimé');
        }

        return $this->redirectToRoute('language_index');
    }

    /**
     * Displays a form to edit an existing language entity.
     *
     * @Route("/{id}/delete", name="language_indexdelete")
     * @Method({"GET", "POST"})
     *
     */
    public function indexDeleteAction( Language $language)
    {
        $deleteForm = $this->createDeleteForm($language);

        return $this->render('delete.html.twig', array(
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to delete a language entity.
     *
     * @param Language $language The language entity
     *
     * @return \Symfony\Component\Form\Form The form
     *
     */
    private function createDeleteForm(Language $language)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('language_delete', array('id' => $language->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
