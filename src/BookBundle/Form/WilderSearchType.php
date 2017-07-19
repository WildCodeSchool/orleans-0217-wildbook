<?php

namespace BookBundle\Form;

use BookBundle\Entity\Language;
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

class WilderSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Recherche', SearchType::class, [
                'required' => false,
                'attr'     => ['placeholder'  => 'Entrez un nom...',
                               'autocomplete' => 'off',
                ],
            ])
            ->add('school', EntityType::class, [
                'class'        => School::class,
                'choice_label' => 'school',
                'expanded'     => false,
                'required'     => false,
                'multiple'     => true,
                'attr'         => [
                    'class' => 'selectpicker multiple',
                    'title' => 'Sélectionnez une ville',
        ],
            ])
            ->add('language', EntityType::class, [
                'class'        => Language::class,
                'choice_label' => 'language',
                'expanded'     => false,
                'required'     => false,
                'multiple'     => true,
                'attr'         => [
                    'class' => 'selectpicker multiple',
                    'title' => 'Sélectionnez un langage',
                    ],
            ])
            ->add('promotion', EntityType::class, [
                'class'        => Promotion::class,
                'choice_label' => 'promotionFullName',
                'expanded'     => false,
                'required'     => false,
                'multiple'     => true,
                'disabled'     => true,
                'empty_data'   => 'Sélectionnez une école',
                'attr'         => [
                    'class' => 'selectpicker multiple',
                    'title' => 'Sélectionnez d\'abord une école',
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
        return 'book_bundle_wilder_search_type';
    }
}
