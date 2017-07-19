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

        $orchestre = new Tag ();
        $orchestre -> setTag('Orchestre');
        $manager -> persist ( $orchestre );
        $this->addReference('Orchestre', $orchestre );

        $immo = new Tag ();
        $immo -> setTag('Immobilier');
        $manager -> persist ( $immo );
        $this->addReference('Immobilier', $immo );

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

        $manager -> flush ();
    }

    public function getOrder ()
    {

        return 1 ;
    }
}