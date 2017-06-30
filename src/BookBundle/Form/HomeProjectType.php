<?php
/**
 * Created by PhpStorm.
 * User: wilder7
 * Date: 27/06/17
 * Time: 17:45
 */

namespace BookBundle\Form;

use BookBundle\Entity\Project;
use Doctrine\DBAL\Types\BooleanType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HomeProjectType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', SearchType::class, [
            'required' => false,
            'attr' => ['placeholder' => 'nom du projet']
        ])
                ->add('homeTextProject',TextType::class)
                ->add('homeProject', CheckboxType::class,[
                    'required' => false
                ]);
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BookBundle\Entity\Project'
        ));
    }


    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'bookbundle_homeproject';
    }



}