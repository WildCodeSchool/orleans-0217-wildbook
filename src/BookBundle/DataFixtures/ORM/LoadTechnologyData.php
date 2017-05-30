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
use BookBundle\Entity\Technology ;


class LoadTechnologyData  extends AbstractFixture implements OrderedFixtureInterface
{
    public function load ( ObjectManager $manager )
    {
        $technology = new Technology ();
        $technology -> setTechnology('Symfony');

        $manager -> persist ( $technology );

        $technology = new Technology ();
        $technology -> setTechnology('PHP Storm');

        $manager -> persist ( $technology );


        $technology = new Technology ();
        $technology -> setTechnology('Bootstrap');

        $manager -> persist ( $technology );

        $technology = new Technology ();
        $technology -> setTechnology('WorkBench');

        $manager -> persist ( $technology );

        $manager -> flush ();
    }

    public function getOrder ()
    {

        return 3 ;
    }
}