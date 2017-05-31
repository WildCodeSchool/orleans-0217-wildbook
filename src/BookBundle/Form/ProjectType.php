<?php

namespace BookBundle\Form;

use BookBundle\Entity\Category;
use BookBundle\Entity\Language;
use BookBundle\Entity\Picture;
use BookBundle\Entity\Tag;
use BookBundle\Entity\Technology;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
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
                ->add('customer')
                ->add('date')
                ->add('status')
                ->add('summary', TextType::class)
                ->add('description', TextareaType::class)
//                ->add('path', EntityType::class, [
//                    'class'=>Picture::class,
//                    'choice_label'=>'path'
//                ])
                ->add('tags', EntityType::class, [
                    'class'=>Tag::class,
                    'choice_label'=>'tag',
                    'multiple'=>true
                ])
                ->add('category', EntityType::class, [
                    'class'=>Category::class,
                    'choice_label'=>'label'
                ])
                ->add('technologies', EntityType::class, [
                    'class'=>Technology::class,
                    'choice_label'=>'technology',
                    'multiple'=>true
                ])
                ->add('languages', EntityType::class, [
                    'class'=>Language::class,
                    'choice_label'=>'language',
                    'multiple'=>true
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
