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
use BookBundle\Entity\CampusManager ;


class LoadCampusManagerData  extends AbstractFixture implements OrderedFixtureInterface
{
    public function load ( ObjectManager $manager )
    {
        $camp1 = new CampusManager();
        $camp1 -> setFirstname('John');
        $camp1 -> setLastname('Devos');
        $camp1 -> setSchool($this->getReference('Orleans'));
        $camp1 -> setUser($this->getReference('admin'));
        $manager -> persist ( $camp1 );
        $this->addReference('CampusManager1', $camp1 );

        $manager -> flush ();
    }

    public function getOrder ()
    {

        return 15 ;
    }
}