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
use BookBundle\Entity\Promotion ;


class LoadPromotionData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load ( ObjectManager $manager )
    {
        $orlSept16 = new Promotion ();
        $orlSept16 -> setPromotion('OrléansSept16');
        $orlSept16 -> setSchool($this->getReference('Orléans'));
        $orlSept16 -> setLanguages([$this->getReference('PHP')]);
        $manager -> persist ( $orlSept16 );
        $this->addReference('OrléansSept16', $orlSept16 );

        $orlFev17 = new Promotion ();
        $orlFev17 -> setPromotion('OrléansFev17');
        $orlFev17 -> setSchool($this->getReference('Orléans'));
        $orlFev17 -> setLanguages([$this->getReference('PHP')]);
        $manager -> persist ( $orlFev17 );
        $this->addReference('OrléansFev17', $orlFev17 );

        $lyonFev17 = new Promotion ();
        $lyonFev17 -> setPromotion('LyonFev17');
        $lyonFev17 -> setSchool($this->getReference('Lyon'));
        $lyonFev17 -> setLanguages([
            $this->getReference('PHP'),
            $this->getReference('Js')
        ]);
        $manager -> persist ( $lyonFev17 );
        $this->addReference('LyonFev17', $lyonFev17 );

        $lyonSept16 = new Promotion ();
        $lyonSept16 -> setPromotion('LyonSept16');
        $lyonSept16 -> setSchool($this->getReference('Lyon'));
        $lyonSept16 -> setLanguages([
            $this->getReference('PHP'),
            $this->getReference('Js')
        ]);
        $manager -> persist ( $lyonSept16 );
        $this->addReference('LyonSept16', $lyonSept16 );

        $bordSept16 = new Promotion ();
        $bordSept16 -> setPromotion('BordeauxSept16');
        $bordSept16 -> setSchool($this->getReference('Bordeaux'));
        $bordSept16 -> setLanguages([
            $this->getReference('PHP'),
            $this->getReference('Js')
        ]);
        $manager -> persist ( $bordSept16 );
        $this->addReference('BordeauxSept16', $bordSept16 );

        $bordNov16 = new Promotion ();
        $bordNov16 -> setPromotion('BordeauxNov16');
        $bordNov16 -> setSchool($this->getReference('Bordeaux'));
        $bordNov16 -> setLanguages([$this->getReference('PHP')]);
        $manager -> persist ( $bordNov16 );
        $this->addReference('BordeauxNov16', $bordNov16 );

        $bordFev17 = new Promotion ();
        $bordFev17 -> setPromotion('BordeauxFev17');
        $bordFev17 -> setSchool($this->getReference('Bordeaux'));
        $bordFev17 -> setLanguages([
            $this->getReference('PHP'),
            $this->getReference('Js')

        ]);
        $manager -> persist ( $bordFev17 );
        $this->addReference('BordeauxFev17', $bordFev17 );

        $toulSept16 = new Promotion ();
        $toulSept16 -> setPromotion('ToulouseSept16');
        $toulSept16 -> setSchool($this->getReference('Toulouse'));
        $toulSept16 -> setLanguages([
            $this->getReference('Java'),
        ]);
        $manager -> persist ( $toulSept16 );
        $this->addReference('ToulouseSept16', $toulSept16 );


        $manager -> flush ();
    }

    public function getOrder ()
    {

        return 8 ;
    }
}