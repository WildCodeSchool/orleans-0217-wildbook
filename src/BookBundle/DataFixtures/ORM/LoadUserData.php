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
        $superadmin1 -> setPromotion('wcs');
        $manager -> persist ( $superadmin1 );

        $superadmin2 = new User ();
        $superadmin2 -> setUsername('super2');
        $superadmin2 -> setUsernameCanonical('super2');
        $superadmin2 -> setEmail ('superadmin2@gmail.com');
        $superadmin2 -> setEmailCanonical('superadmin2@gmail.com');
        $superadmin2 -> setEnabled(true);
        $superadmin2 -> setPassword ('$2y$13$fF1EE0x0h7nu9Jqmqi23ke8w8T/dYb9cw.NS4lFWaxjuV0bfLFqhS');
        $superadmin2 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $superadmin2 -> setRoles([0 =>'ROLE_ADMIN', 1 =>'ROLE_SUPER_ADMIN']);
        $superadmin2 -> setPromotion('wcs');
        $manager -> persist ( $superadmin2 );

        $admin1 = new User ();
        $admin1 -> setUsername('camp1');
        $admin1 -> setUsernameCanonical('camp1');
        $admin1 -> setEmail ('camp1@gmail.com');
        $admin1 -> setEmailCanonical('camp1@gmail.com');
        $admin1 -> setEnabled(true);
        $admin1 -> setPassword ('$2y$13$jlRKwEk8Ud5aUCaiqUZ4IePGFzWfqwaFDg.G8X2hZmmwexBNoX/Su');
        $admin1 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $admin1 -> setRoles([0 =>'ROLE_ADMIN']);
        $admin1 -> setPromotion('wcs');
        $manager -> persist ( $admin1 );
        $this->addReference('admin1', $admin1 );

        $admin2 = new User ();
        $admin2 -> setUsername('camp2');
        $admin2 -> setUsernameCanonical('camp2');
        $admin2 -> setEmail ('camp2@gmail.com');
        $admin2 -> setEmailCanonical('camp2@gmail.com');
        $admin2 -> setEnabled(true);
        $admin2 -> setPassword ('$2y$13$jlRKwEk8Ud5aUCaiqUZ4IePGFzWfqwaFDg.G8X2hZmmwexBNoX/Su');
        $admin2 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $admin2 -> setRoles([0 =>'ROLE_ADMIN']);
        $admin2 -> setPromotion('wcs');
        $manager -> persist ( $admin2 );
        $this->addReference('admin2', $admin2 );

        $admin3 = new User ();
        $admin3 -> setUsername('camp3');
        $admin3 -> setUsernameCanonical('camp3');
        $admin3 -> setEmail ('camp3@gmail.com');
        $admin3 -> setEmailCanonical('camp3@gmail.com');
        $admin3 -> setEnabled(true);
        $admin3 -> setPassword ('$2y$13$jlRKwEk8Ud5aUCaiqUZ4IePGFzWfqwaFDg.G8X2hZmmwexBNoX/Su');
        $admin3 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $admin3 -> setRoles([0 =>'ROLE_ADMIN']);
        $admin3 -> setPromotion('wcs');
        $manager -> persist ( $admin3 );
        $this->addReference('admin3', $admin3 );

        $admin4 = new User ();
        $admin4 -> setUsername('camp4');
        $admin4 -> setUsernameCanonical('camp4');
        $admin4 -> setEmail ('camp4@gmail.com');
        $admin4 -> setEmailCanonical('camp4@gmail.com');
        $admin4 -> setEnabled(true);
        $admin4 -> setPassword ('$2y$13$jlRKwEk8Ud5aUCaiqUZ4IePGFzWfqwaFDg.G8X2hZmmwexBNoX/Su');
        $admin4 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $admin4 -> setRoles([0 =>'ROLE_ADMIN']);
        $manager -> persist ( $admin4 );
        $this->addReference('admin4', $admin4 );

        $admin5 = new User ();
        $admin5 -> setUsername('camp5');
        $admin5 -> setUsernameCanonical('camp5');
        $admin5 -> setEmail ('camp5@gmail.com');
        $admin5 -> setEmailCanonical('camp5@gmail.com');
        $admin5 -> setEnabled(true);
        $admin5 -> setPassword ('$2y$13$jlRKwEk8Ud5aUCaiqUZ4IePGFzWfqwaFDg.G8X2hZmmwexBNoX/Su');
        $admin5 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $admin5 -> setRoles([0 =>'ROLE_ADMIN']);
        $manager -> persist ( $admin5 );
        $this->addReference('admin5', $admin5 );

        $admin6 = new User ();
        $admin6 -> setUsername('camp6');
        $admin6 -> setUsernameCanonical('camp6');
        $admin6 -> setEmail ('camp6@gmail.com');
        $admin6 -> setEmailCanonical('camp6@gmail.com');
        $admin6 -> setEnabled(true);
        $admin6 -> setPassword ('$2y$13$jlRKwEk8Ud5aUCaiqUZ4IePGFzWfqwaFDg.G8X2hZmmwexBNoX/Su');
        $admin6 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $admin6 -> setRoles([0 =>'ROLE_ADMIN']);
        $manager -> persist ( $admin6 );
        $this->addReference('admin6', $admin6 );

        $admin7 = new User ();
        $admin7 -> setUsername('camp7');
        $admin7 -> setUsernameCanonical('camp7');
        $admin7 -> setEmail ('camp7@gmail.com');
        $admin7 -> setEmailCanonical('camp7@gmail.com');
        $admin7 -> setEnabled(true);
        $admin7 -> setPassword ('$2y$13$jlRKwEk8Ud5aUCaiqUZ4IePGFzWfqwaFDg.G8X2hZmmwexBNoX/Su');
        $admin7 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $admin7 -> setRoles([0 =>'ROLE_ADMIN']);
        $manager -> persist ( $admin7 );
        $this->addReference('admin7', $admin7 );

        $admin8 = new User ();
        $admin8 -> setUsername('camp8');
        $admin8 -> setUsernameCanonical('camp8');
        $admin8 -> setEmail ('camp8@gmail.com');
        $admin8 -> setEmailCanonical('camp8@gmail.com');
        $admin8 -> setEnabled(true);
        $admin8 -> setPassword ('$2y$13$jlRKwEk8Ud5aUCaiqUZ4IePGFzWfqwaFDg.G8X2hZmmwexBNoX/Su');
        $admin8 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $admin8 -> setRoles([0 =>'ROLE_ADMIN']);
        $manager -> persist ( $admin8 );
        $this->addReference('admin8', $admin8 );

        $admin9 = new User ();
        $admin9 -> setUsername('camp9');
        $admin9 -> setUsernameCanonical('camp9');
        $admin9 -> setEmail ('camp9@gmail.com');
        $admin9 -> setEmailCanonical('camp9@gmail.com');
        $admin9 -> setEnabled(true);
        $admin9 -> setPassword ('$2y$13$jlRKwEk8Ud5aUCaiqUZ4IePGFzWfqwaFDg.G8X2hZmmwexBNoX/Su');
        $admin9 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $admin9 -> setRoles([0 =>'ROLE_ADMIN']);
        $manager -> persist ( $admin9 );
        $this->addReference('admin9', $admin9 );

        $user1 = new User ();
        $user1 -> setUsername('wilder1');
        $user1 -> setUsernameCanonical('wilder1');
        $user1 -> setEmail ('wilder1@gmail.com');
        $user1 -> setEmailCanonical('wilder1@gmail.com');
        $user1 -> setEnabled(true);
        $user1 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user1 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user1 -> setRoles([]);
        $manager -> persist ( $user1 );
        $this->addReference('user1', $user1 );

        $user2 = new User ();
        $user2 -> setUsername('wilder2');
        $user2 -> setUsernameCanonical('wilder2');
        $user2 -> setEmail ('wilder2@gmail.com');
        $user2 -> setEmailCanonical('wilder2@gmail.com');
        $user2 -> setEnabled(true);
        $user2 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user2 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user2 -> setRoles([]);
        $manager -> persist ( $user2 );
        $this->addReference('user2', $user2 );

        $user3 = new User ();
        $user3 -> setUsername('wilder3');
        $user3 -> setUsernameCanonical('wilder3');
        $user3 -> setEmail ('wilder3@gmail.com');
        $user3 -> setEmailCanonical('wilder3@gmail.com');
        $user3 -> setEnabled(true);
        $user3 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user3 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user3 -> setRoles([]);
        $manager -> persist ( $user3 );
        $this->addReference('user3', $user3 );

        $user4 = new User ();
        $user4 -> setUsername('wilder4');
        $user4 -> setUsernameCanonical('wilder4');
        $user4 -> setEmail ('wilder4@gmail.com');
        $user4 -> setEmailCanonical('wilder4@gmail.com');
        $user4 -> setEnabled(true);
        $user4 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user4 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user4 -> setRoles([]);
        $manager -> persist ( $user4 );
        $this->addReference('user4', $user4 );

        $user5 = new User ();
        $user5 -> setUsername('wilder5');
        $user5 -> setUsernameCanonical('wilder5');
        $user5 -> setEmail ('wilder5@gmail.com');
        $user5 -> setEmailCanonical('wilder5@gmail.com');
        $user5 -> setEnabled(true);
        $user5 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user5 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user5 -> setRoles([]);
        $manager -> persist ( $user5 );
        $this->addReference('user5', $user5 );

        $user6 = new User ();
        $user6 -> setUsername('wilder6');
        $user6 -> setUsernameCanonical('wilder6');
        $user6 -> setEmail ('wilder6@gmail.com');
        $user6 -> setEmailCanonical('wilder6@gmail.com');
        $user6 -> setEnabled(true);
        $user6 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user6 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user6 -> setRoles([]);
        $manager -> persist ( $user6 );
        $this->addReference('user6', $user6 );

        $user7 = new User ();
        $user7 -> setUsername('wilder7');
        $user7 -> setUsernameCanonical('wilder7');
        $user7 -> setEmail ('wilder7@gmail.com');
        $user7 -> setEmailCanonical('wilder7@gmail.com');
        $user7 -> setEnabled(true);
        $user7 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user7 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user7 -> setRoles([]);
        $manager -> persist ( $user7 );
        $this->addReference('user7', $user7 );

        $user8 = new User ();
        $user8 -> setUsername('wilder8');
        $user8 -> setUsernameCanonical('wilder8');
        $user8 -> setEmail ('wilder8@gmail.com');
        $user8 -> setEmailCanonical('wilder8@gmail.com');
        $user8 -> setEnabled(true);
        $user8 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user8 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user8 -> setRoles([]);
        $manager -> persist ( $user8 );
        $this->addReference('user8', $user8 );

        $user9 = new User ();
        $user9 -> setUsername('wilder9');
        $user9 -> setUsernameCanonical('wilder9');
        $user9 -> setEmail ('wilder9@gmail.com');
        $user9 -> setEmailCanonical('wilder9@gmail.com');
        $user9 -> setEnabled(true);
        $user9 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user9 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user9 -> setRoles([]);
        $manager -> persist ( $user9 );
        $this->addReference('user9', $user9 );

        $user10 = new User ();
        $user10 -> setUsername('wilder10');
        $user10 -> setUsernameCanonical('wilder10');
        $user10 -> setEmail ('wilder10@gmail.com');
        $user10 -> setEmailCanonical('wilder10@gmail.com');
        $user10 -> setEnabled(true);
        $user10 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user10 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user10 -> setRoles([]);
        $manager -> persist ( $user10 );
        $this->addReference('user10', $user10 );

        $user11 = new User ();
        $user11 -> setUsername('wilder11');
        $user11 -> setUsernameCanonical('wilder11');
        $user11 -> setEmail ('wilder11@gmail.com');
        $user11 -> setEmailCanonical('wilder11@gmail.com');
        $user11 -> setEnabled(true);
        $user11 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user11 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user11 -> setRoles([]);
        $manager -> persist ( $user11 );
        $this->addReference('user11', $user11 );

        $user12 = new User ();
        $user12 -> setUsername('wilder12');
        $user12 -> setUsernameCanonical('wilder12');
        $user12 -> setEmail ('wilder12@gmail.com');
        $user12 -> setEmailCanonical('wilder12@gmail.com');
        $user12 -> setEnabled(true);
        $user12 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user12 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user12 -> setRoles([]);
        $manager -> persist ( $user12 );
        $this->addReference('user12', $user12 );

        $user13 = new User ();
        $user13 -> setUsername('wilder13');
        $user13 -> setUsernameCanonical('wilder13');
        $user13 -> setEmail ('wilder13@gmail.com');
        $user13 -> setEmailCanonical('wilder13@gmail.com');
        $user13 -> setEnabled(true);
        $user13 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user13 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user13 -> setRoles([]);
        $manager -> persist ( $user13 );
        $this->addReference('user13', $user13 );

        $user14 = new User ();
        $user14 -> setUsername('wilder14');
        $user14 -> setUsernameCanonical('wilder14');
        $user14 -> setEmail ('wilder14@gmail.com');
        $user14 -> setEmailCanonical('wilder14@gmail.com');
        $user14 -> setEnabled(true);
        $user14 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user14 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user14 -> setRoles([]);
        $manager -> persist ( $user14 );
        $this->addReference('user14', $user14 );

        $user15 = new User ();
        $user15 -> setUsername('wilder15');
        $user15 -> setUsernameCanonical('wilder15');
        $user15 -> setEmail ('wilder15@gmail.com');
        $user15 -> setEmailCanonical('wilder15@gmail.com');
        $user15 -> setEnabled(true);
        $user15 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user15 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user15 -> setRoles([]);
        $manager -> persist ( $user15 );
        $this->addReference('user15', $user15 );

        $user16 = new User ();
        $user16 -> setUsername('wilder16');
        $user16 -> setUsernameCanonical('wilder16');
        $user16 -> setEmail ('wilder16@gmail.com');
        $user16 -> setEmailCanonical('wilder16@gmail.com');
        $user16 -> setEnabled(true);
        $user16 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user16 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user16 -> setRoles([]);
        $manager -> persist ( $user16 );
        $this->addReference('user16', $user16 );

        $user17 = new User ();
        $user17 -> setUsername('wilder17');
        $user17 -> setUsernameCanonical('wilder17');
        $user17 -> setEmail ('wilder17@gmail.com');
        $user17 -> setEmailCanonical('wilder17@gmail.com');
        $user17 -> setEnabled(true);
        $user17 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user17 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user17 -> setRoles([]);
        $manager -> persist ( $user17 );
        $this->addReference('user17', $user17 );

        $user18 = new User ();
        $user18 -> setUsername('wilder18');
        $user18 -> setUsernameCanonical('wilder18');
        $user18 -> setEmail ('wilder18@gmail.com');
        $user18 -> setEmailCanonical('wilder18@gmail.com');
        $user18 -> setEnabled(true);
        $user18 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user18 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user18 -> setRoles([]);
        $manager -> persist ( $user18 );
        $this->addReference('user18', $user18 );

        $user19 = new User ();
        $user19 -> setUsername('wilder19');
        $user19 -> setUsernameCanonical('wilder19');
        $user19 -> setEmail ('wilder19@gmail.com');
        $user19 -> setEmailCanonical('wilder19@gmail.com');
        $user19 -> setEnabled(true);
        $user19 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user19 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user19 -> setRoles([]);
        $manager -> persist ( $user19 );
        $this->addReference('user19', $user19 );

        $user20 = new User ();
        $user20 -> setUsername('wilder20');
        $user20 -> setUsernameCanonical('wilder20');
        $user20 -> setEmail ('wilder20@gmail.com');
        $user20 -> setEmailCanonical('wilder20@gmail.com');
        $user20 -> setEnabled(true);
        $user20 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user20 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user20 -> setRoles([]);
        $manager -> persist ( $user20 );
        $this->addReference('user20', $user20 );

        $user21 = new User ();
        $user21 -> setUsername('wilder21');
        $user21 -> setUsernameCanonical('wilder21');
        $user21 -> setEmail ('wilder21@gmail.com');
        $user21 -> setEmailCanonical('wilder21@gmail.com');
        $user21 -> setEnabled(true);
        $user21 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user21 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user21 -> setRoles([]);
        $manager -> persist ( $user21 );
        $this->addReference('user21', $user21 );

        $user22 = new User ();
        $user22 -> setUsername('wilder22');
        $user22 -> setUsernameCanonical('wilder22');
        $user22 -> setEmail ('wilder22@gmail.com');
        $user22 -> setEmailCanonical('wilder22@gmail.com');
        $user22 -> setEnabled(true);
        $user22 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user22 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user22 -> setRoles([]);
        $manager -> persist ( $user22 );
        $this->addReference('user22', $user22 );

        $user23 = new User ();
        $user23 -> setUsername('wilder23');
        $user23 -> setUsernameCanonical('wilder23');
        $user23 -> setEmail ('wilder23@gmail.com');
        $user23 -> setEmailCanonical('wilder23@gmail.com');
        $user23 -> setEnabled(true);
        $user23 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user23 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user23 -> setRoles([]);
        $manager -> persist ( $user23 );
        $this->addReference('user23', $user23 );

        $user24 = new User ();
        $user24 -> setUsername('wilder24');
        $user24 -> setUsernameCanonical('wilder24');
        $user24 -> setEmail ('wilder24@gmail.com');
        $user24 -> setEmailCanonical('wilder24@gmail.com');
        $user24 -> setEnabled(true);
        $user24 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user24 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user24 -> setRoles([]);
        $manager -> persist ( $user24 );
        $this->addReference('user24', $user24 );

        $user25 = new User ();
        $user25 -> setUsername('wilder25');
        $user25 -> setUsernameCanonical('wilder25');
        $user25 -> setEmail ('wilder25@gmail.com');
        $user25 -> setEmailCanonical('wilder25@gmail.com');
        $user25 -> setEnabled(true);
        $user25 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user25 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user25 -> setRoles([]);
        $manager -> persist ( $user25 );
        $this->addReference('user25', $user25 );

        $user26 = new User ();
        $user26 -> setUsername('wilder26');
        $user26 -> setUsernameCanonical('wilder26');
        $user26 -> setEmail ('wilder26@gmail.com');
        $user26 -> setEmailCanonical('wilder26@gmail.com');
        $user26 -> setEnabled(true);
        $user26 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user26 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user26 -> setRoles([]);
        $manager -> persist ( $user26 );
        $this->addReference('user26', $user26 );

        $user27 = new User ();
        $user27 -> setUsername('wilder27');
        $user27 -> setUsernameCanonical('wilder27');
        $user27 -> setEmail ('wilder27@gmail.com');
        $user27 -> setEmailCanonical('wilder27@gmail.com');
        $user27 -> setEnabled(true);
        $user27 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user27 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user27 -> setRoles([]);
        $manager -> persist ( $user27 );
        $this->addReference('user27', $user27 );

        $user28 = new User ();
        $user28 -> setUsername('wilder28');
        $user28 -> setUsernameCanonical('wilder28');
        $user28 -> setEmail ('wilder28@gmail.com');
        $user28 -> setEmailCanonical('wilder28@gmail.com');
        $user28 -> setEnabled(true);
        $user28 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user28 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user28 -> setRoles([]);
        $manager -> persist ( $user28 );
        $this->addReference('user28', $user28 );

        $user29 = new User ();
        $user29 -> setUsername('wilder29');
        $user29 -> setUsernameCanonical('wilder29');
        $user29 -> setEmail ('wilder29@gmail.com');
        $user29 -> setEmailCanonical('wilder29@gmail.com');
        $user29 -> setEnabled(true);
        $user29 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user29 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user29 -> setRoles([]);
        $manager -> persist ( $user29 );
        $this->addReference('user29', $user29 );

        $user30 = new User ();
        $user30 -> setUsername('wilder30');
        $user30 -> setUsernameCanonical('wilder30');
        $user30 -> setEmail ('wilder30@gmail.com');
        $user30 -> setEmailCanonical('wilder31@gmail.com');
        $user30 -> setEnabled(true);
        $user30 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user30 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user30 -> setRoles([]);
        $manager -> persist ( $user30 );
        $this->addReference('user30', $user30 );

        $user31 = new User ();
        $user31 -> setUsername('wilder31');
        $user31 -> setUsernameCanonical('wilder31');
        $user31 -> setEmail ('wilder31@gmail.com');
        $user31 -> setEmailCanonical('wilder31@gmail.com');
        $user31 -> setEnabled(true);
        $user31 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user31 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user31 -> setRoles([]);
        $manager -> persist ( $user31 );
        $this->addReference('user31', $user31 );

        $user32 = new User ();
        $user32 -> setUsername('wilder32');
        $user32 -> setUsernameCanonical('wilder32');
        $user32 -> setEmail ('wilder32@gmail.com');
        $user32 -> setEmailCanonical('wilder32@gmail.com');
        $user32 -> setEnabled(true);
        $user32 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user32 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user32 -> setRoles([]);
        $manager -> persist ( $user32 );
        $this->addReference('user32', $user32 );

        $user33 = new User ();
        $user33 -> setUsername('wilder33');
        $user33 -> setUsernameCanonical('wilder33');
        $user33 -> setEmail ('wilder33@gmail.com');
        $user33 -> setEmailCanonical('wilder33@gmail.com');
        $user33 -> setEnabled(true);
        $user33 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user33 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user33 -> setRoles([]);
        $manager -> persist ( $user33 );
        $this->addReference('user33', $user33 );

        $user34 = new User ();
        $user34 -> setUsername('wilder34');
        $user34 -> setUsernameCanonical('wilder34');
        $user34 -> setEmail ('wilder34@gmail.com');
        $user34 -> setEmailCanonical('wilder34@gmail.com');
        $user34 -> setEnabled(true);
        $user34 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user34 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user34 -> setRoles([]);
        $manager -> persist ( $user34 );
        $this->addReference('user34', $user34 );

        $user35 = new User ();
        $user35 -> setUsername('wilder35');
        $user35 -> setUsernameCanonical('wilder35');
        $user35 -> setEmail ('wilder35@gmail.com');
        $user35 -> setEmailCanonical('wilder35@gmail.com');
        $user35 -> setEnabled(true);
        $user35 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user35 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user35 -> setRoles([]);
        $manager -> persist ( $user35 );
        $this->addReference('user35', $user35 );

        $user36 = new User ();
        $user36 -> setUsername('wilder36');
        $user36 -> setUsernameCanonical('wilder36');
        $user36 -> setEmail ('wilder36@gmail.com');
        $user36 -> setEmailCanonical('wilder36@gmail.com');
        $user36 -> setEnabled(true);
        $user36 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user36 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user36 -> setRoles([]);
        $manager -> persist ( $user36 );
        $this->addReference('user36', $user36 );

        $user37 = new User ();
        $user37 -> setUsername('wilder37');
        $user37 -> setUsernameCanonical('wilder37');
        $user37 -> setEmail ('wilder37@gmail.com');
        $user37 -> setEmailCanonical('wilder37@gmail.com');
        $user37 -> setEnabled(true);
        $user37 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user37 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user37 -> setRoles([]);
        $manager -> persist ( $user37 );
        $this->addReference('user37', $user37 );

        $user38 = new User ();
        $user38 -> setUsername('wilder38');
        $user38 -> setUsernameCanonical('wilder38');
        $user38 -> setEmail ('wilder38@gmail.com');
        $user38 -> setEmailCanonical('wilder38@gmail.com');
        $user38 -> setEnabled(true);
        $user38 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user38 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user38 -> setRoles([]);
        $manager -> persist ( $user38 );
        $this->addReference('user38', $user38 );

        $user39 = new User ();
        $user39 -> setUsername('wilder39');
        $user39 -> setUsernameCanonical('wilder39');
        $user39 -> setEmail ('wilder39@gmail.com');
        $user39 -> setEmailCanonical('wilder39@gmail.com');
        $user39 -> setEnabled(true);
        $user39 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user39 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user39 -> setRoles([]);
        $manager -> persist ( $user39 );
        $this->addReference('user39', $user39 );

        $user40 = new User ();
        $user40 -> setUsername('wilder40');
        $user40 -> setUsernameCanonical('wilder40');
        $user40 -> setEmail ('wilder40@gmail.com');
        $user40 -> setEmailCanonical('wilder40@gmail.com');
        $user40 -> setEnabled(true);
        $user40 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user40 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user40 -> setRoles([]);
        $manager -> persist ( $user40 );
        $this->addReference('user40', $user40 );

        $user41 = new User ();
        $user41 -> setUsername('wilder41');
        $user41 -> setUsernameCanonical('wilder41');
        $user41 -> setEmail ('wilder41@gmail.com');
        $user41 -> setEmailCanonical('wilder41@gmail.com');
        $user41 -> setEnabled(true);
        $user41 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user41 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user41 -> setRoles([]);
        $manager -> persist ( $user41 );
        $this->addReference('user41', $user41 );

        $user42 = new User ();
        $user42 -> setUsername('wilder42');
        $user42 -> setUsernameCanonical('wilder42');
        $user42 -> setEmail ('wilder42@gmail.com');
        $user42 -> setEmailCanonical('wilder42@gmail.com');
        $user42 -> setEnabled(true);
        $user42 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user42 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user42 -> setRoles([]);
        $manager -> persist ( $user42 );
        $this->addReference('user42', $user42 );

        $user43 = new User ();
        $user43 -> setUsername('wilder43');
        $user43 -> setUsernameCanonical('wilder43');
        $user43 -> setEmail ('wilder43@gmail.com');
        $user43 -> setEmailCanonical('wilder43@gmail.com');
        $user43 -> setEnabled(true);
        $user43 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user43 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user43 -> setRoles([]);
        $manager -> persist ( $user43 );
        $this->addReference('user43', $user43 );

        $user44 = new User ();
        $user44 -> setUsername('wilder44');
        $user44 -> setUsernameCanonical('wilder44');
        $user44 -> setEmail ('wilder44@gmail.com');
        $user44 -> setEmailCanonical('wilder44@gmail.com');
        $user44 -> setEnabled(true);
        $user44 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user44 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user44 -> setRoles([]);
        $manager -> persist ( $user44 );
        $this->addReference('user44', $user44 );

        $user45 = new User ();
        $user45 -> setUsername('wilder45');
        $user45 -> setUsernameCanonical('wilder45');
        $user45 -> setEmail ('wilder45@gmail.com');
        $user45 -> setEmailCanonical('wilder45@gmail.com');
        $user45 -> setEnabled(true);
        $user45 -> setPassword ('$2y$13$IOgL8z8WBaHYQWxF7WczT.Dv0XgWRiaBTnI1AMJYS7CeR2t3Os116');
        $user45 -> setLastLogin(new \DateTime('2017-06-01 12:32:52'));
        $user45 -> setRoles([]);
        $manager -> persist ( $user45 );
        $this->addReference('user45', $user45 );




        $manager -> flush ();
    }

    public function getOrder ()
    {

        return 14 ;
    }
}