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
        $orlSept16 -> setPromotion('OrlSept16');
        $orlSept16 -> setSchool($this->getReference('Orleans'));
        $orlSept16 -> setLanguages([$this->getReference('Php')]);
        $manager -> persist ( $orlSept16 );
        $this->addReference('OrlSept16', $orlSept16 );

        $orlFev17 = new Promotion ();
        $orlFev17 -> setPromotion('OrlFev17');
        $orlFev17 -> setSchool($this->getReference('Orleans'));
        $orlFev17 -> setLanguages([$this->getReference('Php')]);
        $manager -> persist ( $orlFev17 );
        $this->addReference('OrlFev17', $orlFev17 );

        $lyonFev17 = new Promotion ();
        $lyonFev17 -> setPromotion('LyonFev17');
        $lyonFev17 -> setSchool($this->getReference('Lyon'));
        $lyonFev17 -> setLanguages([
            $this->getReference('Php'),
            $this->getReference('Js')
        ]);
        $manager -> persist ( $lyonFev17 );
        $this->addReference('LyonFev17', $lyonFev17 );
        $lyonSept16 = new Promotion ();
        $lyonSept16 -> setPromotion('LyonSept16');
        $lyonSept16 -> setSchool($this->getReference('Lyon'));
        $lyonSept16 -> setLanguages([
            $this->getReference('Php'),
            $this->getReference('Js')
        ]);
        $manager -> persist ( $lyonSept16 );
        $this->addReference('LyonSept16', $lyonSept16 );
        $loupSept16 = new Promotion ();
        $loupSept16 -> setPromotion('LoupSept16');
        $loupSept16 -> setSchool($this->getReference('Loupe'));
        $loupSept16 -> setLanguages([$this->getReference('Js')]);
        $manager -> persist ( $loupSept16 );
        $this->addReference('LoupSept16', $loupSept16 );
        $loupfev17 = new Promotion ();
        $loupfev17 -> setPromotion('LoupFev17');
        $loupfev17 -> setSchool($this->getReference('Loupe'));
        $loupfev17 -> setLanguages([$this->getReference('Js')]);
        $manager -> persist ( $loupfev17 );
        $this->addReference('LoupFev17', $loupfev17 );
        $loupfev16 = new Promotion ();
        $loupfev16 -> setPromotion('LoupFev16');
        $loupfev16 -> setSchool($this->getReference('Loupe'));
        $loupfev16 -> setLanguages([$this->getReference('Java')]);
        $manager -> persist ( $loupfev16 );
        $this->addReference('LoupFev16', $loupfev16 );
        $loupSept15 = new Promotion ();
        $loupSept15 -> setPromotion('LoupSept15');
        $loupSept15 -> setSchool($this->getReference('Loupe'));
        $loupSept15 -> setLanguages([$this->getReference('Js')]);
        $manager -> persist ( $loupSept15 );
        $this->addReference('LoupSept15', $loupSept15 );
        $bordSept16 = new Promotion ();
        $bordSept16 -> setPromotion('BordSept16');
        $bordSept16 -> setSchool($this->getReference('Bordeaux'));
        $bordSept16 -> setLanguages([
            $this->getReference('Php'),
            $this->getReference('Js')
        ]);
        $manager -> persist ( $bordSept16 );
        $this->addReference('BordSept16', $bordSept16 );
        $bordNov16 = new Promotion ();
        $bordNov16 -> setPromotion('BordNov16');
        $bordNov16 -> setSchool($this->getReference('Bordeaux'));
        $bordNov16 -> setLanguages([$this->getReference('Php')]);
        $manager -> persist ( $bordNov16 );
        $this->addReference('BordNov16', $bordNov16 );
        $bordFev17 = new Promotion ();
        $bordFev17 -> setPromotion('BordFev17');
        $bordFev17 -> setSchool($this->getReference('Bordeaux'));
        $bordFev17 -> setLanguages([
            $this->getReference('Php'),
            $this->getReference('Js')
        ]);
        $manager -> persist ( $bordFev17 );
        $this->addReference('BordFev17', $bordFev17 );
        $bordJuin17 = new Promotion ();
        $bordJuin17 -> setPromotion('BordJuin17');
        $bordJuin17 -> setSchool($this->getReference('Bordeaux'));
        $bordJuin17 -> setLanguages([$this->getReference('Php')]);
        $manager -> persist ( $bordJuin17 );
        $this->addReference('BordJuin17', $bordJuin17 );
        $lilleSept16 = new Promotion ();
        $lilleSept16 -> setPromotion('LilleSept16');
        $lilleSept16 -> setSchool($this->getReference('Lille'));
        $lilleSept16 -> setLanguages([$this->getReference('Ruby')]);
        $manager -> persist ( $lilleSept16 );
        $this->addReference('LilleSept16', $lilleSept16 );
        $lilleFev17 = new Promotion ();
        $lilleFev17 -> setPromotion('LilleFev17');
        $lilleFev17 -> setSchool($this->getReference('Lille'));
        $lilleFev17 -> setLanguages([$this->getReference('Ruby')]);
        $manager -> persist ( $lilleFev17 );
        $this->addReference('LilleFev17', $lilleFev17 );
        $parisFev17 = new Promotion ();
        $parisFev17 -> setPromotion('ParisFev17');
        $parisFev17 -> setSchool($this->getReference('Paris'));
        $parisFev17 -> setLanguages([$this->getReference('Ruby')]);
        $manager -> persist ( $parisFev17 );
        $this->addReference('ParisFev17', $parisFev17 );
        $strasFev17 = new Promotion ();
        $strasFev17 -> setPromotion('StrasFev17');
        $strasFev17 -> setSchool($this->getReference('Strasbourg'));
        $strasFev17 -> setLanguages([
            $this->getReference('Java'),
            $this->getReference('SQL')
        ]);
        $manager -> persist ( $strasFev17 );
        $this->addReference('StrasFev17', $strasFev17 );
        $toulFev16 = new Promotion ();
        $toulFev16 -> setPromotion('ToulFev16');
        $toulFev16 -> setSchool($this->getReference('Toulouse'));
        $toulFev16 -> setLanguages([$this->getReference('Java')]);
        $manager -> persist ( $toulFev16 );
        $this->addReference('ToulFev16', $toulFev16 );
        $toulFev17 = new Promotion ();
        $toulFev17 -> setPromotion('ToulFev17');
        $toulFev17 -> setSchool($this->getReference('Toulouse'));
        $toulFev17 -> setLanguages([
            $this->getReference('Java'),
            $this->getReference('Swift')
        ]);
        $manager -> persist ( $toulFev17 );
        $this->addReference('ToulFev17', $toulFev17 );
        $toulSept16 = new Promotion ();
        $toulSept16 -> setPromotion('ToulSept16');
        $toulSept16 -> setSchool($this->getReference('Toulouse'));
        $toulSept16 -> setLanguages([
            $this->getReference('Java'),
            $this->getReference('Swift')
        ]);
        $manager -> persist ( $toulSept16 );
        $this->addReference('ToulSept16', $toulSept16 );
        $fontFev17 = new Promotion ();
        $fontFev17 -> setPromotion('FontFev17');
        $fontFev17 -> setSchool($this->getReference('Fontaine'));
        $fontFev17 -> setLanguages([$this->getReference('Php')]);
        $manager -> persist ( $fontFev17 );
        $this->addReference('FontFev17', $fontFev17 );

        $manager -> flush ();
    }

    public function getOrder ()
    {

        return 8 ;
    }
}