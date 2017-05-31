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
        $wilder1 -> setBirthDate('1990/11/17');
        $wilder1 -> setAddress('46 boulvard lamartine');
        $wilder1 -> setPostalCode(45000);
        $wilder1 -> setCity('Orleans');
        $wilder1 -> setSkill('SCRUM,Pilote');
        $wilder1 -> setFreelanceAvailability(true);
        $wilder1 -> setBiography('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $wilder1 -> setContactEmail('duriez.ludovic@gmail.com');
        $wilder1 -> setProfilPicture('https://www.leblogducinema.com/wp-content/uploads//2016/04/Avatar_2.jpg');
        $wilder1 -> setWebsite('www.google.com');
        $wilder1 -> setGithub('www.github.com');
        $wilder1 -> setLinkedin('www.linkedin.com');
        $wilder1 -> setFacebook('www.facebook.com');
        $wilder1 -> setTwitter('www.twitter.com');
        $wilder1 -> setUserActivation(true);
        $wilder1 -> setCodewarsUsername('biovor');
        $wilder1 -> setManagerActivation(true);
        $wilder1 -> setPromotion($this->getReference('Fev2017'));
        $wilder1 -> setAvailability($this->getReference('Vac'));
//        $wilder1 -> addLanguage($this->getReference('Php'));
        $manager -> persist ( $wilder1 );

        $manager -> flush ();
    }

    public function getOrder ()
    {

        return 10 ;
    }
}

