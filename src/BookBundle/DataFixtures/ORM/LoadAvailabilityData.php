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
use BookBundle\Entity\Availability ;


class LoadAvailabilityData  extends AbstractFixture implements OrderedFixtureInterface
{
    public function load ( ObjectManager $manager )
    {
        $availability = new Availability ();
        $availability -> setlabel('En recherche de stage');

        $manager -> persist ( $availability );

        $availability = new Availability ();
        $availability -> setlabel('En Poste');

        $manager -> persist ( $availability );


        $availability = new Availability ();
        $availability -> setlabel('En Stage');

        $manager -> persist ( $availability );

        $availability = new Availability ();
        $availability -> setlabel('En vacance');

        $manager -> persist ( $availability );

        $manager -> flush ();
    }

    public function getOrder ()
    {

        return 4 ;
    }
}