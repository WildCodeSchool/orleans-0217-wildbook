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
        $symfo = new Technology ();
        $symfo -> setTechnology('Symfony');
        $manager -> persist ( $symfo );
        $this->addReference('Symfo', $symfo );

        $storm = new Technology ();
        $storm -> setTechnology('PHP Storm');
        $manager -> persist ( $storm );
        $this->addReference('Storm', $storm );

        $boot = new Technology ();
        $boot -> setTechnology('Bootstrap');
        $manager -> persist ( $boot );
        $this->addReference('Boot', $boot );

        $workb = new Technology ();
        $workb -> setTechnology('WorkBench');
        $manager -> persist ( $workb );
        $this->addReference('Workb', $workb );

        $manager -> flush ();
    }

    public function getOrder ()
    {

        return 3 ;
    }
}