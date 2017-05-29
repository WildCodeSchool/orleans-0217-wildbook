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
use BookBundle\Entity\Category ;


class LoadCategoryData  extends AbstractFixture implements OrderedFixtureInterface
{
    public function load ( ObjectManager $manager )
    {
        $category = new Category ();
        $category -> setlabel('Application web');

        $manager -> persist ( $category );

        $category = new Category ();
        $category -> setlabel('Site vitrine');

        $manager -> persist ( $category );


        $category = new Category ();
        $category -> setlabel('Application Mobile');

        $manager -> persist ( $category );

        $category = new Category ();
        $category -> setlabel('Hackathon');

        $manager -> persist ( $category );

        $manager -> flush ();
    }

    public function getOrder ()
    {

        return 5 ;
    }
}