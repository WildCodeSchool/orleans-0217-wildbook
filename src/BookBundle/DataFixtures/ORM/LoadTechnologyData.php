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
        $symfony = new Technology ();
        $symfony -> setTechnology('Symfony');
        $manager -> persist ( $symfony );
        $this->addReference('Symfony', $symfony );

        $storm = new Technology ();
        $storm -> setTechnology('PHPStorm');
        $manager -> persist ( $storm );
        $this->addReference('PHPStorm', $storm );

        $boot = new Technology ();
        $boot -> setTechnology('Bootstrap');
        $manager -> persist ( $boot );
        $this->addReference('Bootstrap', $boot );

        $workb = new Technology ();
        $workb -> setTechnology('WorkBench');
        $manager -> persist ( $workb );
        $this->addReference('WorkBench', $workb );

        $eclipse = new Technology ();
        $eclipse -> setTechnology('Eclipse');
        $manager -> persist ( $eclipse );
        $this->addReference('Eclipse', $eclipse );

        $androidS = new Technology ();
        $androidS -> setTechnology('AndroidS');
        $manager -> persist ( $androidS );
        $this->addReference('AndroidS', $androidS );

        $laravel = new Technology ();
        $laravel -> setTechnology('Laravel');
        $manager -> persist ( $laravel );
        $this->addReference('Laravel', $laravel );

        $manager -> flush ();
    }

    public function getOrder ()
    {

        return 3 ;
    }
}