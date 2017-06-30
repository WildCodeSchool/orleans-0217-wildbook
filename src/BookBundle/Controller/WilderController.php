<?php

namespace BookBundle\Controller;

use BookBundle\Entity\Wilder;


use BookBundle\Form\WilderSearchType;
use BookBundle\Repository\WilderRepository;
use BookBundle\Service\ConvertCity;
use BookBundle\Service\FileUploader;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpKernel\Exception\HttpException;

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
     * @Security("has_role('ROLE_USER')")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(WilderSearchType::class, ['csrf_protection' => false]);
        $form->handleRequest($request);
        $blocResult = false;
        $wilders = $em->getRepository('BookBundle:Wilder')->findAll();
      
        if ($form->isValid() && $form->isSubmitted()) {
            $blocResult = true;
            $data = $form->getData();
            $languages = $data['language'];
            $schools = $data['school'];
            $promotions = $data['promotion'];
            $wildersSearch = '';

            if ($schools[0] == null & $languages[0] == null ) {
                $wildersSearch = $em->getRepository(wilder::class)->searchBy(null, null, $promotions);
            } elseif ($schools[0] == null & $promotions[0] == null ) {
                $wildersSearch = $em->getRepository(wilder::class)->searchBy(null, $languages, null);
            } elseif ($promotions[0] == null & $languages[0] == null ) {
                $wildersSearch = $em->getRepository(wilder::class)->searchBy($schools, null, null);
            } elseif ($languages[0] == null) {
                $wildersSearch = $em->getRepository(wilder::class)->searchBy($schools, null, $promotions);
            } elseif ($promotions[0] == null) {
                $wildersSearch = $em->getRepository(wilder::class)->searchBy($schools, $languages, null);
            }elseif ($schools[0] == null) {
                $wildersSearch = $em->getRepository(wilder::class)->searchBy(null, $languages, $promotions);
            }else {
                $wildersSearch = $em->getRepository(wilder::class)->searchBy($schools, $languages, $promotions);
            }


            return $this->render('wilder/index.html.twig', array(
                'blocResult' => $blocResult,
                'form' => $form->createView(),
                'wilders' => $wildersSearch

            ));
        }

        return $this->render('wilder/index.html.twig', array(
            'form' => $form->createView(),
            'wilders' => $wilders,
            'blocResult' => $blocResult
        ));
    }

    /**
     * Creates a new wilder entity.
     *
     * @Route("/new", name="wilder_new")
     * @Method({"GET", "POST"})
     * @Security("has_role('ROLE_USER')")
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


        if ($idWilder === $idUser or in_array('ROLE_ADMIN',$this->getUser()->getRoles())) {


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
    public function editAction(Request $request, Wilder $wilder, FileUploader $fileUploader, ConvertCity $convert)
    {
        $deleteForm = $this->createDeleteForm($wilder);
        $editForm = $this->createForm('BookBundle\Form\WilderType', $wilder);
        $editForm->handleRequest($request);

        $idWilder = $wilder->getUser()->getId();
        $idUser = $this->getUser()->getId();

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $address = $wilder->getPostalCode() .' '. $wilder->getCity();
            $wilder->setLocation($convert->convertGps($address));
            $idWilder = $wilder->getUser()->getId();
            $idUser = $this->getUser()->getId();
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('wilder_index');
        }

        if ($idWilder === $idUser or in_array('ROLE_ADMIN',$this->getUser()->getRoles())){


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

    /**
     * @Route("/ajax/{input}")
     * @Method("POST")
     *
     * @param Request $request
     * @param $input
     *
     * @return JsonResponse
     */
    public function autocompleteAction(Request $request, $input)
    {
        if ($request->isXmlHttpRequest()) {
            /**
             * @var $repository WilderRepository
             */
            $repository = $this->getDoctrine()->getRepository('BookBundle:Wilder');
            $data = $repository->getLikeAdmin($input);
            return new JsonResponse(array("data" => json_encode($data)));

        } else {
            throw new HttpException('500', 'Invalid call');
        }
    }

}
