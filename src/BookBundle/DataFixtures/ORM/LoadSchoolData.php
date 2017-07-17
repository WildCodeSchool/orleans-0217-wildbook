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
        $orleans -> setSchool('Orléans');
        $orleans -> setAddress('45000 Orleans');
        $orleans -> setLocation('47.9108329, 1.9157977');
        $manager -> persist ( $orleans);
        $this->addReference('Orleans', $orleans);


        $lyon = new School ();
        $lyon -> setSchool('Lyon');
        $lyon -> setAddress('69000 Lyon');
        $lyon -> setLocation('45.7567546, 4.8409266');
        $manager -> persist ( $lyon );
        $this->addReference('Lyon', $lyon);


        $loupe = new School ();
        $loupe -> setSchool('La Loupe');
        $loupe -> setAddress('28240 La Loupe');
        $loupe -> setLocation('48.471285, 1.014305');
        $manager -> persist ( $loupe );
        $this->addReference('Loupe', $loupe);

        $bordeaux = new School ();
        $bordeaux -> setSchool('Bordeaux');
        $bordeaux -> setAddress('33000 Bordeaux');
        $bordeaux -> setLocation('44.8350088, -0.587269');
        $manager -> persist ( $bordeaux );
        $this->addReference('Bordeaux', $bordeaux);

        $lille = new School ();
        $lille -> setSchool('Lille');
        $lille -> setAddress('59000 Lille');
        $lille -> setLocation('50.6138111, 3.0423599');
        $manager -> persist ( $lille );
        $this->addReference('Lille', $lille);

        $paris = new School ();
        $paris -> setSchool('Paris');
        $paris -> setAddress('75000 Paris');
        $paris -> setLocation('48.8785419, 2.3642198');
        $manager -> persist ( $paris );
        $this->addReference('Paris', $paris);

        $strasbourg = new School ();
        $strasbourg -> setSchool('Strasbourg');
        $strasbourg -> setAddress('67000 Strasbourg');
        $strasbourg -> setLocation('48.6019858, 7.7835217');
        $manager -> persist ( $strasbourg );
        $this->addReference('Strasbourg', $strasbourg);

        $toulouse = new School ();
        $toulouse -> setSchool('Toulouse');
        $toulouse -> setAddress('31000 Toulouse');
        $toulouse -> setLocation('43.6046256, 1.444205');
        $manager -> persist ( $toulouse );
        $this->addReference('Toulouse', $toulouse);

        $fontainebleau = new School ();
        $fontainebleau -> setSchool('Fontainebleau');
        $fontainebleau -> setAddress('77300 Fontainebleau');
        $fontainebleau -> setLocation('48.3880879, 2.6613069');
        $manager -> persist ( $fontainebleau );
        $this->addReference('Fontainebleau', $fontainebleau);


        $manager -> flush ();
    }

    public function getOrder ()
    {

        return 6 ;
    }
}