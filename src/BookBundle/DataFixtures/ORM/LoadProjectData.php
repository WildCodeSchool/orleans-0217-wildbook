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
use BookBundle\Entity\Project ;


class LoadProjectData  extends AbstractFixture implements OrderedFixtureInterface
{
    public function load ( ObjectManager $manager )
    {
        $project1 = new Project();
        $project1 -> setSchool($this->getReference('Orléans'));
        $project1 -> setDate(new \DateTime('2017-03-01'));
        $project1 -> setTitle('Laklak');
        $project1 -> setPath('http://www.laklak.com');
        $project1 -> setCustomer('Laklak Production');
        $project1 -> setStatus('En production');
        $project1 -> setDescription('');
        $project1 -> setSummary('');
        $manager -> persist ( $project1 );
        $this->addReference('Project1', $project1 );

        $manager -> flush ();

    }

    public function getOrder ()
    {

        return 11 ;
    }
}