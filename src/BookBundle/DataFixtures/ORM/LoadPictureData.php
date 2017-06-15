<?php
/**
 * Created by PhpStorm.
 * User: biovor
 * Date: 29/05/17
 * Time: 14:54
 */

namespace BookBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface ;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager ;
use BookBundle\Entity\Picture ;


class LoadPictureData  extends AbstractFixture implements OrderedFixtureInterface
{
    public function load ( ObjectManager $manager )
    {
        $picture1 = new Picture();
        $picture1 ->setIsPrincipal(true);
        $picture1 ->setPath('image-0.jpg');
        $picture1 ->setProject($this->getReference('Project1'));
        $manager -> persist ( $picture1 );

        $picture2 = new Picture();
        $picture2 ->setIsPrincipal(true);
        $picture2 ->setPath('image-1.jpg');
        $picture2 ->setProject($this->getReference('Project2'));
        $manager -> persist ( $picture2 );

        $picture3 = new Picture();
        $picture3 ->setIsPrincipal(true);
        $picture3 ->setPath('image-2.jpg');
        $picture3 ->setProject($this->getReference('Project3'));
        $manager -> persist ( $picture3 );

        $picture4 = new Picture();
        $picture4 ->setIsPrincipal(true);
        $picture4 ->setPath('image-3.jpg');
        $picture4 ->setProject($this->getReference('Project4'));
        $manager -> persist ( $picture4 );

        $picture5 = new Picture();
        $picture5 ->setIsPrincipal(true);
        $picture5 ->setPath('image-4.jpg');
        $picture5 ->setProject($this->getReference('Project5'));
        $manager -> persist ( $picture5 );

        $picture6 = new Picture();
        $picture6 ->setIsPrincipal(true);
        $picture6 ->setPath('image-5.jpg');
        $picture6 ->setProject($this->getReference('Project6'));
        $manager -> persist ( $picture6 );

        $picture7 = new Picture();
        $picture7 ->setIsPrincipal(true);
        $picture7 ->setPath('image-6.jpg');
        $picture7 ->setProject($this->getReference('Project7'));
        $manager -> persist ( $picture7 );

        $picture8 = new Picture();
        $picture8 ->setIsPrincipal(true);
        $picture8 ->setPath('image-7.jpg');
        $picture8 ->setProject($this->getReference('Project8'));
        $manager -> persist ( $picture8 );

        $picture9 = new Picture();
        $picture9 ->setIsPrincipal(true);
        $picture9 ->setPath('image-8.jpg');
        $picture9 ->setProject($this->getReference('Project9'));
        $manager -> persist ( $picture9 );

        $picture10 = new Picture();
        $picture10 ->setIsPrincipal(true);
        $picture10 ->setPath('image-9.jpg');
        $picture10 ->setProject($this->getReference('Project10'));
        $manager -> persist ( $picture10 );

        $picture11 = new Picture();
        $picture11 ->setIsPrincipal(true);
        $picture11 ->setPath('image-10.jpg');
        $picture11 ->setProject($this->getReference('Project11'));
        $manager -> persist ( $picture11 );

        $picture12 = new Picture();
        $picture12 ->setIsPrincipal(true);
        $picture12 ->setPath('image-11.jpg');
        $picture12 ->setProject($this->getReference('Project12'));
        $manager -> persist ( $picture12 );

        $picture13 = new Picture();
        $picture13 ->setIsPrincipal(true);
        $picture13 ->setPath('image-12.jpg');
        $picture13 ->setProject($this->getReference('Project13'));
        $manager -> persist ( $picture13 );

        $picture14 = new Picture();
        $picture14 ->setIsPrincipal(true);
        $picture14 ->setPath('image-13.jpg');
        $picture14 ->setProject($this->getReference('Project14'));
        $manager -> persist ( $picture14 );

        $picture15 = new Picture();
        $picture15 ->setIsPrincipal(true);
        $picture15 ->setPath('image-14.jpg');
        $picture15 ->setProject($this->getReference('Project15'));
        $manager -> persist ( $picture15 );

        $picture16 = new Picture();
        $picture16 ->setIsPrincipal(true);
        $picture16 ->setPath('image-15.jpg');
        $picture16 ->setProject($this->getReference('Project16'));
        $manager -> persist ( $picture16 );

        $picture17 = new Picture();
        $picture17 ->setIsPrincipal(true);
        $picture17 ->setPath('image-16.jpg');
        $picture17 ->setProject($this->getReference('Project17'));
        $manager -> persist ( $picture17 );

        $picture18 = new Picture();
        $picture18 ->setIsPrincipal(true);
        $picture18 ->setPath('image-17.jpg');
        $picture18 ->setProject($this->getReference('Project18'));
        $manager -> persist ( $picture18 );

        $picture19 = new Picture();
        $picture19 ->setIsPrincipal(true);
        $picture19 ->setPath('mimage-0.jpg');
        $picture19 ->setProject($this->getReference('Project19'));
        $manager -> persist ( $picture19 );

        $picture20 = new Picture();
        $picture20 ->setIsPrincipal(true);
        $picture20 ->setPath('image-18.jpg');
        $picture20 ->setProject($this->getReference('Project20'));
        $manager -> persist ( $picture20 );

        $picture21 = new Picture();
        $picture21 ->setIsPrincipal(true);
        $picture21 ->setPath('image-19.jpg');
        $picture21 ->setProject($this->getReference('Project21'));
        $manager -> persist ( $picture21 );

        $picture22 = new Picture();
        $picture22 ->setIsPrincipal(true);
        $picture22 ->setPath('image-20.jpg');
        $picture22 ->setProject($this->getReference('Project22'));
        $manager -> persist ( $picture22 );

        $picture23 = new Picture();
        $picture23 ->setIsPrincipal(true);
        $picture23 ->setPath('mimage-1.jpg');
        $picture23 ->setProject($this->getReference('Project23'));
        $manager -> persist ( $picture23 );

        $picture24 = new Picture();
        $picture24 ->setIsPrincipal(true);
        $picture24 ->setPath('mimage-2.jpg');
        $picture24 ->setProject($this->getReference('Project24'));
        $manager -> persist ( $picture24 );

        $picture25 = new Picture();
        $picture25 ->setIsPrincipal(true);
        $picture25 ->setPath('mimage-3.jpg');
        $picture25 ->setProject($this->getReference('Project25'));
        $manager -> persist ( $picture25 );

        $picture26 = new Picture();
        $picture26 ->setIsPrincipal(true);
        $picture26 ->setPath('image-21.jpg');
        $picture26 ->setProject($this->getReference('Project26'));
        $manager -> persist ( $picture26 );





        $picture27 = new Picture();
        $picture27 ->setIsPrincipal(false);
        $picture27 ->setPath('mimage-4.jpg');
        $picture27 ->setProject($this->getReference('Project19'));
        $manager -> persist ( $picture27 );

        $picture28 = new Picture();
        $picture28 ->setIsPrincipal(false);
        $picture28 ->setPath('mimage-5.jpg');
        $picture28 ->setProject($this->getReference('Project19'));$manager -> persist ( $picture28 );

        $picture29 = new Picture();
        $picture29 ->setIsPrincipal(false);
        $picture29 ->setPath('mimage-6.jpg');
        $picture29 ->setProject($this->getReference('Project19'));
        $manager -> persist ( $picture29 );

        $picture30 = new Picture();
        $picture30 ->setIsPrincipal(false);
        $picture30 ->setPath('mimage-7.jpg');
        $picture30 ->setProject($this->getReference('Project23'));
        $manager -> persist ( $picture30 );

        $picture31 = new Picture();
        $picture31 ->setIsPrincipal(false);
        $picture31 ->setPath('mimage-8.jpg');
        $picture31 ->setProject($this->getReference('Project23'));
        $manager -> persist ( $picture31 );

        $picture32 = new Picture();
        $picture32 ->setIsPrincipal(false);
        $picture32 ->setPath('mimage-9.jpg');
        $picture32 ->setProject($this->getReference('Project23'));
        $manager -> persist ( $picture32 );

        $picture33 = new Picture();
        $picture33 ->setIsPrincipal(false);
        $picture33 ->setPath('mimage-10.jpg');
        $picture33 ->setProject($this->getReference('Project24'));
        $manager -> persist ( $picture33 );

        $picture34 = new Picture();
        $picture34 ->setIsPrincipal(false);
        $picture34 ->setPath('mimage-11.jpg');
        $picture34 ->setProject($this->getReference('Project24'));
        $manager -> persist ( $picture34 );

        $picture35 = new Picture();
        $picture35 ->setIsPrincipal(false);
        $picture35 ->setPath('mimage-12.jpg');
        $picture35 ->setProject($this->getReference('Project24'));
        $manager -> persist ( $picture35 );

        $picture36 = new Picture();
        $picture36 ->setIsPrincipal(false);
        $picture36 ->setPath('mimage-13.jpg');
        $picture36 ->setProject($this->getReference('Project25'));
        $manager -> persist ( $picture36 );

        $picture37 = new Picture();
        $picture37 ->setIsPrincipal(false);
        $picture37 ->setPath('mimage-14.jpg');
        $picture37 ->setProject($this->getReference('Project25'));
        $manager -> persist ( $picture37 );

        $picture38 = new Picture();
        $picture38 ->setIsPrincipal(false);
        $picture38 ->setPath('mimage-15.jpg');
        $picture38 ->setProject($this->getReference('Project25'));
        $manager -> persist ( $picture38 );



        $picture39 = new Picture();
        $picture39 ->setIsPrincipal(false);
        $picture39 ->setPath('image-22.jpg');
        $picture39 ->setProject($this->getReference('Project1'));
        $manager -> persist ( $picture39 );

        $picture40 = new Picture();
        $picture40 ->setIsPrincipal(false);
        $picture40 ->setPath('image-23.jpg');
        $picture40 ->setProject($this->getReference('Project1'));
        $manager -> persist ( $picture40 );

        $picture41 = new Picture();
        $picture41 ->setIsPrincipal(false);
        $picture41 ->setPath('image-24.jpg');
        $picture41 ->setProject($this->getReference('Project1'));
        $manager -> persist ( $picture41 );

        $picture42 = new Picture();
        $picture42 ->setIsPrincipal(false);
        $picture42 ->setPath('image-25.jpg');
        $picture42 ->setProject($this->getReference('Project2'));
        $manager -> persist ( $picture42 );

        $picture43 = new Picture();
        $picture43 ->setIsPrincipal(false);
        $picture43 ->setPath('image-26.jpg');
        $picture43 ->setProject($this->getReference('Project2'));
        $manager -> persist ( $picture43 );

        $picture44 = new Picture();
        $picture44 ->setIsPrincipal(false);
        $picture44 ->setPath('image-27.jpg');
        $picture44 ->setProject($this->getReference('Project2'));
        $manager -> persist ( $picture44 );

        $picture45 = new Picture();
        $picture45 ->setIsPrincipal(false);
        $picture45 ->setPath('image-28.jpg');
        $picture45 ->setProject($this->getReference('Project3'));
        $manager -> persist ( $picture45 );

        $picture46 = new Picture();
        $picture46 ->setIsPrincipal(false);
        $picture46 ->setPath('image-29.jpg');
        $picture46 ->setProject($this->getReference('Project3'));
        $manager -> persist ( $picture46 );

        $picture47 = new Picture();
        $picture47 ->setIsPrincipal(false);
        $picture47 ->setPath('image-30.jpg');
        $picture47 ->setProject($this->getReference('Project3'));
        $manager -> persist ( $picture47 );

        $picture48 = new Picture();
        $picture48 ->setIsPrincipal(false);
        $picture48 ->setPath('image-31.jpg');
        $picture48 ->setProject($this->getReference('Project4'));
        $manager -> persist ( $picture48 );

        $picture49 = new Picture();
        $picture49 ->setIsPrincipal(false);
        $picture49 ->setPath('image-32.jpg');
        $picture49 ->setProject($this->getReference('Project4'));
        $manager -> persist ( $picture49 );

        $picture50 = new Picture();
        $picture50 ->setIsPrincipal(false);
        $picture50 ->setPath('image-33.jpg');
        $picture50 ->setProject($this->getReference('Project4'));
        $manager -> persist ( $picture50 );

        $picture51 = new Picture();
        $picture51 ->setIsPrincipal(false);
        $picture51 ->setPath('image-35.jpg');
        $picture51 ->setProject($this->getReference('Project5'));
        $manager -> persist ( $picture51 );

        $picture52 = new Picture();
        $picture52 ->setIsPrincipal(false);
        $picture52 ->setPath('image-36.jpg');
        $picture52 ->setProject($this->getReference('Project5'));
        $manager -> persist ( $picture52 );

        $picture53 = new Picture();
        $picture53 ->setIsPrincipal(false);
        $picture53 ->setPath('image-37.jpg');
        $picture53 ->setProject($this->getReference('Project5'));
        $manager -> persist ( $picture53 );

        $picture54 = new Picture();
        $picture54 ->setIsPrincipal(false);
        $picture54 ->setPath('image-38.jpg');
        $picture54 ->setProject($this->getReference('Project6'));
        $manager -> persist ( $picture54 );

        $picture55 = new Picture();
        $picture55 ->setIsPrincipal(false);
        $picture55 ->setPath('image-39.jpg');
        $picture55 ->setProject($this->getReference('Project6'));
        $manager -> persist ( $picture55 );

        $picture56 = new Picture();
        $picture56 ->setIsPrincipal(false);
        $picture56 ->setPath('image-40.jpg');
        $picture56 ->setProject($this->getReference('Project6'));
        $manager -> persist ( $picture56 );

        $picture57 = new Picture();
        $picture57 ->setIsPrincipal(false);
        $picture57 ->setPath('image-41.jpg');
        $picture57 ->setProject($this->getReference('Project7'));
        $manager -> persist ( $picture57 );

        $picture58 = new Picture();
        $picture58 ->setIsPrincipal(false);
        $picture58 ->setPath('image-42.jpg');
        $picture58 ->setProject($this->getReference('Project7'));
        $manager -> persist ( $picture58 );

        $picture59 = new Picture();
        $picture59 ->setIsPrincipal(false);
        $picture59 ->setPath('image-43.jpg');
        $picture59 ->setProject($this->getReference('Project7'));
        $manager -> persist ( $picture59 );

        $picture60 = new Picture();
        $picture60 ->setIsPrincipal(false);
        $picture60 ->setPath('image-44.jpg');
        $picture60 ->setProject($this->getReference('Project8'));
        $manager -> persist ( $picture60 );

        $picture61 = new Picture();
        $picture61 ->setIsPrincipal(false);
        $picture61 ->setPath('image-45.jpg');
        $picture61 ->setProject($this->getReference('Project8'));
        $manager -> persist ( $picture61 );

        $picture62 = new Picture();
        $picture62 ->setIsPrincipal(false);
        $picture62 ->setPath('image-46.jpg');
        $picture62 ->setProject($this->getReference('Project8'));
        $manager -> persist ( $picture62 );

        $picture63 = new Picture();
        $picture63 ->setIsPrincipal(false);
        $picture63 ->setPath('image-47.jpg');
        $picture63 ->setProject($this->getReference('Project9'));
        $manager -> persist ( $picture63 );

        $picture64 = new Picture();
        $picture64 ->setIsPrincipal(false);
        $picture64 ->setPath('image-48.jpg');
        $picture64 ->setProject($this->getReference('Project9'));
        $manager -> persist ( $picture64 );

        $picture65 = new Picture();
        $picture65 ->setIsPrincipal(false);
        $picture65 ->setPath('image-49.jpg');
        $picture65 ->setProject($this->getReference('Project9'));
        $manager -> persist ( $picture65 );

        $picture66 = new Picture();
        $picture66 ->setIsPrincipal(false);
        $picture66 ->setPath('image-50.jpg');
        $picture66 ->setProject($this->getReference('Project10'));
        $manager -> persist ( $picture66 );

        $picture67 = new Picture();
        $picture67 ->setIsPrincipal(false);
        $picture67 ->setPath('image-51.jpg');
        $picture67 ->setProject($this->getReference('Project10'));
        $manager -> persist ( $picture67 );

        $picture67 = new Picture();
        $picture67 ->setIsPrincipal(false);
        $picture67 ->setPath('image-52.jpg');
        $picture67 ->setProject($this->getReference('Project10'));
        $manager -> persist ( $picture67 );

        $picture68 = new Picture();
        $picture68 ->setIsPrincipal(false);
        $picture68 ->setPath('image-53.jpg');
        $picture68 ->setProject($this->getReference('Project11'));
        $manager -> persist ( $picture68 );

        $picture69 = new Picture();
        $picture69 ->setIsPrincipal(false);
        $picture69 ->setPath('image-54.jpg');
        $picture69 ->setProject($this->getReference('Project11'));
        $manager -> persist ( $picture69 );

        $picture70 = new Picture();
        $picture70 ->setIsPrincipal(false);
        $picture70 ->setPath('image-55.jpg');
        $picture70 ->setProject($this->getReference('Project11'));
        $manager -> persist ( $picture70 );

        $picture71 = new Picture();
        $picture71 ->setIsPrincipal(false);
        $picture71 ->setPath('image-56.jpg');
        $picture71 ->setProject($this->getReference('Project12'));
        $manager -> persist ( $picture71 );

        $picture72 = new Picture();
        $picture72 ->setIsPrincipal(false);
        $picture72 ->setPath('image-57.jpg');
        $picture72 ->setProject($this->getReference('Project12'));
        $manager -> persist ( $picture72 );

        $picture73 = new Picture();
        $picture73 ->setIsPrincipal(false);
        $picture73 ->setPath('image-58.jpg');
        $picture73 ->setProject($this->getReference('Project12'));
        $manager -> persist ( $picture73 );

        $picture74 = new Picture();
        $picture74 ->setIsPrincipal(false);
        $picture74 ->setPath('image-59.jpg');
        $picture74 ->setProject($this->getReference('Project13'));
        $manager -> persist ( $picture74 );

        $picture75 = new Picture();
        $picture75 ->setIsPrincipal(false);
        $picture75 ->setPath('image-60.jpg');
        $picture75 ->setProject($this->getReference('Project13'));
        $manager -> persist ( $picture75 );

        $picture76 = new Picture();
        $picture76 ->setIsPrincipal(false);
        $picture76 ->setPath('image-61.jpg');
        $picture76 ->setProject($this->getReference('Project13'));
        $manager -> persist ( $picture76 );

        $picture77 = new Picture();
        $picture77 ->setIsPrincipal(false);
        $picture77 ->setPath('image-62.jpg');
        $picture77 ->setProject($this->getReference('Project14'));
        $manager -> persist ( $picture77 );

        $picture78 = new Picture();
        $picture78 ->setIsPrincipal(false);
        $picture78 ->setPath('image-63.jpg');
        $picture78 ->setProject($this->getReference('Project14'));
        $manager -> persist ( $picture78 );

        $picture79 = new Picture();
        $picture79 ->setIsPrincipal(false);
        $picture79 ->setPath('image-64.jpg');
        $picture79 ->setProject($this->getReference('Project14'));
        $manager -> persist ( $picture79 );

        $picture80 = new Picture();
        $picture80 ->setIsPrincipal(false);
        $picture80 ->setPath('image-65.jpg');
        $picture80 ->setProject($this->getReference('Project15'));
        $manager -> persist ( $picture80 );

        $picture81 = new Picture();
        $picture81 ->setIsPrincipal(false);
        $picture81 ->setPath('image-66.jpg');
        $picture81 ->setProject($this->getReference('Project15'));
        $manager -> persist ( $picture81 );

        $picture82 = new Picture();
        $picture82 ->setIsPrincipal(false);
        $picture82 ->setPath('image-67.jpg');
        $picture82 ->setProject($this->getReference('Project15'));
        $manager -> persist ( $picture82 );

        $picture83 = new Picture();
        $picture83 ->setIsPrincipal(false);
        $picture83 ->setPath('image-68.jpg');
        $picture83 ->setProject($this->getReference('Project16'));
        $manager -> persist ( $picture83 );

        $picture84 = new Picture();
        $picture84 ->setIsPrincipal(false);
        $picture84 ->setPath('image-69.jpg');
        $picture84 ->setProject($this->getReference('Project16'));
        $manager -> persist ( $picture84 );

        $picture85 = new Picture();
        $picture85 ->setIsPrincipal(false);
        $picture85 ->setPath('image-70.jpg');
        $picture85 ->setProject($this->getReference('Project16'));
        $manager -> persist ( $picture85 );

        $picture86 = new Picture();
        $picture86 ->setIsPrincipal(false);
        $picture86 ->setPath('image-71.jpg');
        $picture86 ->setProject($this->getReference('Project17'));
        $manager -> persist ( $picture86 );

        $picture87 = new Picture();
        $picture87 ->setIsPrincipal(false);
        $picture87 ->setPath('image-72.jpg');
        $picture87 ->setProject($this->getReference('Project17'));
        $manager -> persist ( $picture87 );

        $picture88 = new Picture();
        $picture88 ->setIsPrincipal(false);
        $picture88 ->setPath('image-73.jpg');
        $picture88 ->setProject($this->getReference('Project17'));
        $manager -> persist ( $picture88 );

        $picture89 = new Picture();
        $picture89 ->setIsPrincipal(false);
        $picture89 ->setPath('image-74.jpg');
        $picture89 ->setProject($this->getReference('Project18'));
        $manager -> persist ( $picture89 );

        $picture90 = new Picture();
        $picture90 ->setIsPrincipal(false);
        $picture90 ->setPath('image-75.jpg');
        $picture90 ->setProject($this->getReference('Project18'));
        $manager -> persist ( $picture90 );

        $picture91 = new Picture();
        $picture91 ->setIsPrincipal(false);
        $picture91 ->setPath('image-76.jpg');
        $picture91 ->setProject($this->getReference('Project18'));
        $manager -> persist ( $picture91 );

        $picture92 = new Picture();
        $picture92 ->setIsPrincipal(false);
        $picture92 ->setPath('image-77.jpg');
        $picture92 ->setProject($this->getReference('Project25'));
        $manager -> persist ( $picture92 );

        $picture93 = new Picture();
        $picture93 ->setIsPrincipal(false);
        $picture93 ->setPath('image-78.jpg');
        $picture93 ->setProject($this->getReference('Project25'));
        $manager -> persist ( $picture93 );

        $picture94 = new Picture();
        $picture94 ->setIsPrincipal(false);
        $picture94 ->setPath('image-79.jpg');
        $picture94 ->setProject($this->getReference('Project25'));
        $manager -> persist ( $picture94 );

        $picture95 = new Picture();
        $picture95 ->setIsPrincipal(false);
        $picture95 ->setPath('image-80.jpg');
        $picture95 ->setProject($this->getReference('Project20'));
        $manager -> persist ( $picture95 );

        $picture96 = new Picture();
        $picture96 ->setIsPrincipal(false);
        $picture96 ->setPath('image-81.jpg');
        $picture96 ->setProject($this->getReference('Project20'));
        $manager -> persist ( $picture96 );

        $picture97 = new Picture();
        $picture97 ->setIsPrincipal(false);
        $picture97 ->setPath('image-82.jpg');
        $picture97 ->setProject($this->getReference('Project20'));
        $manager -> persist ( $picture97 );

        $picture98 = new Picture();
        $picture98 ->setIsPrincipal(false);
        $picture98 ->setPath('image-83.jpg');
        $picture98 ->setProject($this->getReference('Project21'));
        $manager -> persist ( $picture98 );

        $picture99 = new Picture();
        $picture99 ->setIsPrincipal(false);
        $picture99 ->setPath('image-84.jpg');
        $picture99 ->setProject($this->getReference('Project21'));
        $manager -> persist ( $picture99 );

        $picture100 = new Picture();
        $picture100 ->setIsPrincipal(false);
        $picture100 ->setPath('image-85.jpg');
        $picture100 ->setProject($this->getReference('Project21'));
        $manager -> persist ( $picture100 );

        $picture101 = new Picture();
        $picture101 ->setIsPrincipal(false);
        $picture101 ->setPath('image-86.jpg');
        $picture101 ->setProject($this->getReference('Project22'));
        $manager -> persist ( $picture101 );

        $picture102 = new Picture();
        $picture102 ->setIsPrincipal(false);
        $picture102 ->setPath('image-87.jpg');
        $picture102 ->setProject($this->getReference('Project22'));
        $manager -> persist ( $picture102 );

        $picture103 = new Picture();
        $picture103 ->setIsPrincipal(false);
        $picture103 ->setPath('image-88.jpg');
        $picture103 ->setProject($this->getReference('Project22'));
        $manager -> persist ( $picture103 );

        $manager -> flush ();





    }


    public function getOrder ()
    {

        return 12 ;
    }
}

