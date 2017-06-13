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
use BookBundle\Entity\Wilder ;


class LoadWilderData  extends AbstractFixture implements OrderedFixtureInterface
{
    public function load ( ObjectManager $manager )
    {
        $wilder1 = new Wilder();
        $wilder1 -> setFirstname('Lannister');
        $wilder1 -> setLastname('Jaime');
        $wilder1 -> setBirthDate(new \DateTime('1990-11-17'));
        $wilder1 -> setAddress('36 rue de wester');
        $wilder1 -> setPostalCode(45000);
        $wilder1 -> setCity('Orleans');
        $wilder1 -> setSkill('SCRUM,BDD, Adobe Suite, Microsoft Office, Git');
        $wilder1 -> setFreelanceAvailability(true);
        $wilder1 -> setBiography('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $wilder1 -> setContactEmail('Wilder1contacte@gmail.com');
        $wilder1 -> setProfilPicture('Jaime-Lannister.png');
        $wilder1 -> setWebsite('www.google.com');
        $wilder1 -> setGithub('www.github.com');
        $wilder1 -> setLinkedin('www.linkedin.com');
        $wilder1 -> setFacebook('www.facebook.com');
        $wilder1 -> setTwitter('www.twitter.com');
        $wilder1 -> setUserActivation(true);
        $wilder1 -> setCodewarsUsername('ssineriz');
        $wilder1 -> setManagerActivation(true);
        $wilder1 -> setPromotion($this->getReference('OrlFev16'));
        $wilder1 -> setAvailability($this->getReference('Vac'));
        $wilder1 -> setLanguages([$this->getReference('Php'), $this->getReference('Js')]);
        $wilder1 -> setTechnologies([$this->getReference('Symfo'), $this->getReference('Boot'), $this->getReference('Storm')]);
        $manager -> persist ( $wilder1 );
        $this->addReference('Wilder1', $wilder1 );


        $wilder2 = new Wilder();
        $wilder2 -> setFirstname('Lannister');
        $wilder2 -> setLastname('Myrcella');
        $wilder2 -> setBirthDate(new \DateTime('1990-11-17'));
        $wilder2 -> setAddress('36 rue de wester');
        $wilder2 -> setPostalCode(45000);
        $wilder2 -> setCity('Orleans');
        $wilder2 -> setSkill('SCRUM,BDD, Adobe Suite, Microsoft Office, Git');
        $wilder2 -> setFreelanceAvailability(true);
        $wilder2 -> setBiography('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $wilder2 -> setContactEmail('Wilder2contacte@gmail.com');
        $wilder2 -> setProfilPicture('myrcella-Lannister.jpg');
        $wilder2 -> setWebsite('www.google.com');
        $wilder2 -> setGithub('www.github.com');
        $wilder2 -> setLinkedin('www.linkedin.com');
        $wilder2 -> setFacebook('www.facebook.com');
        $wilder2 -> setTwitter('www.twitter.com');
        $wilder2 -> setUserActivation(true);
        $wilder2 -> setCodewarsUsername('ssineriz');
        $wilder2 -> setManagerActivation(true);
        $wilder2 -> setPromotion($this->getReference('OrlFev16'));
        $wilder2 -> setAvailability($this->getReference('Poste'));
        $wilder2 -> setLanguages([$this->getReference('Php'), $this->getReference('Js')]);
        $wilder2 -> setTechnologies([$this->getReference('Symfo'), $this->getReference('Boot'), $this->getReference('Storm')]);
        $manager -> persist ( $wilder2 );
        $this->addReference('Wilder2', $wilder2 );


        $wilder3 = new Wilder();
        $wilder3 -> setFirstname('Lannister');
        $wilder3 -> setLastname('Tyrion');
        $wilder3 -> setBirthDate(new \DateTime('1990-11-17'));
        $wilder3 -> setAddress('36 rue de wester');
        $wilder3 -> setPostalCode(45000);
        $wilder3 -> setCity('Orleans');
        $wilder3 -> setSkill('SCRUM,BDD, Adobe Suite, Microsoft Office, Git');
        $wilder3 -> setFreelanceAvailability(true);
        $wilder3 -> setBiography('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $wilder3 -> setContactEmail('Wilder3contacte@gmail.com');
        $wilder3 -> setProfilPicture('tyrion-Lannister.jpg');
        $wilder3 -> setWebsite('www.google.com');
        $wilder3 -> setGithub('www.github.com');
        $wilder3 -> setLinkedin('www.linkedin.com');
        $wilder3 -> setFacebook('www.facebook.com');
        $wilder3 -> setTwitter('www.twitter.com');
        $wilder3 -> setUserActivation(true);
        $wilder3 -> setCodewarsUsername('ssineriz');
        $wilder3 -> setManagerActivation(true);
        $wilder3 -> setPromotion($this->getReference('OrlSept17'));
        $wilder3 -> setAvailability($this->getReference('Poste'));
        $wilder3 -> setLanguages([$this->getReference('Php'), $this->getReference('Js')]);
        $wilder3 -> setTechnologies([$this->getReference('Symfo'), $this->getReference('Boot'), $this->getReference('Storm')]);
        $manager -> persist ( $wilder3 );
        $this->addReference('Wilder3', $wilder3 );


        $wilder4 = new Wilder();
        $wilder4 -> setFirstname('Stark');
        $wilder4 -> setLastname('Robb');
        $wilder4 -> setBirthDate(new \DateTime('1990-11-17'));
        $wilder4 -> setAddress('36 rue de wester');
        $wilder4 -> setPostalCode(45000);
        $wilder4 -> setCity('Orleans');
        $wilder4 -> setSkill('SCRUM,BDD, Adobe Suite, Microsoft Office, Git');
        $wilder4 -> setFreelanceAvailability(true);
        $wilder4 -> setBiography('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $wilder4 -> setContactEmail('Wilder4contacte@gmail.com');
        $wilder4 -> setProfilPicture('robb-Stark.png');
        $wilder4 -> setWebsite('www.google.com');
        $wilder4 -> setGithub('www.github.com');
        $wilder4 -> setLinkedin('www.linkedin.com');
        $wilder4 -> setFacebook('www.facebook.com');
        $wilder4 -> setTwitter('www.twitter.com');
        $wilder4 -> setUserActivation(true);
        $wilder4 -> setCodewarsUsername('ssineriz');
        $wilder4 -> setManagerActivation(true);
        $wilder4 -> setPromotion($this->getReference('OrlSept17'));
        $wilder4 -> setAvailability($this->getReference('Poste'));
        $wilder4 -> setLanguages([$this->getReference('Php'), $this->getReference('Js')]);
        $wilder4 -> setTechnologies([$this->getReference('Symfo'), $this->getReference('Boot'), $this->getReference('Storm')]);
        $manager -> persist ( $wilder4 );
        $this->addReference('Wilder4', $wilder4 );


        $wilder5 = new Wilder();
        $wilder5 -> setFirstname('Stark');
        $wilder5 -> setLastname('Ned');
        $wilder5 -> setBirthDate(new \DateTime('1990-11-17'));
        $wilder5 -> setAddress('36 rue de wester');
        $wilder5 -> setPostalCode(45140);
        $wilder5 -> setCity('Ingre');
        $wilder5 -> setSkill('SCRUM,BDD, Adobe Suite, Microsoft Office, Git');
        $wilder5 -> setFreelanceAvailability(true);
        $wilder5 -> setBiography('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $wilder5 -> setContactEmail('Wilder5contacte@gmail.com');
        $wilder5 -> setProfilPicture('ned-Stark.jpg');
        $wilder5 -> setWebsite('www.google.com');
        $wilder5 -> setGithub('www.github.com');
        $wilder5 -> setLinkedin('www.linkedin.com');
        $wilder5 -> setFacebook('www.facebook.com');
        $wilder5 -> setTwitter('www.twitter.com');
        $wilder5 -> setUserActivation(true);
        $wilder5 -> setCodewarsUsername('ssineriz');
        $wilder5 -> setManagerActivation(true);
        $wilder5 -> setPromotion($this->getReference('OrlSept17'));
        $wilder5 -> setAvailability($this->getReference('RePoste'));
        $wilder5 -> setLanguages([$this->getReference('Php'), $this->getReference('Js')]);
        $wilder5 -> setTechnologies([$this->getReference('Symfo'), $this->getReference('Boot'), $this->getReference('Storm')]);
        $manager -> persist ( $wilder5 );
        $this->addReference('Wilder5', $wilder5 );


        $wilder6 = new Wilder();
        $wilder6 -> setFirstname('Greyjoy');
        $wilder6 -> setLastname('Theon');
        $wilder6 -> setBirthDate(new \DateTime('1990-11-17'));
        $wilder6 -> setAddress('36 rue de wester');
        $wilder6 -> setPostalCode(45140);
        $wilder6 -> setCity('Ingre');
        $wilder6 -> setSkill('SCRUM,BDD, Adobe Suite, Microsoft Office, Git');
        $wilder6 -> setFreelanceAvailability(true);
        $wilder6 -> setBiography('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $wilder6 -> setContactEmail('Wilder6contacte@gmail.com');
        $wilder6 -> setProfilPicture('Theon-Greyjoy.png');
        $wilder6 -> setWebsite('www.google.com');
        $wilder6 -> setGithub('www.github.com');
        $wilder6 -> setLinkedin('www.linkedin.com');
        $wilder6 -> setFacebook('www.facebook.com');
        $wilder6 -> setTwitter('www.twitter.com');
        $wilder6 -> setUserActivation(true);
        $wilder6 -> setCodewarsUsername('ssineriz');
        $wilder6 -> setManagerActivation(true);
        $wilder6 -> setPromotion($this->getReference('OrlSept17'));
        $wilder6 -> setAvailability($this->getReference('RePoste'));
        $wilder6 -> setLanguages([$this->getReference('Php'), $this->getReference('Js')]);
        $wilder6 -> setTechnologies([$this->getReference('Symfo'), $this->getReference('Boot'), $this->getReference('Storm')]);
        $manager -> persist ( $wilder6 );
        $this->addReference('Wilder6', $wilder6 );



        $wilder7 = new Wilder();
        $wilder7 -> setFirstname('Snow');
        $wilder7 -> setLastname('Jon');
        $wilder7 -> setBirthDate(new \DateTime('1990-11-17'));
        $wilder7 -> setAddress('36 rue de wester');
        $wilder7 -> setPostalCode(45160);
        $wilder7 -> setCity('Olivet');
        $wilder7 -> setSkill('SCRUM,BDD, Adobe Suite, Microsoft Office, Git');
        $wilder7 -> setFreelanceAvailability(true);
        $wilder7 -> setBiography('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $wilder7 -> setContactEmail('Wilder7contacte@gmail.com');
        $wilder7 -> setProfilPicture('jon-Snow.jpg');
        $wilder7 -> setWebsite('www.google.com');
        $wilder7 -> setGithub('www.github.com');
        $wilder7 -> setLinkedin('www.linkedin.com');
        $wilder7 -> setFacebook('www.facebook.com');
        $wilder7 -> setTwitter('www.twitter.com');
        $wilder7 -> setUserActivation(true);
        $wilder7 -> setCodewarsUsername('ssineriz');
        $wilder7 -> setManagerActivation(true);
        $wilder7 -> setPromotion($this->getReference('OrlSept17'));
        $wilder7 -> setAvailability($this->getReference('RePoste'));
        $wilder7 -> setLanguages([$this->getReference('Php'), $this->getReference('Js')]);
        $wilder7 -> setTechnologies([$this->getReference('Symfo'), $this->getReference('Boot'), $this->getReference('Storm')]);
        $manager -> persist ( $wilder7 );
        $this->addReference('Wilder7', $wilder7 );


        $wilder8 = new Wilder();
        $wilder8 -> setFirstname('Targaryen');
        $wilder8 -> setLastname('Aemon');
        $wilder8 -> setBirthDate(new \DateTime('1990-11-17'));
        $wilder8 -> setAddress('36 rue de wester');
        $wilder8 -> setPostalCode(45160);
        $wilder8 -> setCity('Olivet');
        $wilder8 -> setSkill('SCRUM,BDD, Adobe Suite, Microsoft Office, Git');
        $wilder8 -> setFreelanceAvailability(true);
        $wilder8 -> setBiography('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $wilder8 -> setContactEmail('Wilder8contacte@gmail.com');
        $wilder8 -> setProfilPicture('aemon-Targaryen.jpg');
        $wilder8 -> setWebsite('www.google.com');
        $wilder8 -> setGithub('www.github.com');
        $wilder8 -> setLinkedin('www.linkedin.com');
        $wilder8 -> setFacebook('www.facebook.com');
        $wilder8 -> setTwitter('www.twitter.com');
        $wilder8 -> setUserActivation(true);
        $wilder8 -> setCodewarsUsername('ssineriz');
        $wilder8 -> setManagerActivation(true);
        $wilder8 -> setPromotion($this->getReference('OrlSept17'));
        $wilder8 -> setAvailability($this->getReference('Vac'));
        $wilder8 -> setLanguages([$this->getReference('Php'), $this->getReference('Js')]);
        $wilder8 -> setTechnologies([$this->getReference('Symfo'), $this->getReference('Boot'), $this->getReference('Storm')]);
        $manager -> persist ( $wilder8 );
        $this->addReference('Wilder8', $wilder8 );


        $wilder9 = new Wilder();
        $wilder9 -> setFirstname('Rayder');
        $wilder9 -> setLastname('Mance');
        $wilder9 -> setBirthDate(new \DateTime('1990-11-17'));
        $wilder9 -> setAddress('36 rue de wester');
        $wilder9 -> setPostalCode(45240);
        $wilder9 -> setCity('La ferte saint aubin');
        $wilder9 -> setSkill('SCRUM,BDD, Adobe Suite, Microsoft Office, Git');
        $wilder9 -> setFreelanceAvailability(true);
        $wilder9 -> setBiography('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $wilder9 -> setContactEmail('Wilder9contacte@gmail.com');
        $wilder9 -> setProfilPicture('mance-Rayder.jpg');
        $wilder9 -> setWebsite('www.google.com');
        $wilder9 -> setGithub('www.github.com');
        $wilder9 -> setLinkedin('www.linkedin.com');
        $wilder9 -> setFacebook('www.facebook.com');
        $wilder9 -> setTwitter('www.twitter.com');
        $wilder9 -> setUserActivation(true);
        $wilder9 -> setCodewarsUsername('ssineriz');
        $wilder9 -> setManagerActivation(true);
        $wilder9 -> setPromotion($this->getReference('OrlSept17'));
        $wilder9 -> setAvailability($this->getReference('ReStage'));
        $wilder9 -> setLanguages([$this->getReference('Php'), $this->getReference('Js')]);
        $wilder9 -> setTechnologies([$this->getReference('Symfo'), $this->getReference('Boot'), $this->getReference('Storm')]);
        $manager -> persist ( $wilder9 );
        $this->addReference('Wilder9', $wilder9 );


        $wilder10 = new Wilder();
        $wilder10 -> setFirstname('De Fer');
        $wilder10 -> setLastname('La Montagne');
        $wilder10 -> setBirthDate(new \DateTime('1990-11-17'));
        $wilder10 -> setAddress('36 rue de wester');
        $wilder10 -> setPostalCode(28000);
        $wilder10 -> setCity('Chartre');
        $wilder10 -> setSkill('SCRUM,BDD, Adobe Suite, Microsoft Office, Git');
        $wilder10 -> setFreelanceAvailability(true);
        $wilder10 -> setBiography('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $wilder10 -> setContactEmail('Wilder10contacte@gmail.com');
        $wilder10 -> setProfilPicture('la-Montagne-De-Fer.jpg');
        $wilder10 -> setWebsite('www.google.com');
        $wilder10 -> setGithub('www.github.com');
        $wilder10 -> setLinkedin('www.linkedin.com');
        $wilder10 -> setFacebook('www.facebook.com');
        $wilder10 -> setTwitter('www.twitter.com');
        $wilder10 -> setUserActivation(true);
        $wilder10 -> setCodewarsUsername('ssineriz');
        $wilder10 -> setManagerActivation(true);
        $wilder10 -> setPromotion($this->getReference('OrlSept17'));
        $wilder10 -> setAvailability($this->getReference('ReStage'));
        $wilder10 -> setLanguages([$this->getReference('Php'), $this->getReference('Js')]);
        $wilder10 -> setTechnologies([$this->getReference('Symfo'), $this->getReference('Boot'), $this->getReference('Storm')]);
        $manager -> persist ( $wilder10 );
        $this->addReference('Wilder10', $wilder10 );


        $wilder11 = new Wilder();
        $wilder11 -> setFirstname('Le Limier');
        $wilder11 -> setLastname('Clegane');
        $wilder11 -> setBirthDate(new \DateTime('1990-11-17'));
        $wilder11 -> setAddress('36 rue de wester');
        $wilder11 -> setPostalCode(45310);
        $wilder11 -> setCity('Patay');
        $wilder11 -> setSkill('SCRUM,BDD, Adobe Suite, Microsoft Office, Git');
        $wilder11 -> setFreelanceAvailability(true);
        $wilder11 -> setBiography('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $wilder11 -> setContactEmail('Wilder11contacte@gmail.com');
        $wilder11 -> setProfilPicture('le-Limier-Clegane.jpg');
        $wilder11 -> setWebsite('www.google.com');
        $wilder11 -> setGithub('www.github.com');
        $wilder11 -> setLinkedin('www.linkedin.com');
        $wilder11 -> setFacebook('www.facebook.com');
        $wilder11 -> setTwitter('www.twitter.com');
        $wilder11 -> setUserActivation(true);
        $wilder11 -> setCodewarsUsername('ssineriz');
        $wilder11 -> setManagerActivation(true);
        $wilder11 -> setPromotion($this->getReference('OrlSept17'));
        $wilder11 -> setAvailability($this->getReference('Stage'));
        $wilder11 -> setLanguages([$this->getReference('Php'), $this->getReference('Js')]);
        $wilder11 -> setTechnologies([$this->getReference('Symfo'), $this->getReference('Boot'), $this->getReference('Storm')]);
        $manager -> persist ( $wilder11 );
        $this->addReference('Wilder11', $wilder11 );


        $wilder12 = new Wilder();
        $wilder12 -> setFirstname('Giantsbane');
        $wilder12 -> setLastname('Tormund');
        $wilder12 -> setBirthDate(new \DateTime('1990-11-17'));
        $wilder12 -> setAddress('36 rue de wester');
        $wilder12 -> setPostalCode(45140);
        $wilder12 -> setCity('Saran');
        $wilder12 -> setSkill('SCRUM,BDD, Adobe Suite, Microsoft Office, Git');
        $wilder12 -> setFreelanceAvailability(true);
        $wilder12 -> setBiography('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $wilder12 -> setContactEmail('Wilder12contacte@gmail.com');
        $wilder12 -> setProfilPicture('tormund- Giantsbane.jpg');
        $wilder12 -> setWebsite('www.google.com');
        $wilder12 -> setGithub('www.github.com');
        $wilder12 -> setLinkedin('www.linkedin.com');
        $wilder12 -> setFacebook('www.facebook.com');
        $wilder12 -> setTwitter('www.twitter.com');
        $wilder12 -> setUserActivation(true);
        $wilder12 -> setCodewarsUsername('ssineriz');
        $wilder12 -> setManagerActivation(true);
        $wilder12 -> setPromotion($this->getReference('OrlSept17'));
        $wilder12 -> setAvailability($this->getReference('Forma'));
        $wilder12 -> setLanguages([$this->getReference('Php'), $this->getReference('Js')]);
        $wilder12 -> setTechnologies([$this->getReference('Symfo'), $this->getReference('Boot'), $this->getReference('Storm')]);
        $manager -> persist ( $wilder12 );
        $this->addReference('Wilder12', $wilder12 );



        $manager -> flush ();
    }

    public function getOrder ()
    {

        return 10 ;
    }
}

