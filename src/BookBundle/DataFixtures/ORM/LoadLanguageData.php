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
        $php = new Language ();
        $php -> setLanguage('PHP');
        $manager -> persist ( $php );
        $this->addReference('Php', $php );


        $js = new Language ();
        $js -> setLanguage('Java Script');
        $manager -> persist ( $js );
        $this->addReference('Js', $js );

        $java = new Language ();
        $java -> setLanguage('Java');
        $manager -> persist ( $java );
        $this->addReference('Java', $java );

        $ruby = new Language ();
        $ruby -> setLanguage('Ruby');
        $manager -> persist ( $ruby );
        $this->addReference('Ruby', $ruby );

        $manager -> flush ();
    }

    public function getOrder ()
    {

        return 2 ;
    }
}