<?php

namespace BookBundle\Form;

use BookBundle\Entity\Category;
use BookBundle\Entity\Promotion;
use BookBundle\Entity\School;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjectSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->
                add('Recherche', SearchType::class, [
                'required' => false,
                'attr' => ['placeholder' => 'nom du projet']
            ])
            ->add('school', EntityType::class, [
                'class'=>School::class,
                'choice_label'=>'school',
                'expanded'=>false,
                'required'=>false,
                'multiple'=>true,
                'attr'=> ['class'=>'selectpicker multiple']
            ])
            ->add('category', EntityType::class, [
                'class'=>Category::class,
                'choice_label'=>'label',
                'expanded'=>false,
                'required'=>false,
                'multiple'=>true,
                'attr'=> ['class'=>'selectpicker multiple']
            ])
            ->add('promotion', EntityType::class, [
                'class'        => Promotion::class,
                'choice_label' => 'promotionFullName',
                'expanded'     => false,
                'required'     => false,
                'multiple'     => true,
                'disabled'     => true,
                'empty_data'   => 'Sélectionnez une ville',
                'attr'         => [
                    'class' => 'selectpicker multiple',
                    'title' => 'Sélectionnez d\'abord une ville',
                ],
            ])
            ->addEventListener(
                FormEvents::PRE_SUBMIT,
                array($this, 'onPreSubmit')
            );
    }


    public function onPreSubmit(FormEvent $event)
    {
        $search = $event->getData();
        $form = $event->getForm();
        if (isset($search['school'])) {
            $form->add('promotion', EntityType::class, [
                'class'         => Promotion::class,
                'choice_label'  => 'promotionFullName',
                'expanded'      => false,
                'required'      => false,
                'multiple'      => true,
                'query_builder' => function (EntityRepository $er) use ($search) {
                    return $er->createQueryBuilder('p')
                        ->where('p.school IN (:school)')
                        ->setParameter('school', $search['school']);
                },
                'attr'          => [
                    'class' => 'selectpicker multiple',
                ],
            ]);
        }


    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'csrf_protection' => false,
        ));
    }

    public function getBlockPrefix()
    {
        return 'book_bundle_project_search_type';
    }
}
