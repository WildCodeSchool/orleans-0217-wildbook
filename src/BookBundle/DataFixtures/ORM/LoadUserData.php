<?php
/**
 * Created by PhpStorm.
 * User: biovor
 * Date: 29/05/17
 * Time: 14:54
 */

namespace BookBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface ;
use Doctrine\Common\Persistence\ObjectManager ;
use BookBundle\Entity\User ;


class LoadUserData  implements FixtureInterface
{
    public function load ( ObjectManager $manager )
    {
        $userAdmin = new User ();
        $userAdmin -> setUsername ( 'superadmin' );
        $userAdmin -> setPassword ( 'superadmin' );
        $userAdmin -> setEmail ( 'superadmin.test@gmail.com' );

        $manager -> persist ( $userAdmin );

        $userAdmin = new User ();
        $userAdmin -> setUsername ( 'admin' );
        $userAdmin -> setPassword ( 'admin' );
        $userAdmin -> setEmail ( 'admin.test@gmail.com' );

        $manager -> persist ( $userAdmin );

        $userAdmin = new User ();
        $userAdmin -> setUsername ( 'user' );
        $userAdmin -> setPassword ( 'user' );
        $userAdmin -> setEmail ( 'user.test@gmail.com' );

        $manager -> persist ( $userAdmin );

        $manager -> flush ();
    }
}