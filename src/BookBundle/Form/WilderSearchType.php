<?php

namespace BookBundle\Form;

use BookBundle\Entity\Language;
use BookBundle\Entity\Promotion;
use BookBundle\Entity\School;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WilderSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Recherche', SearchType::class, [
        'required' => false,
        'attr' => ['placeholder' => 'wilder',
            'autocomplete' => 'off'
        ]
    ])
        ->add('school', EntityType::class, [
            'class'=>School::class,
            'choice_label'=>'school',
            'expanded'=>false,
            'multiple'=>true,
            'attr'=> ['class'=>'selectpicker multiple']
        ])
        ->add('language', EntityType::class, [
            'class'=>Language::class,
            'choice_label'=>'language',
            'expanded'=>false,
            'multiple'=>true,
            'attr'=> ['class'=>'selectpicker multiple']
        ])
        ->add('promotion', EntityType::class, [
            'class'=>Promotion::class,
            'choice_label'=>'promotion',
            'expanded'=>false,
            'multiple'=>true,
            'attr'=> ['class'=>'selectpicker multiple'],
            'query_builder'=>
        ]);

    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getBlockPrefix()
    {
        return 'book_bundle_wilder_search_type';
    }
}
