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
        $appWeb = new Category ();
        $appWeb -> setlabel('Application web');
        $manager -> persist ( $appWeb );
        $this->addReference('AppWeb', $appWeb );

        $siteV = new Category ();
        $siteV -> setlabel('Site vitrine');
        $manager -> persist ( $siteV );
        $this->addReference('SiteV', $siteV );

        $appMob = new Category ();
        $appMob -> setlabel('Application Mobile');
        $manager -> persist ( $appMob );
        $this->addReference('AppMob', $appMob );

        $hacka = new Category ();
        $hacka -> setlabel('Hackathon');
        $manager -> persist ( $hacka );
        $this->addReference('Hacka', $hacka );

        $game = new Category ();
        $game -> setlabel('Gamethon');
        $manager -> persist ( $game );
        $this->addReference('Game', $game );


        $manager -> flush ();
    }

    public function getOrder ()
    {

        return 5 ;
    }
}