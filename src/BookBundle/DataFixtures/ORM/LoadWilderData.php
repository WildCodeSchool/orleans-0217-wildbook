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
        $wilder1 -> setFirstname('Duriez');
        $wilder1 -> setLastname('Ludovic');
        $wilder1 -> setBirthDate(new \DateTime('1990-11-17'));
        $wilder1 -> setAddress('46 boulvard lamartine');
        $wilder1 -> setPostalCode(45000);
        $wilder1 -> setCity('Orleans');
        $wilder1 -> setSkill('SCRUM,Pilote');
        $wilder1 -> setFreelanceAvailability(true);
        $wilder1 -> setBiography('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $wilder1 -> setContactEmail('coucou.ed@gmail.com');
        $wilder1 -> setProfilPicture('https://www.leblogducinema.com/wp-content/uploads//2016/04/Avatar_2.jpg');
        $wilder1 -> setWebsite('www.google.com');
        $wilder1 -> setGithub('www.github.com');
        $wilder1 -> setLinkedin('www.linkedin.com');
        $wilder1 -> setFacebook('www.facebook.com');
        $wilder1 -> setTwitter('www.twitter.com');
        $wilder1 -> setUserActivation(true);
        $wilder1 -> setCodewarsUsername('jojo');
        $wilder1 -> setManagerActivation(true);
        $wilder1 -> setPromotion($this->getReference('Fev2017'));
        $wilder1 -> setAvailability($this->getReference('Vac'));
        $wilder1 -> setLanguages([$this->getReference('Php'), $this->getReference('Js')]);
        $wilder1 -> setTechnologies([$this->getReference('Symfo'), $this->getReference('Boot')]);
        $manager -> persist ( $wilder1 );
        $this->addReference('Wilder1', $wilder1 );

        $wilder2 = new Wilder();
        $wilder2 -> setFirstname('Monaco');
        $wilder2 -> setLastname('Vero');
        $wilder2 -> setBirthDate(new \DateTime('1995-10-25'));
        $wilder2 -> setAddress('30 rue de la loire');
        $wilder2 -> setPostalCode(37200);
        $wilder2 -> setCity('Lyon');
        $wilder2 -> setSkill('SCRUM,Pilote');
        $wilder2 -> setFreelanceAvailability(true);
        $wilder2 -> setBiography('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $wilder2 -> setContactEmail('nico.sylv@gmail.com');
        $wilder2 -> setProfilPicture('https://www.leblogducinema.com/wp-content/uploads//2016/04/Avatar_2.jpg');
        $wilder2 -> setWebsite('www.google.com');
        $wilder2 -> setGithub('www.github.com');
        $wilder2 -> setLinkedin('www.linkedin.com');
        $wilder2 -> setFacebook('www.facebook.com');
        $wilder2 -> setTwitter('www.twitter.com');
        $wilder2 -> setUserActivation(true);
        $wilder2 -> setCodewarsUsername('patoche');
        $wilder2 -> setManagerActivation(true);
        $wilder2 -> setPromotion($this->getReference('Fev2017'));
        $wilder2 -> setAvailability($this->getReference('Vac'));
        $wilder2 -> setLanguages([$this->getReference('Php'), $this->getReference('Js')]);
        $wilder2 -> setTechnologies([$this->getReference('Symfo'), $this->getReference('Workb')]);
        $manager -> persist ( $wilder2 );
        $this->addReference('Wilder2', $wilder2 );

        $wilder3 = new Wilder();
        $wilder3 -> setFirstname('Celestin');
        $wilder3 -> setLastname('Camille');
        $wilder3 -> setBirthDate(new \DateTime('1985-05-20'));
        $wilder3 -> setAddress('11 cloitre st pierre empont');
        $wilder3 -> setPostalCode(49600);
        $wilder3 -> setCity('Lyon');
        $wilder3 -> setSkill('SCRUM,Pilote');
        $wilder3 -> setFreelanceAvailability(true);
        $wilder3 -> setBiography('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $wilder3 -> setContactEmail('syl.and.nico@gmail.com');
        $wilder3 -> setProfilPicture('https://www.leblogducinema.com/wp-content/uploads//2016/04/Avatar_2.jpg');
        $wilder3 -> setWebsite('www.google.com');
        $wilder3 -> setGithub('www.github.com');
        $wilder3 -> setLinkedin('www.linkedin.com');
        $wilder3 -> setFacebook('www.facebook.com');
        $wilder3 -> setTwitter('www.twitter.com');
        $wilder3 -> setUserActivation(true);
        $wilder3 -> setCodewarsUsername('nik');
        $wilder3 -> setManagerActivation(true);
        $wilder3 -> setPromotion($this->getReference('Sept2017'));
        $wilder3 -> setAvailability($this->getReference('Vac'));
        $wilder3 -> setLanguages([$this->getReference('Php'), $this->getReference('Ruby')]);
        $wilder3 -> setTechnologies([$this->getReference('Workb'), $this->getReference('Storm')]);
        $manager -> persist ( $wilder3 );
        $this->addReference('Wilder3', $wilder3 );

        $wilder4 = new Wilder();
        $wilder4 -> setFirstname('Jean');
        $wilder4 -> setLastname('Sylvain');
        $wilder4 -> setBirthDate(new \DateTime('1985-05-25'));
        $wilder4 -> setAddress('657 avenue du marechal');
        $wilder4 -> setPostalCode(45300);
        $wilder4 -> setCity('Paris');
        $wilder4 -> setSkill('SCRUM,Pilote');
        $wilder4 -> setFreelanceAvailability(true);
        $wilder4 -> setBiography('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $wilder4 -> setContactEmail('patrik.wild@gmail.com');
        $wilder4 -> setProfilPicture('https://www.leblogducinema.com/wp-content/uploads//2016/04/Avatar_2.jpg');
        $wilder4 -> setWebsite('www.google.com');
        $wilder4 -> setGithub('www.github.com');
        $wilder4 -> setLinkedin('www.linkedin.com');
        $wilder4 -> setFacebook('www.facebook.com');
        $wilder4 -> setTwitter('www.twitter.com');
        $wilder4 -> setUserActivation(true);
        $wilder4 -> setCodewarsUsername('juju');
        $wilder4 -> setManagerActivation(true);
        $wilder4 -> setPromotion($this->getReference('Fev2017'));
        $wilder4 -> setAvailability($this->getReference('Vac'));
        $wilder4 -> setLanguages([$this->getReference('Ruby'), $this->getReference('Js')]);
        $wilder4 -> setTechnologies([$this->getReference('Symfo'), $this->getReference('Boot')]);
        $manager -> persist ( $wilder4 );
        $this->addReference('Wilder4', $wilder4 );

        $wilder5 = new Wilder();
        $wilder5 -> setFirstname('Lf');
        $wilder5 -> setLastname('Nicola');
        $wilder5 -> setBirthDate(new \DateTime('1998-12-25'));
        $wilder5 -> setAddress('37 rue du capitaine gery');
        $wilder5 -> setPostalCode(45000);
        $wilder5 -> setCity('Orleans');
        $wilder5 -> setSkill('SCRUM,Pilote');
        $wilder5 -> setFreelanceAvailability(true);
        $wilder5 -> setBiography('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $wilder5 -> setContactEmail('fixture.mail@gmail.com');
        $wilder5 -> setProfilPicture('https://www.leblogducinema.com/wp-content/uploads//2016/04/Avatar_2.jpg');
        $wilder5 -> setWebsite('www.google.com');
        $wilder5 -> setGithub('www.github.com');
        $wilder5 -> setLinkedin('www.linkedin.com');
        $wilder5 -> setFacebook('www.facebook.com');
        $wilder5 -> setTwitter('www.twitter.com');
        $wilder5 -> setUserActivation(true);
        $wilder5 -> setCodewarsUsername('trololi');
        $wilder5 -> setManagerActivation(true);
        $wilder5 -> setPromotion($this->getReference('Sept2017'));
        $wilder5 -> setAvailability($this->getReference('Vac'));
        $wilder5 -> setLanguages([$this->getReference('Php'), $this->getReference('Js')]);
        $wilder5 -> setTechnologies([$this->getReference('Workb'), $this->getReference('Boot')]);
        $manager -> persist ( $wilder5 );
        $this->addReference('Wilder5', $wilder5 );

        $wilder6 = new Wilder();
        $wilder6 -> setFirstname('Faucheux');
        $wilder6 -> setLastname('Patoche');
        $wilder6 -> setBirthDate(new \DateTime('1991-10-20'));
        $wilder6 -> setAddress('7 rue cruse');
        $wilder6 -> setPostalCode(45000);
        $wilder6 -> setCity('La Loupe');
        $wilder6 -> setSkill('SCRUM,Pilote');
        $wilder6 -> setFreelanceAvailability(true);
        $wilder6 -> setBiography('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $wilder6 -> setContactEmail('google.mail@gmail.com');
        $wilder6 -> setProfilPicture('https://www.leblogducinema.com/wp-content/uploads//2016/04/Avatar_2.jpg');
        $wilder6 -> setWebsite('www.google.com');
        $wilder6 -> setGithub('www.github.com');
        $wilder6 -> setLinkedin('www.linkedin.com');
        $wilder6 -> setFacebook('www.facebook.com');
        $wilder6 -> setTwitter('www.twitter.com');
        $wilder6 -> setUserActivation(true);
        $wilder6 -> setCodewarsUsername('magalie');
        $wilder6 -> setManagerActivation(true);
        $wilder6 -> setPromotion($this->getReference('Fev2016'));
        $wilder6 -> setAvailability($this->getReference('Vac'));
        $wilder6 -> setLanguages([$this->getReference('Java'), $this->getReference('Js')]);
        $wilder6 -> setTechnologies([$this->getReference('Storm'), $this->getReference('Boot')]);
        $manager -> persist ( $wilder6 );
        $this->addReference('Wilder6', $wilder6 );

        $manager -> flush ();
    }

    public function getOrder ()
    {

        return 10 ;
    }
}

