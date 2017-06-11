<?php

namespace BookBundle\Controller;

use BookBundle\Entity\Category;
use BookBundle\Entity\Project;
use BookBundle\Entity\Promotion;
use BookBundle\Entity\School;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\HttpFoundation\Request;


class ProjectSearchController extends Controller
{
    /**
     * @Route("/search_realisation", name="search_realisation")
     */
    public function listRealisationsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createFormBuilder(null, ['csrf_protection'=>false])
            ->setMethod('POST')
            ->add('input', SearchType::class, [
                'required' => false,
                'attr' => ['placeholder' => 'nom du projet']
            ])
            ->add('school', EntityType::class, [
                'class'=>School::class,
                'choice_label'=>'school',
                'expanded'=>true,
                'multiple'=>true
            ])
            ->add('category', EntityType::class, [
                'class'=>Category::class,
                'choice_label'=>'label',
                'expanded'=>true,
                'multiple'=>true
            ])
            ->add('promotion', EntityType::class, [
                'class'=>Promotion::class,
                'choice_label'=>'promotion',
                'expanded'=>true,
                'multiple'=>true
            ])
            ->getForm();

        $form->handleRequest($request);

        $input=$categories=$schools=$promotions='';
        $blocResult=false;

        if ($form->isValid() && $form->isSubmitted()) {
            $blocResult=true;
            $data = $form->getData();
            $input = $data['input'];
            $categories = $data['category'];
            $schools = $data['school'];
            $promotions = $data['promotion'];

            $projectsSearch='';
            if (isset($input)){
                $projectsSearch = $em->getRepository(Project::class)->searchByTitle($input);
                var_dump($projectsSearch);
            } else {
//                $projectsSearch = $em->getRepository(Project::class)->searchByP($promotions);
//                $projectsSearch = $em->getRepository(Project::class)->searchByS($schools);
                $projectsSearch = $em->getRepository(Project::class)->searchBy($categories = null,$schools = null, $promotions = null);
                var_dump($projectsSearch);
            }

            return $this->render('BookBundle:Front:realisation_search.html.twig', array(
                'form' => $form->createView(),
                'projectsSearch' => $projectsSearch,
                'blocResult' => $blocResult

            ));
        }

        return $this->render('BookBundle:Front:realisation_search.html.twig' ,array(
            'form' => $form->createView(),
            'blocResult' => $blocResult
        ));
    }


//    /**
//     * @Route("/search_realisation_result", name="search_realisation_result")
//     */
//    public function searchRealisationsResultAction($projectsSearch)
//    {
//        return $this->render('BookBundle:Front:realisation_list_result.html.twig', [
//            'projectsSearch' => $projectsSearch
//        ]);
//    }



}