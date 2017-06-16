<?php

namespace BookBundle\Form;

use BookBundle\Entity\Category;
use BookBundle\Entity\Promotion;
use BookBundle\Entity\School;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjectSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->
                add('Recherche', SearchType::class, [
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


    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getBlockPrefix()
    {
        return 'book_bundle_project_search_type';
    }
}
