<?php

namespace BookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SearchType;

class HomeController extends Controller
{
    /**
     * @Route("/ratata")
     */
    public function indexAction()
    {
        $form = $this->$this->createFormBuilder()
            ->add('inpute', SearchType::class, [
                'require' => false,
            ])->getForm();

        if ($form->isValide() )
        return $this->render('BookBundle:Front:accueil.html.twig');
    }


}
