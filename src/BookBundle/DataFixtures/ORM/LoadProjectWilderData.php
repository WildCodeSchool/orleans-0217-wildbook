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
use BookBundle\Entity\ProjectWilder ;


class LoadProjectWilderData  extends AbstractFixture implements OrderedFixtureInterface
{
    public function load ( ObjectManager $manager )
    {
        $prWild1 = new ProjectWilder();
        $prWild1->setProject($this->getReference('Project2'));
        $prWild1->setWilder($this->getReference('Wilder1'));
        $prWild1->setVisibility(true);
        $manager -> persist ( $prWild1 );

//        $prWild1 = new ProjectWilder();
//        $prWild1->setProject($this->getReference('Project5'));
//        $prWild1->setWilder($this->getReference('Wilder1'));
//        $prWild1->setVisibility(true);
//        $manager -> persist ( $prWild1 );
//
//        $prWild1 = new ProjectWilder();
//        $prWild1->setProject($this->getReference('Project5'));
//        $prWild1->setWilder($this->getReference('Wilder4'));
//        $prWild1->setVisibility(true);
//        $manager -> persist ( $prWild1 );
//
//        $prWild1 = new ProjectWilder();
//        $prWild1->setProject($this->getReference('Project5'));
//        $prWild1->setWilder($this->getReference('Wilder3'));
//        $prWild1->setVisibility(true);
//        $manager -> persist ( $prWild1 );
//
//        $prWild1 = new ProjectWilder();
//        $prWild1->setProject($this->getReference('Project6'));
//        $prWild1->setWilder($this->getReference('Wilder2'));
//        $prWild1->setVisibility(true);
//        $manager -> persist ( $prWild1 );
//
//        $prWild1 = new ProjectWilder();
//        $prWild1->setProject($this->getReference('Project6'));
//        $prWild1->setWilder($this->getReference('Wilder6'));
//        $prWild1->setVisibility(true);
//        $manager -> persist ( $prWild1 );
//
//        $prWild1 = new ProjectWilder();
//        $prWild1->setProject($this->getReference('Project4'));
//        $prWild1->setWilder($this->getReference('Wilder2'));
//        $prWild1->setVisibility(true);
//        $manager -> persist ( $prWild1 );
//
//        $prWild1 = new ProjectWilder();
//        $prWild1->setProject($this->getReference('Project4'));
//        $prWild1->setWilder($this->getReference('Wilder3'));
//        $prWild1->setVisibility(true);
//        $manager -> persist ( $prWild1 );
//
//        $prWild1 = new ProjectWilder();
//        $prWild1->setProject($this->getReference('Project3'));
//        $prWild1->setWilder($this->getReference('Wilder4'));
//        $prWild1->setVisibility(true);
//        $manager -> persist ( $prWild1 );

        $manager -> flush ();
    }

    public function getOrder ()
    {

        return 12 ;
    }
}