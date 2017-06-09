<?php
/**
 * Created by PhpStorm.
 * User: wilder7
 * Date: 08/06/17
 * Time: 17:37
 */

namespace BookBundle\Controller;

use BookBundle\Entity\Language;
use BookBundle\Entity\Project;
use BookBundle\Entity\Promotion;
use BookBundle\Entity\School;
use BookBundle\Entity\Wilder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class WilderSearchController extends Controller
{
    /**
     * @Route("/search_wilder" , name="search_wilder")
     */
    public function listWildersAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createFormBuilder(null, ['csrf_protection'=>false])
            ->setMethod('POST')
            ->add('input', SearchType::class, [
                'required' => false,
                'attr' => ['placeholder' => 'wilder']
            ])
            ->add('school', EntityType::class, [
                'class'=>School::class,
                'choice_label'=>'school',
                'expanded'=>true,
                'multiple'=>true
            ])
            ->add('language', EntityType::class, [
                'class'=>Language::class,
                'choice_label'=>'language',
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

        $input=$languages=$schools=$promotions='';
        $blocResult=false;

        if ($form->isValid() && $form->isSubmitted()) {
            $blocResult=true;
            $data = $form->getData();
            $input = $data['input'];
            $languages = $data['language'];
            $schools = $data['school'];
            $promotions = $data['promotion'];

            $wildersSearch='';
            if (isset($input)){
                $wildersSearch = $em->getRepository(Wilder::class)->searchByName($input);
                dump($wildersSearch);
            } else {
                $wildersSearch = $em->getRepository(wilder::class)->searchBy('126');
                dump($wildersSearch);
            }

            return $this->render('BookBundle:Front:wilder_search.html.twig', array(
                'blocResult' => $blocResult,
                'form' => $form->createView(),
                'wildersSearch' => $wildersSearch
            ));
        }

        return $this->render('BookBundle:Front:wilder_search.html.twig' ,array(
            'blocResult' => $blocResult,
            'form' => $form->createView()
        ));
    }

}