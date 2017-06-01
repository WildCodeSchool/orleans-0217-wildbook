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
        $resto -> setTag('restauration');
        $manager -> persist ( $resto );
        $this->addReference('Resto', $resto );

        $theatre = new Tag ();
        $theatre -> setTag('theatre');
        $manager -> persist ( $theatre );
        $this->addReference('Theatre', $theatre );

        $mus = new Tag ();
        $mus -> setTag('musique');
        $manager -> persist ( $mus );
        $this->addReference('Mus', $mus );

        $festi = new Tag ();
        $festi -> setTag('festival');
        $manager -> persist ( $festi );
        $this->addReference('Festi', $festi );

        $manager -> flush ();
    }

    public function getOrder ()
    {

        return 1 ;
    }
}