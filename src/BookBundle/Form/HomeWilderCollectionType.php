<?php
/**
 * Created by PhpStorm.
 * User: wilder7
 * Date: 20/06/17
 * Time: 12:03
 */

namespace BookBundle\Form;

use BookBundle\Entity\Wilder;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HomeWilderCollectionType extends AbstractType
{
   public function buildForm(FormBuilderInterface $builder, array $options)
   {
       $builder->add('profil',CollectionType::class,
           ['entry_type'=>HomeWilderType::class,
           'allow_add' => true,
           'by_reference' => false]);
   }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'bookbundle_profil';
    }

}