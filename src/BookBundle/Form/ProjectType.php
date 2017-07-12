<?php

namespace BookBundle\Form;

use BookBundle\Entity\Category;
use BookBundle\Entity\Language;
use BookBundle\Entity\School;
use BookBundle\Entity\Tag;
use BookBundle\Entity\Technology;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjectType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', TextType::class)
                ->add('projectWilders',CollectionType::class,[
                    'entry_type'=> ProjectWilderType::class,
                    'allow_add' => true,
                    'allow_delete' => true,
                    'prototype' => true,
                    'by_reference' => false,
                    'attr' => array(
                        'class' => 'wilders_project_collection',
                    ),
                ])
                ->add('customer')
                ->add('date')
                ->add('status')
                ->add('summary', TextType::class)
                ->add('description', TextareaType::class)
                ->add('path', UrlType::class )
                ->add('tags', EntityType::class, [
                    'class'=>Tag::class,
                    'choice_label'=>'tag',
                    'expanded'=>false,
                    'required'=>false,
                    'multiple'=>true,
                    'attr'=> ['class'=>'selectpicker multiple']
                ])
                ->add('category', EntityType::class, [
                    'class'=>Category::class,
                    'choice_label'=>'label'
                ])
                ->add('technologies', EntityType::class, [
                    'class'=>Technology::class,
                    'choice_label'=>'technology',
                    'expanded'=>false,
                    'required'=>false,
                    'multiple'=>true,
                    'attr'=> ['class'=>'selectpicker multiple']
                ])
                ->add('languages', EntityType::class, [
                    'class'=>Language::class,
                    'choice_label'=>'language',
                    'expanded'=>false,
                    'required'=>false,
                    'multiple'=>true,
                    'attr'=> ['class'=>'selectpicker multiple']
                ])
                ->add('school', EntityType::class, [
                'class'=>School::class,
                'choice_label'=>'school'
                ]);

    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BookBundle\Entity\Project'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'bookbundle_project';
    }


}
