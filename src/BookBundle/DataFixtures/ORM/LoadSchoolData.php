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
use BookBundle\Entity\School ;


class LoadSchoolData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load ( ObjectManager $manager )
    {
        $orleans = new School ();
        $orleans -> setSchool('Orleans');
        $manager -> persist ( $orleans);
        $this->addReference('Orleans', $orleans);


        $lion = new School ();
        $lion -> setSchool('Lion');
        $manager -> persist ( $lion );
        $this->addReference('Lion', $lion);



        $loupe = new School ();
        $loupe -> setSchool('La Loupe');
        $manager -> persist ( $loupe );
        $this->addReference('Loupe', $loupe);

        $manager -> flush ();
    }

    public function getOrder ()
    {

        return 6 ;
    }
}