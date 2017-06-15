<?php
/**
 * Created by PhpStorm.
 * User: biovor
 * Date: 29/05/17
 * Time: 14:54
 */

namespace BookBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager ;
use BookBundle\Entity\Tag ;


class LoadTagData  extends AbstractFixture implements OrderedFixtureInterface
{
    public function load ( ObjectManager $manager )
    {
        $resto = new Tag ();
        $resto -> setTag('Restauration');
        $manager -> persist ( $resto );
        $this->addReference('Resto', $resto );

        $theatre = new Tag ();
        $theatre -> setTag('Theatre');
        $manager -> persist ( $theatre );
        $this->addReference('Theatre', $theatre );

        $mus = new Tag ();
        $mus -> setTag('Musique');
        $manager -> persist ( $mus );
        $this->addReference('Mus', $mus );

        $festi = new Tag ();
        $festi -> setTag('Festival');
        $manager -> persist ( $festi );
        $this->addReference('Festi', $festi );

        $chapeau = new Tag ();
        $chapeau -> setTag('Chapeau');
        $manager -> persist ( $chapeau );
        $this->addReference('Chapeau', $chapeau );

        $pizza = new Tag ();
        $pizza -> setTag('Pizza');
        $manager -> persist ( $pizza );
        $this->addReference('Pizza', $pizza );

        $food = new Tag ();
        $food -> setTag('Food');
        $manager -> persist ( $food );
        $this->addReference('Food', $food );

        $orchestre = new Tag ();
        $orchestre -> setTag('Orchestre');
        $manager -> persist ( $orchestre );
        $this->addReference('Orchestre', $orchestre );

        $event = new Tag ();
        $event -> setTag('Event');
        $manager -> persist ( $event );
        $this->addReference('Event', $event );

        $wilde = new Tag ();
        $wilde -> setTag('Wilde');
        $manager -> persist ( $wilde );
        $this->addReference('Wilde', $wilde );

        $immo = new Tag ();
        $immo -> setTag('Immo');
        $manager -> persist ( $immo );
        $this->addReference('Immo', $immo );

        $auto = new Tag ();
        $auto -> setTag('Auto');
        $manager -> persist ( $auto );
        $this->addReference('Auto', $auto );

        $meteo = new Tag ();
        $meteo -> setTag('Meteo');
        $manager -> persist ( $meteo );
        $this->addReference('Meteo', $meteo );

        $asso = new Tag ();
        $asso -> setTag('Asso');
        $manager -> persist ( $asso );
        $this->addReference('Asso', $asso );

        $jardin = new Tag ();
        $jardin -> setTag('Jardin');
        $manager -> persist ( $jardin );
        $this->addReference('Jardin', $jardin );

        $entretien = new Tag ();
        $entretien -> setTag('Entretien');
        $manager -> persist ( $entretien );
        $this->addReference('Entretien', $entretien );

        $nature = new Tag ();
        $nature -> setTag('Nature');
        $manager -> persist ( $nature );
        $this->addReference('Nature', $nature );

        $ville = new Tag ();
        $ville -> setTag('Ville');
        $manager -> persist ( $ville );
        $this->addReference('Ville', $ville );

        $fun = new Tag ();
        $fun -> setTag('Fun');
        $manager -> persist ( $fun );
        $this->addReference('Fun', $fun );


        $manager -> flush ();
    }

    public function getOrder ()
    {

        return 1 ;
    }
}