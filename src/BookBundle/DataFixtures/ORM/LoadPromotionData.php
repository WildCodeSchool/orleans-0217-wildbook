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
use BookBundle\Entity\Promotion ;


class LoadPromotionData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load ( ObjectManager $manager )
    {
        $sept2017 = new Promotion ();
        $sept2017 -> setPromotion('Sept 2017');
        $sept2017 -> setSchool($this->getReference('Orleans'));
        $manager -> persist ( $sept2017 );
        $this->addReference('Sept2017', $sept2017 );

        $sept2016 = new Promotion ();
        $sept2016 -> setPromotion('Sept 2016');
        $sept2016 -> setSchool($this->getReference('Lyon'));
        $manager -> persist ( $sept2016 );
        $this->addReference('Sept2016', $sept2016 );


        $fev2017 = new Promotion ();
        $fev2017 -> setPromotion('Fev 2017');
        $fev2017 -> setSchool($this->getReference('Orleans'));
        $manager -> persist ( $fev2017 );
        $this->addReference('Fev2017', $fev2017 );

        $fev2016 = new Promotion ();
        $fev2016 -> setPromotion('Fev 2016');
        $fev2016 -> setSchool($this->getReference('Loupe'));
        $manager -> persist ( $fev2016 );
        $this->addReference('Fev2016', $fev2016 );

        $manager -> flush ();
    }

    public function getOrder ()
    {

        return 8 ;
    }
}