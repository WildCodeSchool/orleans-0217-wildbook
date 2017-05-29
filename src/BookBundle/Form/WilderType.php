<?php

namespace BookBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WilderType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('birthDate')->add('address')->add('postalCode')->add('city')->add('skill')->add('freelanceAvailability')->add('modjo')->add('biography')->add('contactEmail')->add('profilPicture')->add('cv')->add('website')->add('github')->add('linkedin')->add('facebook')->add('twitter')->add('userActivation')->add('managerActivation')->add('codewarsUsername')->add('languages')->add('technologies')->add('availability')->add('promotion')->add('user');
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
