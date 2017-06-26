<?php
/**
 * Created by PhpStorm.
 * User: wilder7
 * Date: 25/06/17
 * Time: 18:44
 */

namespace BookBundle\Form;


use BookBundle\Entity\Wilder;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WilderAccueilType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('wilder', EntityType::class, array(
            'class'=>Wilder::class,
            'choice_label'=>'lastname'
        ))
                ->add('accroche',TextType::class);
    }

        public function configureOptions(OptionsResolver $resolver)
    {

    }


        public function getBlockPrefix()
    {
        return 'book_bundle_wilder_accueil_type';
    }


}