<?php

namespace BookBundle\Form;

use BookBundle\Entity\Project;
use BookBundle\Entity\Wilder;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjectWilderType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('visibility')
            ->add('project', EntityType::class, [
                'class'=>Project::class,
                'choice_label'=>'id',
                'multiple'=>true
            ])
            ->add('wilder', EntityType::class, [
                'class'=> Wilder::class,
                'choice_label'=>'id',
                'multiple'=>true
            ]);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BookBundle\Entity\ProjectWilder'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'bookbundle_projectwilder';
    }


}
