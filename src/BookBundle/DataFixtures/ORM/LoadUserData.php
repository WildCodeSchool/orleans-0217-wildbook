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
        $superadmin = new User ();
        $superadmin -> setUsername('superadmin');
        $superadmin -> setUsernameCanonical('superadmin');
        $superadmin -> setEmail ('superadmin.test@gmail.com');
        $superadmin -> setEmailCanonical('superadmin.test@gmail.com');
        $superadmin -> setEnabled(true);
        $superadmin -> setPassword ('5GYblLjLYwZOnjp5gS3KxA3RZEiof3FDjzkOJVH');
        $superadmin -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $superadmin -> setRoles([0 =>'ROLE_ADMIN', 1 =>'ROLE_SUPER_ADMIN']);
        $manager -> persist ( $superadmin );

        $admin = new User ();
        $admin -> setUsername('admin');
        $admin -> setUsernameCanonical('admin');
        $admin -> setEmail ('admin.test@gmail.com');
        $admin -> setEmailCanonical('admin.test@gmail.com');
        $admin -> setEnabled(true);
        $admin -> setPassword ('$2y$13$jlRKwEk8Ud5aUCaiqUZ4IePGFzWfqwaFDg.G8X2hZmmwexBNoX/Su');
        $admin -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $admin -> setRoles([0 =>'ROLE_ADMIN']);
        $admin -> setCampusManager($this->getReference('Camp2'));
        $manager -> persist ( $admin );

        $user = new User ();
        $user -> setUsername('user1');
        $user -> setUsernameCanonical('user1');
        $user -> setEmail ('user1.test@gmail.com');
        $user -> setEmailCanonical('user2.test@gmail.com');
        $user -> setEnabled(true);
        $user -> setPassword ('7VEX5zLPQofmXaI7pJ9FsekkvPCEMpix81tJFUEIocOQMZqxqFtsu');
        $user -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user -> setRoles([]);
        $user -> setWilder($this->getReference('Wilder1'));
        $manager -> persist ( $user );

        $user = new User ();
        $user -> setUsername('user2');
        $user -> setUsernameCanonical('user2');
        $user -> setEmail ('user2.test@gmail.com');
        $user -> setEmailCanonical('user2.test@gmail.com');
        $user -> setEnabled(true);
        $user -> setPassword ('7VEX5zLPQofmXaI7pJ9FsekkvPCEMpix81tJFUEIocOQMZqxqFtsu');
        $user -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user -> setRoles([]);
        $user -> setWilder($this->getReference('Wilder4'));
        $manager -> persist ( $user );

        $user = new User ();
        $user -> setUsername('user3');
        $user -> setUsernameCanonical('user3');
        $user -> setEmail ('user3.test@gmail.com');
        $user -> setEmailCanonical('user3.test@gmail.com');
        $user -> setEnabled(true);
        $user -> setPassword ('7VEX5zLPQofmXaI7pJ9FsekkvPCEMpix81tJFUEIocOQMZqxqFtsu');
        $user -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user -> setRoles([]);
        $user -> setWilder($this->getReference('Wilder5'));
        $manager -> persist ( $user );

        $manager -> flush ();
    }

    public function getOrder ()
    {

        return 13 ;
    }
}