<?php

namespace BookBundle\Form;

use BookBundle\Entity\Category;
use BookBundle\Entity\Language;
use BookBundle\Entity\Project;
use BookBundle\Entity\School;
use BookBundle\Entity\Tag;
use BookBundle\Entity\Technology;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\DateTime;

class ProjectType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre',
            ])
            ->add('customer', TextType::class, [
                'label' => 'Client',
            ])
            ->add('date', DateType::class, [
                'widget' => 'single_text',
            ])
            ->add('status', ChoiceType::class, [
                'choices' => [
                    'Mis en production' => 'Mis en production',
                    'En cours'          => 'En cours',
                    'Projet fictif'     => 'Projet fictif',
                ],
            ])
            ->add('summary', TextType::class, [
                'required' => false,
                'label'    => 'Résumé (courte description)',
            ])
            ->add('description', TextareaType::class, [
                'required' => false,
            ])
            ->add('path', UrlType::class, [
                'required' => false,
                'label'    => 'URL du site',
            ])
            ->add('tags', EntityType::class, [
                'class'         => Tag::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('t')
                        ->orderBy('t.tag', 'ASC');
                },
                'choice_label'  => 'tag',
                'expanded'      => false,
                'required'      => false,
                'multiple'      => true,
                'attr'          => ['class' => 'selectpicker multiple'],
            ])
            ->add('category', EntityType::class, [
                'class'        => Category::class,
                'choice_label' => 'label',
                'label'        => 'Categories',
            ])
            ->add('technologies', EntityType::class, [
                'class'         => Technology::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('t')
                        ->orderBy('t.technology', 'ASC');
                },
                'choice_label'  => 'technology',
                'expanded'      => false,
                'required'      => false,
                'multiple'      => true,
                'attr'          => ['class' => 'selectpicker multiple'],
            ])
            ->add('languages', EntityType::class, [
                'class'         => Language::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('l')
                        ->orderBy('l.language', 'ASC');
                },
                'choice_label'  => 'language',
                'expanded'      => false,
                'required'      => false,
                'multiple'      => true,
                'attr'          => ['class' => 'selectpicker multiple'],
            ])
            ->add('school', EntityType::class, [
                'class'        => School::class,
                'choice_label' => 'school',
                'label'        => 'École',
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BookBundle\Entity\Project',
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
