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

        $netBeans = new Technology ();
        $netBeans -> setTechnology('NetBeans');
        $manager -> persist ( $netBeans );
        $this->addReference('NetBeans', $netBeans );

        $eclipse = new Technology ();
        $eclipse -> setTechnology('Eclipse');
        $manager -> persist ( $eclipse );
        $this->addReference('Eclipse', $eclipse );

        $androidS = new Technology ();
        $androidS -> setTechnology('AndroidS');
        $manager -> persist ( $androidS );
        $this->addReference('AndroidS', $androidS );

        $atom = new Technology ();
        $atom -> setTechnology('Atom');
        $manager -> persist ( $atom );
        $this->addReference('Atom', $atom );

        $webStorm = new Technology ();
        $webStorm -> setTechnology('WebStorm');
        $manager -> persist ( $webStorm );
        $this->addReference('WebStorm', $webStorm );

        $rubyMine = new Technology ();
        $rubyMine -> setTechnology('RubyMine');
        $manager -> persist ( $rubyMine );
        $this->addReference('RubyMine', $rubyMine );

        $arcadia = new Technology ();
        $arcadia -> setTechnology('Arcadia');
        $manager -> persist ( $arcadia );
        $this->addReference('Arcadia', $arcadia );

        $wing = new Technology ();
        $wing -> setTechnology('Wing');
        $manager -> persist ( $wing );
        $this->addReference('Wing', $wing );

        $visualC = new Technology ();
        $visualC -> setTechnology('VisualC');
        $manager -> persist ( $visualC );
        $this->addReference('VisualC', $visualC );

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