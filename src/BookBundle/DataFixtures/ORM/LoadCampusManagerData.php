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
        $camp1 -> setLastname('Le John');
        $camp1 -> setSchool($this->getReference('Orleans'));
        $camp1 -> setUser($this->getReference('admin1'));
        $manager -> persist ( $camp1 );
        $this->addReference('Camp1', $camp1 );
        $camp2 = new CampusManager();
        $camp2 -> setFirstname('Damien');
        $camp2 -> setLastname('Armenté');
        $camp2 -> setSchool($this->getReference('Lyon'));
        $camp2 -> setUser($this->getReference('admin2'));
        $manager -> persist ( $camp2 );
        $this->addReference('Camp2', $camp2 );
        $camp3 = new CampusManager();
        $camp3 -> setFirstname('Maxime');
        $camp3 -> setLastname('Cornuau');
        $camp3 -> setSchool($this->getReference('Loupe'));
        $camp3 -> setUser($this->getReference('admin3'));
        $manager -> persist ( $camp3 );
        $this->addReference('Camp3', $camp3 );
        $camp4 = new CampusManager();
        $camp4 -> setFirstname('Elisa');
        $camp4 -> setLastname('Etcheverry');
        $camp4 -> setSchool($this->getReference('Bordeaux'));
        $camp4 -> setUser($this->getReference('admin4'));
        $manager -> persist ( $camp4 );
        $this->addReference('Camp4', $camp4 );
        $camp5 = new CampusManager();
        $camp5 -> setFirstname('Olivier');
        $camp5 -> setLastname('Trentesaux');
        $camp5 -> setSchool($this->getReference('Lille'));
        $camp5 -> setUser($this->getReference('admin5'));
        $manager -> persist ( $camp5 );
        $this->addReference('Camp5', $camp5 );
        $camp6 = new CampusManager();
        $camp6 -> setFirstname('Marine');
        $camp6 -> setLastname('Bonte');
        $camp6 -> setSchool($this->getReference('Paris'));
        $camp6 -> setUser($this->getReference('admin6'));
        $manager -> persist ( $camp6 );
        $this->addReference('Camp6', $camp6 );
        $camp7 = new CampusManager();
        $camp7 -> setFirstname('Franck');
        $camp7 -> setLastname('Olivier');
        $camp7 -> setSchool($this->getReference('Strasbourg'));
        $camp7 -> setUser($this->getReference('admin7'));
        $manager -> persist ( $camp7 );
        $this->addReference('Camp7', $camp7 );
        $camp8 = new CampusManager();
        $camp8 -> setFirstname('Justine');
        $camp8 -> setLastname('Lacousse');
        $camp8 -> setSchool($this->getReference('Toulouse'));
        $camp8 -> setUser($this->getReference('admin8'));
        $manager -> persist ( $camp8 );
        $this->addReference('Camp8', $camp8 );
        $camp9 = new CampusManager();
        $camp9 -> setFirstname('Claire');
        $camp9 -> setLastname('Job');
        $camp9 -> setSchool($this->getReference('Fontaine'));
        $camp9 -> setUser($this->getReference('admin9'));
        $manager -> persist ( $camp9 );
        $this->addReference('Camp9', $camp9 );


        $manager -> flush ();
    }

    public function getOrder ()
    {

        return 15 ;
    }
}