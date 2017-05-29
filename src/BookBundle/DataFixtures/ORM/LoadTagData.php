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
use BookBundle\Entity\Tag ;


class LoadTagData  extends AbstractFixture implements OrderedFixtureInterface
{
    public function load ( ObjectManager $manager )
    {
        $tag = new Tag ();
        $tag -> setTag('restauration');

        $manager -> persist ( $tag );

        $tag = new Tag ();
        $tag -> setTag('theatre');

        $manager -> persist ( $tag );


        $tag = new Tag ();
        $tag -> setTag('musique');

        $manager -> persist ( $tag );

        $tag = new Tag ();
        $tag -> setTag('festival');

        $manager -> persist ( $tag );

        $manager -> flush ();
    }

    public function getOrder ()
    {

        return 1 ;
    }
}