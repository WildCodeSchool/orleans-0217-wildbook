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
use BookBundle\Entity\Project ;


class LoadProjectData  extends AbstractFixture implements OrderedFixtureInterface
{
    public function load ( ObjectManager $manager )
    {
        $project1 = new Project();
        $project1 -> setSchool($this->getReference('Orleans'));
        $project1 -> setDate(new \DateTime('2016-11-05'));
        $project1 -> setTitle('Numo');
        $project1 -> setPath('www.numo.com');
        $project1 -> setCustomer('Plateforme d\'evenement');
        $project1 -> setStatus('En production');
        $project1 -> setDescription('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $project1 -> setSummary('il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex');
        $project1 -> setCategory($this->getReference('AppWeb'));
        $project1 -> setTags([$this->getReference('Resto'), $this->getReference('Festi')]);
        $project1 -> setLanguages([$this->getReference('Php'), $this->getReference('Js')]);
        $project1 -> setTechnologies([$this->getReference('Storm'), $this->getReference('Boot')]);
        $manager -> persist ( $project1 );
        $this->addReference('Project1', $project1 );

        $project2 = new Project();
        $project2 -> setSchool($this->getReference('Orleans'));
        $project2 -> setDate(new \DateTime('2017-02-20'));
        $project2 -> setTitle('Clara mocquot');
        $project2 -> setPath('www.clara-chapeaux.com');
        $project2 -> setCustomer('Clara Chwapi');
        $project2 -> setStatus('En ligne');
        $project2 -> setDescription('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $project2 -> setSummary('il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex');
        $project2 -> setCategory($this->getReference('SiteV'));
        $project2 -> setTags([$this->getReference('Theatre'), $this->getReference('Festi')]);
        $project2 -> setLanguages([$this->getReference('Php'), $this->getReference('Js')]);
        $project2 -> setTechnologies([$this->getReference('Storm'), $this->getReference('Boot')]);
        $manager -> persist ( $project2 );
        $this->addReference('Project2', $project2 );

        $project3 = new Project();
        $project3 -> setSchool($this->getReference('Orleans'));
        $project3 -> setDate(new \DateTime('2017-02-20'));
        $project3 -> setTitle('Hophophop');
        $project3 -> setPath('www.hophophop.com');
        $project3 -> setCustomer('Festival hop');
        $project3 -> setStatus('Bientot en ligne');
        $project3 -> setDescription('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $project3 -> setSummary('il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex');
        $project3 -> setCategory($this->getReference('SiteV'));
        $project3 -> setTags([$this->getReference('Mus'), $this->getReference('Festi')]);
        $project3 -> setLanguages([$this->getReference('Php'), $this->getReference('Js')]);
        $project3 -> setTechnologies([$this->getReference('Storm'), $this->getReference('Boot')]);
        $manager -> persist ( $project3 );
        $this->addReference('Project3', $project3 );

        $project4 = new Project();
        $project4 -> setSchool($this->getReference('Orleans'));
        $project4 -> setDate(new \DateTime('2016-11-05'));
        $project4 -> setTitle('Laklak');
        $project4 -> setPath('www.klakla.com');
        $project4 -> setCustomer('Laklak Production');
        $project4 -> setStatus('En ligne');
        $project4 -> setDescription('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $project4 -> setSummary('il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex');
        $project4 -> setCategory($this->getReference('SiteV'));
        $project4 -> setTags([$this->getReference('Resto'), $this->getReference('Mus')]);
        $project4 -> setLanguages([$this->getReference('Php'), $this->getReference('Js')]);
        $project4 -> setTechnologies([$this->getReference('Storm'), $this->getReference('Boot')]);
        $manager -> persist ( $project4 );
        $this->addReference('Project4', $project4 );

        $project5 = new Project();
        $project5 -> setSchool($this->getReference('Orleans'));
        $project5 -> setDate(new \DateTime('2017-05-01'));
        $project5 -> setTitle('Les Jardin de Gaston');
        $project5 -> setPath('www.gaston.com');
        $project5 -> setCustomer('Gaston');
        $project5 -> setStatus('En ligne');
        $project5 -> setDescription('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $project5 -> setSummary('il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex');
        $project5 -> setCategory($this->getReference('SiteV'));
        $project5 -> setTags([$this->getReference('Resto'), $this->getReference('Festi')]);
        $project5 -> setLanguages([$this->getReference('Php'), $this->getReference('Js')]);
        $project5 -> setTechnologies([$this->getReference('Storm'), $this->getReference('Boot')]);
        $manager -> persist ( $project5 );
        $this->addReference('Project5', $project5 );

        $project6 = new Project();
        $project6 -> setSchool($this->getReference('Orleans'));
        $project6 -> setDate(new \DateTime('2017-02-20'));
        $project6 -> setTitle('Comme l\'aire 2 rien');
        $project6 -> setPath('www.commelair2rien.fr');
        $project6 -> setCustomer('Blondeau Nadine');
        $project6 -> setStatus('En ligne');
        $project6 -> setDescription('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $project6 -> setSummary('il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex');
        $project6 -> setCategory($this->getReference('SiteV'));
        $project6 -> setTags([$this->getReference('Theatre'), $this->getReference('Mus')]);
        $project6 -> setLanguages([$this->getReference('Php'), $this->getReference('Js')]);
        $project6 -> setTechnologies([$this->getReference('Storm'), $this->getReference('Boot')]);
        $manager -> persist ( $project6 );
        $this->addReference('Project6', $project6 );

        $project7 = new Project();
        $project7 -> setSchool($this->getReference('Orleans'));
        $project7 -> setDate(new \DateTime('2016-11-05'));
        $project7 -> setTitle('Gabriel Mattei');
        $project7 -> setPath('www.G-B.com');
        $project7 -> setCustomer('Gabriel');
        $project7 -> setStatus('En ligne');
        $project7 -> setDescription('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $project7 -> setSummary('il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex');
        $project7 -> setCategory($this->getReference('SiteV'));
        $project7 -> setTags([$this->getReference('Resto'), $this->getReference('Festi')]);
        $project7 -> setLanguages([$this->getReference('Php'), $this->getReference('Js')]);
        $project7 -> setTechnologies([$this->getReference('Storm'), $this->getReference('Boot')]);
        $manager -> persist ( $project7 );
        $this->addReference('Project7', $project7 );

        $project8 = new Project();
        $project8 -> setSchool($this->getReference('Orleans'));
        $project8 -> setDate(new \DateTime('2016-11-05'));
        $project8 -> setTitle('Sourcink');
        $project8 -> setPath('www.sourcink-club.com');
        $project8 -> setCustomer('Sourcink');
        $project8 -> setStatus('En production');
        $project8 -> setDescription('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $project8 -> setSummary('il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex');
        $project8 -> setCategory($this->getReference('AppWeb'));
        $project8 -> setTags([$this->getReference('Resto'), $this->getReference('Festi')]);
        $project8 -> setLanguages([$this->getReference('Php'), $this->getReference('Js')]);
        $project8 -> setTechnologies([$this->getReference('Storm'), $this->getReference('Boot')]);
        $manager -> persist ( $project8 );
        $this->addReference('Project8', $project8 );

        $project9 = new Project();
        $project9 -> setSchool($this->getReference('Orleans'));
        $project9 -> setDate(new \DateTime('2016-11-05'));
        $project9 -> setTitle('My Orleans');
        $project9 -> setPath('www.orleans-my-maison.com');
        $project9 -> setCustomer('My orleans');
        $project9 -> setStatus('Refonte du site ... ');
        $project9 -> setDescription('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $project9 -> setSummary('il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex');
        $project9 -> setCategory($this->getReference('AppWeb'));
        $project9 -> setTags([$this->getReference('Resto'), $this->getReference('Festi')]);
        $project9 -> setLanguages([$this->getReference('Php'), $this->getReference('Js')]);
        $project9 -> setTechnologies([$this->getReference('Storm'), $this->getReference('Boot')]);
        $manager -> persist ( $project9 );
        $this->addReference('Project9', $project9 );

        $project10 = new Project();
        $project10 -> setSchool($this->getReference('Orleans'));
        $project10 -> setDate(new \DateTime('2016-11-05'));
        $project10 -> setTitle('Le Wild Book');
        $project10 -> setPath('www.wilde-book.com');
        $project10 -> setCustomer('Wild code school');
        $project10 -> setStatus('ICI');
        $project10 -> setDescription('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $project10 -> setSummary('il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex');
        $project10 -> setCategory($this->getReference('AppWeb'));
        $project10 -> setTags([$this->getReference('Resto'), $this->getReference('Festi')]);
        $project10 -> setLanguages([$this->getReference('Php'), $this->getReference('Js')]);
        $project10 -> setTechnologies([$this->getReference('Storm'), $this->getReference('Boot')]);
        $manager -> persist ( $project10 );
        $this->addReference('Project10', $project10 );

        $project11 = new Project();
        $project11 -> setSchool($this->getReference('Lyon'));
        $project11 -> setDate(new \DateTime('2016-11-05'));
        $project11 -> setTitle('Cataluna pizz');
        $project11 -> setPath('www.cataluna.com');
        $project11 -> setCustomer('Food-truck');
        $project11 -> setStatus('En ligne');
        $project11 -> setDescription('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $project11 -> setSummary('il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex');
        $project11 -> setCategory($this->getReference('SiteV'));
        $project11 -> setTags([$this->getReference('Resto'), $this->getReference('Mus')]);
        $project11 -> setLanguages([$this->getReference('Php'), $this->getReference('Js')]);
        $project11 -> setTechnologies([$this->getReference('Storm'), $this->getReference('Boot')]);
        $manager -> persist ( $project11 );
        $this->addReference('Project11', $project11 );

        $project12 = new Project();
        $project12 -> setSchool($this->getReference('Lyon'));
        $project12 -> setDate(new \DateTime('2016-11-05'));
        $project12 -> setTitle('Quizz');
        $project12 -> setPath('www.quizz-catala.com');
        $project12 -> setCustomer('Hackathon 2');
        $project12 -> setStatus('Proto');
        $project12 -> setDescription('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $project12 -> setSummary('il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex');
        $project12 -> setCategory($this->getReference('Hacka'));
        $project12 -> setTags([$this->getReference('Resto'), $this->getReference('Mus')]);
        $project12 -> setLanguages([$this->getReference('Php'), $this->getReference('Js')]);
        $project12 -> setTechnologies([$this->getReference('Storm'), $this->getReference('Boot')]);
        $manager -> persist ( $project12 );
        $this->addReference('Project12', $project12 );

        $project13 = new Project();
        $project13 -> setSchool($this->getReference('Loupe'));
        $project13 -> setDate(new \DateTime('2016-11-05'));
        $project13 -> setTitle('Brasserie');
        $project13 -> setPath('www.brass-nage.com');
        $project13 -> setCustomer('Jumpi');
        $project13 -> setStatus('En Prod');
        $project13 -> setDescription('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $project13 -> setSummary('il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex');
        $project13 -> setCategory($this->getReference('AppWeb'));
        $project13 -> setTags([$this->getReference('Resto'), $this->getReference('Mus')]);
        $project13 -> setLanguages([$this->getReference('Js')]);
        $project13 -> setTechnologies([$this->getReference('Storm'), $this->getReference('Boot')]);
        $manager -> persist ( $project13 );
        $this->addReference('Project13', $project13 );

        $project14 = new Project();
        $project14 -> setSchool($this->getReference('Loupe'));
        $project14 -> setDate(new \DateTime('2016-11-05'));
        $project14 -> setTitle('Plombier 1er prix');
        $project14 -> setPath('www.plombier-pas-cher.com');
        $project14 -> setCustomer('Gomez');
        $project14 -> setStatus('A couler');
        $project14 -> setDescription('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $project14 -> setSummary('il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex');
        $project14 -> setCategory($this->getReference('AppWeb'));
        $project14 -> setTags([$this->getReference('Resto'), $this->getReference('Mus')]);
        $project14 -> setLanguages([$this->getReference('Js')]);
        $project14 -> setTechnologies([$this->getReference('Storm'), $this->getReference('Boot')]);
        $manager -> persist ( $project14 );
        $this->addReference('Project14', $project14 );

        $project15 = new Project();
        $project15 -> setSchool($this->getReference('Loupe'));
        $project15 -> setDate(new \DateTime('2016-11-05'));
        $project15 -> setTitle('Metroide prime');
        $project15 -> setCustomer('Ubisoft');
        $project15 -> setStatus('En Prod');
        $project15 -> setDescription('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $project15 -> setSummary('il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex');
        $project15 -> setCategory($this->getReference('Game'));
        $project15 -> setTags([$this->getReference('Resto'), $this->getReference('Mus')]);
        $project15 -> setLanguages([$this->getReference('Js')]);
        $project15 -> setTechnologies([$this->getReference('Storm'), $this->getReference('Boot')]);
        $manager -> persist ( $project15 );
        $this->addReference('Project15', $project15 );

        $project16 = new Project();
        $project16 -> setSchool($this->getReference('Loupe'));
        $project16 -> setDate(new \DateTime('2016-11-05'));
        $project16 -> setTitle('La bonne bouf');
        $project16 -> setPath('www.bonne-bouf.com');
        $project16 -> setCustomer('Hackathon 2');
        $project16 -> setStatus('Proto');
        $project16 -> setDescription('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $project16 -> setSummary('il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex');
        $project16 -> setCategory($this->getReference('Hacka'));
        $project16 -> setTags([$this->getReference('Resto'), $this->getReference('Mus')]);
        $project16 -> setLanguages([$this->getReference('Js')]);
        $project16 -> setTechnologies([$this->getReference('Storm'), $this->getReference('Boot')]);
        $manager -> persist ( $project16 );
        $this->addReference('Project16', $project16 );


        $project17 = new Project();
        $project17 -> setSchool($this->getReference('Bordeaux'));
        $project17 -> setDate(new \DateTime('2016-11-05'));
        $project17 -> setTitle('Le cameleon voyageur');
        $project17 -> setPath('www.le-cameleon-voyeur.com');
        $project17 -> setCustomer('Food-truck');
        $project17 -> setStatus('Project test');
        $project17 -> setDescription('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $project17 -> setSummary('il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex');
        $project17 -> setCategory($this->getReference('SiteV'));
        $project17 -> setTags([$this->getReference('Resto'), $this->getReference('Festi')]);
        $project17 -> setLanguages([$this->getReference('Php'), $this->getReference('Js')]);
        $project17 -> setTechnologies([$this->getReference('Storm'), $this->getReference('Boot')]);
        $manager -> persist ( $project17 );
        $this->addReference('Project17', $project17 );

        $project18 = new Project();
        $project18 -> setSchool($this->getReference('Bordeaux'));
        $project18 -> setDate(new \DateTime('2016-11-05'));
        $project18 -> setTitle('La petite boulangerie');
        $project18 -> setPath('www.petite-boul.com');
        $project18 -> setCustomer('Mr Pasquier');
        $project18 -> setStatus('En ligne');
        $project18 -> setDescription('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $project18 -> setSummary('il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex');
        $project18 -> setCategory($this->getReference('SiteV'));
        $project18 -> setTags([$this->getReference('Resto'), $this->getReference('Festi')]);
        $project18 -> setLanguages([$this->getReference('Php')]);
        $project18 -> setTechnologies([$this->getReference('Storm'), $this->getReference('Boot')]);
        $manager -> persist ( $project18 );
        $this->addReference('Project18', $project18 );

        $project19 = new Project();
        $project19 -> setSchool($this->getReference('Bordeaux'));
        $project19 -> setDate(new \DateTime('2016-11-05'));
        $project19 -> setTitle('La meteo des soirées');
        $project19 -> setPath('www.soirée-météo.com');
        $project19 -> setCustomer('Anonyme');
        $project19 -> setStatus('Fermer');
        $project19 -> setDescription('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $project19 -> setSummary('il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex');
        $project19 -> setCategory($this->getReference('AppMob'));
        $project19 -> setTags([$this->getReference('Resto'), $this->getReference('Festi')]);
        $project19 -> setLanguages([$this->getReference('Php'), $this->getReference('Js')]);
        $project19 -> setTechnologies([$this->getReference('Storm'), $this->getReference('Boot')]);
        $manager -> persist ( $project19 );
        $this->addReference('Project19', $project19 );

        $project20 = new Project();
        $project20 -> setSchool($this->getReference('Lille'));
        $project20 -> setDate(new \DateTime('2016-11-05'));
        $project20 -> setTitle('Mario kart wild');
        $project20 -> setCustomer('Wild Code School');
        $project20 -> setStatus('Exellent');
        $project20 -> setDescription('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $project20 -> setSummary('il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex');
        $project20 -> setCategory($this->getReference('Game'));
        $project20 -> setTags([$this->getReference('Resto'), $this->getReference('Festi')]);
        $project20 -> setLanguages([$this->getReference('Ruby')]);
        $project20 -> setTechnologies([$this->getReference('Storm'), $this->getReference('Boot')]);
        $manager -> persist ( $project20 );
        $this->addReference('Project20', $project20 );

        $project21 = new Project();
        $project21 -> setSchool($this->getReference('Lille'));
        $project21 -> setDate(new \DateTime('2016-11-05'));
        $project21 -> setTitle('Bonbons en folie');
        $project21 -> setPath('www.ma-folie-des-bonbons.com');
        $project21 -> setCustomer('Haribo');
        $project21 -> setStatus('J\'aime');
        $project21 -> setDescription('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $project21 -> setSummary('il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex');
        $project21 -> setCategory($this->getReference('AppWeb'));
        $project21 -> setTags([$this->getReference('Resto'), $this->getReference('Festi')]);
        $project21 -> setLanguages([$this->getReference('Ruby')]);
        $project21 -> setTechnologies([$this->getReference('Storm'), $this->getReference('Boot')]);
        $manager -> persist ( $project21 );
        $this->addReference('Project21', $project21 );

        $project22 = new Project();
        $project22 -> setSchool($this->getReference('Paris'));
        $project22 -> setDate(new \DateTime('2016-11-05'));
        $project22 -> setTitle('Quizz party 6');
        $project22 -> setCustomer('Vous');
        $project22 -> setStatus('Proto foiré');
        $project22 -> setDescription('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $project22 -> setSummary('il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex');
        $project22 -> setCategory($this->getReference('Hacka'));
        $project22 -> setTags([$this->getReference('Resto'), $this->getReference('Festi')]);
        $project22 -> setLanguages([$this->getReference('Ruby')]);
        $project22 -> setTechnologies([$this->getReference('Storm'), $this->getReference('Boot')]);
        $manager -> persist ( $project22 );
        $this->addReference('Project22', $project22 );

        $project23 = new Project();
        $project23 -> setSchool($this->getReference('Toulouse'));
        $project23 -> setDate(new \DateTime('2016-11-05'));
        $project23 -> setTitle('Ou trouver de la bonne bouf');
        $project23 -> setCustomer('Vero');
        $project23 -> setStatus('Attention fait grossir');
        $project23 -> setDescription('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $project23 -> setSummary('il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex');
        $project23 -> setCategory($this->getReference('AppMob'));
        $project23 -> setTags([$this->getReference('Resto'), $this->getReference('Festi')]);
        $project23 -> setLanguages([$this->getReference('Java'), $this->getReference('Swift')]);
        $project23 -> setTechnologies([$this->getReference('Storm'), $this->getReference('Boot')]);
        $manager -> persist ( $project23 );
        $this->addReference('Project23', $project23 );

        $project24 = new Project();
        $project24 -> setSchool($this->getReference('Toulouse'));
        $project24 -> setDate(new \DateTime('2016-11-05'));
        $project24 -> setTitle('Les bonne tartes de mami');
        $project24 -> setCustomer('Anonyme');
        $project24 -> setStatus('En Free sur votre store');
        $project24 -> setDescription('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $project24 -> setSummary('il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex');
        $project24 -> setCategory($this->getReference('AppMob'));
        $project24 -> setTags([$this->getReference('Resto'), $this->getReference('Festi')]);
        $project24 -> setLanguages([$this->getReference('Java'), $this->getReference('Swift')]);
        $project24 -> setTechnologies([$this->getReference('Storm'), $this->getReference('Boot')]);
        $manager -> persist ( $project24 );
        $this->addReference('Project24', $project24 );

        $project25 = new Project();
        $project25 -> setSchool($this->getReference('Strasbourg'));
        $project25 -> setDate(new \DateTime('2016-11-05'));
        $project25 -> setTitle('trouve le taxi le plus rapide');
        $project25 -> setCustomer('Max la menace');
        $project25 -> setStatus('Dispo sur le store');
        $project25 -> setDescription('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $project25 -> setSummary('il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex');
        $project25 -> setCategory($this->getReference('AppMob'));
        $project25 -> setTags([$this->getReference('Resto'), $this->getReference('Festi')]);
        $project25 -> setLanguages([$this->getReference('Java'), $this->getReference('SQL')]);
        $project25 -> setTechnologies([$this->getReference('Storm'), $this->getReference('Boot')]);
        $manager -> persist ( $project25 );
        $this->addReference('Project25', $project25 );

        $project26 = new Project();
        $project26 -> setSchool($this->getReference('Fontaine'));
        $project26 -> setDate(new \DateTime('2016-11-05'));
        $project26 -> setTitle('Les fleures de maxance');
        $project26 -> setCustomer('Maxance');
        $project26 -> setStatus('En attente du serveur');
        $project26 -> setDescription('Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui permet de penser à la cænogenèse de l\'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex æquo au whist, Ôtez ce vœu déçu. Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j\'enivre la squaw au pack de beau zythum. Ketch, yawl, jonque flambant neuve… jugez des prix ! Voyez le brick géant que j\'examine près du wharf. Portez ce vieux whisky au juge blond qui fume. Bâchez la queue du wagon-taxi avec les pyjamas du fakir. Voix ambiguë d\'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune. Perchez dix, vingt woks. Qu\'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu\'un vieux whisky blond pur malt fonce. Faux kwachas ? Quel projet de voyage zambien ! Fripon, mixez l\'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux. Vif P-DG mentor, exhibez la squaw jockey. Juge, flambez l\'exquis patchwork d\'Yvon.Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l\'alcôve ovoïde, où les bûches se consument dans l\'âtre, ce qui lui pe');
        $project26 -> setSummary('il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L\'île exiguë, Où l\'obèse jury mûr Fête l\'haï volapük, Âne ex');
        $project26 -> setCategory($this->getReference('SiteV'));
        $project26 -> setTags([$this->getReference('Resto'), $this->getReference('Festi')]);
        $project26 -> setLanguages([$this->getReference('Php')]);
        $project26 -> setTechnologies([$this->getReference('Storm'), $this->getReference('Boot')]);
        $manager -> persist ( $project26 );
        $this->addReference('Project26', $project26 );

        $manager -> flush ();

    }

    public function getOrder ()
    {

        return 11 ;
    }
}