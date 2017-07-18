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
use BookBundle\Entity\Availability ;


class LoadAvailabilityData  extends AbstractFixture implements OrderedFixtureInterface
{
    public function load ( ObjectManager $manager )
    {
        $reStage = new Availability ();
        $reStage -> setlabel('En recherche de stage');
        $manager -> persist ( $reStage );
        $this->addReference('ReStage', $reStage );

        $poste = new Availability ();
        $poste -> setlabel('En Poste');
        $manager -> persist ( $poste );
        $this->addReference('Poste', $poste );

        $stage = new Availability ();
        $stage -> setlabel('En Stage');
        $manager -> persist ( $stage );
        $this->addReference('Stage', $stage );

        $rePoste = new Availability ();
        $rePoste -> setlabel('En recherche d\'un poste');
        $manager -> persist ( $rePoste );
        $this->addReference('RePoste', $rePoste );

        $forma = new Availability ();
        $forma -> setlabel('En Formation');
        $manager -> persist ( $forma );
        $this->addReference('Forma', $forma );

        $manager -> flush ();
    }

    public function getOrder ()
    {

        return 4 ;
    }
}