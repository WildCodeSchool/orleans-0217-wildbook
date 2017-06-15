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


        $lyon = new School ();
        $lyon -> setSchool('Lyon');
        $manager -> persist ( $lyon );
        $this->addReference('Lyon', $lyon);


        $loupe = new School ();
        $loupe -> setSchool('La Loupe');
        $manager -> persist ( $loupe );
        $this->addReference('Loupe', $loupe);

        $bordeaux = new School ();
        $bordeaux -> setSchool('Bordeaux');
        $manager -> persist ( $bordeaux );
        $this->addReference('Bordeaux', $bordeaux);

        $lille = new School ();
        $lille -> setSchool('Lille');
        $manager -> persist ( $lille );
        $this->addReference('Lille', $lille);

        $paris = new School ();
        $paris -> setSchool('Paris');
        $manager -> persist ( $paris );
        $this->addReference('Paris', $paris);

        $strasbourg = new School ();
        $strasbourg -> setSchool('Strasbourg');
        $manager -> persist ( $strasbourg );
        $this->addReference('Strasbourg', $strasbourg);

        $toulouse = new School ();
        $toulouse -> setSchool('Toulouse');
        $manager -> persist ( $toulouse );
        $this->addReference('Toulouse', $toulouse);

        $fontainebleau = new School ();
        $fontainebleau -> setSchool('Fontainebleau');
        $manager -> persist ( $fontainebleau );
        $this->addReference('Fontaine', $fontainebleau);


        $manager -> flush ();
    }

    public function getOrder ()
    {

        return 6 ;
    }
}