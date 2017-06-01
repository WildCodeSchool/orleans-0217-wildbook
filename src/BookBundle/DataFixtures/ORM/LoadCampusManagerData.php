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
        $camp1 -> setFirstname('Julien');
        $camp1 -> setLastname('Kaita');
        $camp1 -> setSchool($this->getReference('Orleans'));
        $manager -> persist ( $camp1 );
        $this->addReference('Camp1', $camp1 );

        $camp2 = new CampusManager();
        $camp2 -> setFirstname('Sylavain');
        $camp2 -> setLastname('Nicolas');
        $camp2 -> setSchool($this->getReference('Loupe'));
        $manager -> persist ( $camp2 );
        $this->addReference('Camp2', $camp2 );

        $manager -> flush ();
    }

    public function getOrder ()
    {

        return 7 ;
    }
}