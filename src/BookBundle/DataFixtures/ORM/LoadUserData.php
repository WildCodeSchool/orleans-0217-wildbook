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
use BookBundle\Entity\User ;


class LoadUserData  extends AbstractFixture implements OrderedFixtureInterface
{
    public function load ( ObjectManager $manager )
    {
        $superadmin1 = new User ();
        $superadmin1 -> setUsername('super1');
        $superadmin1 -> setUsernameCanonical('super1');
        $superadmin1 -> setEmail ('superadmin1@gmail.com');
        $superadmin1 -> setEmailCanonical('superadmin1@gmail.com');
        $superadmin1 -> setEnabled(true);
        $superadmin1 -> setPassword ('$2y$13$fF1EE0x0h7nu9Jqmqi23ke8w8T/dYb9cw.NS4lFWaxjuV0bfLFqhS');
        $superadmin1 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $superadmin1 -> setRoles([0 =>'ROLE_ADMIN', 1 =>'ROLE_SUPER_ADMIN']);
        $manager -> persist ( $superadmin1 );

        $manager -> flush ();
    }

    public function getOrder ()
    {

        return 14 ;
    }
}