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
use BookBundle\Entity\Language ;


class LoadLanguageData  extends AbstractFixture implements OrderedFixtureInterface
{
    public function load ( ObjectManager $manager )
    {
        $language = new Language ();
        $language -> setLanguage('PHP');

        $manager -> persist ( $language );

        $language = new Language ();
        $language -> setLanguage('Java Script');

        $manager -> persist ( $language );


        $language = new Language ();
        $language -> setLanguage('Java');

        $manager -> persist ( $language );

        $language = new Language ();
        $language -> setLanguage('Ruby');

        $manager -> persist ( $language );

        $manager -> flush ();
    }

    public function getOrder ()
    {

        return 2 ;
    }
}