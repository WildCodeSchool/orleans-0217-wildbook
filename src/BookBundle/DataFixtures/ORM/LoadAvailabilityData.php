<?php
/**
 * Created by PhpStorm.
 * User: biovor
 * Date: 29/05/17
 * Time: 14:54
 */

namespace BookBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface ;
use Doctrine\Common\Persistence\ObjectManager ;
use BookBundle\Entity\Availability ;


class LoadAvailabilityData  implements FixtureInterface
{
    public function load ( ObjectManager $manager )
    {

    }
}