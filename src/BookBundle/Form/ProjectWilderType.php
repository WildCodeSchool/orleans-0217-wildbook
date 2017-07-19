<?php

namespace BookBundle\Form;

use BookBundle\Entity\Project;
use BookBundle\Entity\Wilder;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
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
            ->add('wilder', EntityType::class, [
                'class'=> Wilder::class,
                'choice_label'=>'fullName',
                'multiple'=>false,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('w')
                        ->orderBy('w.firstname', 'ASC')
                        ->addOrderBy('w.lastname', 'ASC');
                },
            ])
            -> add ( 'position' , HiddenType :: class , [
                    'attr' => [
                        'class' => 'my-wilder' ,
                ],
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
