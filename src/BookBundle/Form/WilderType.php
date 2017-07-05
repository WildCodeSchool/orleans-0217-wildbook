<?php

namespace BookBundle\Form;

use BookBundle\Entity\Availability;
use BookBundle\Entity\Language;
use BookBundle\Entity\Promotion;
use BookBundle\Entity\Technology;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WilderType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstname')
                ->add('lastname')
                ->add('birthDate', BirthdayType::class)
                ->add('address')
                ->add('postalCode')
                ->add('city')
                ->add('skill')
                ->add('freelanceAvailability')
                ->add('modjo')
                ->add('biography')
                ->add('contactEmail')
                ->add('profilPicture', null, [
                    'required'=> false,
                ])
                ->add('cv', null , [
                    'label'=>'CV (PDF file)',
                    'required'=>false
                ])
                ->add('website')
                ->add('github')
                ->add('linkedin')
                ->add('facebook')
                ->add('twitter')
                ->add('userActivation')
                ->add('managerActivation')
                ->add('codewarsUsername')
                ->add('languages', EntityType::class, [
                    'class'=>Language::class,
                    'choice_label'=>'language',
                    'expanded'=>false,
                    'required'=>false,
                    'multiple'=>true,
                    'attr'=> ['class'=>'selectpicker multiple']


                ])
                ->add('technologies', EntityType::class, [
                    'class'=>Technology::class,
                    'choice_label'=>'technology',
                    'expanded'=>false,
                    'required'=>false,
                    'multiple'=>true,
                    'attr'=> ['class'=>'selectpicker multiple']
                ])
                ->add('availability', EntityType::class, [
                    'class'=>Availability::class,
                    'choice_label'=>'label'
                ])
                ->add('promotion', EntityType::class, [
                    'class'=>Promotion::class,
                    'choice_label'=>'promotion'
                ]);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BookBundle\Entity\Wilder'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'bookbundle_wilder';
    }


}
