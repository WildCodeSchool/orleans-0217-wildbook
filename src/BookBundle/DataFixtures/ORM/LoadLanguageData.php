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

        $c = new Language ();
        $c -> setLanguage('C');
        $manager -> persist ( $c );
        $this->addReference('C', $c );

        $cplus = new Language ();
        $cplus -> setLanguage('C++');
        $manager -> persist ( $cplus );
        $this->addReference('C++', $cplus );

        $csharp = new Language ();
        $csharp -> setLanguage('C#');
        $manager -> persist ( $csharp );
        $this->addReference('C#', $csharp );

        $dart = new Language ();
        $dart -> setLanguage('Dart');
        $manager -> persist ( $dart );
        $this->addReference('Dart', $dart );

        $go = new Language ();
        $go -> setLanguage('Go');
        $manager -> persist ( $go );
        $this->addReference('Go', $go );

        $python = new Language ();
        $python -> setLanguage('Python');
        $manager -> persist ( $python );
        $this->addReference('Python', $python );

        $rust = new Language ();
        $rust -> setLanguage('Rust');
        $manager -> persist ( $rust );
        $this->addReference('Rust', $rust );

        $shell = new Language ();
        $shell -> setLanguage('Shell');
        $manager -> persist ( $shell );
        $this->addReference('Shell', $shell );

        $sql = new Language ();
        $sql -> setLanguage('SQL');
        $manager -> persist ( $sql );
        $this->addReference('SQL', $sql );

        $swift = new Language ();
        $swift -> setLanguage('Swift');
        $manager -> persist ( $swift );
        $this->addReference('Swift', $swift );

        $manager -> flush ();
    }

    public function getOrder ()
    {

        return 2 ;
    }
}