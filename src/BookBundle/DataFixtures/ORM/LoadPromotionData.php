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
        $promotion = new Promotion ();
        $promotion -> setPromotion('Sept 2017');
        $promotion -> setSchool($this->getReference('Orleans'));

        $manager -> persist ( $promotion );

        $promotion = new Promotion ();
        $promotion -> setPromotion('Sept 2016');
        $promotion -> setSchool($this->getReference('Lion'));

        $manager -> persist ( $promotion );


        $promotion = new Promotion ();
        $promotion -> setPromotion('Fev 2017');
        $promotion -> setSchool($this->getReference('Orleans'));

        $manager -> persist ( $promotion );

        $promotion = new Promotion ();
        $promotion -> setPromotion('Fev 2016');
        $promotion -> setSchool($this->getReference('Loupe'));

        $manager -> persist ( $promotion );

        $manager -> flush ();
    }

    public function getOrder ()
    {

        return 8 ;
    }
}