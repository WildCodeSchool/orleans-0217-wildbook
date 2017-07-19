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

        $manager -> flush ();

    }

    public function getOrder ()
    {

        return 11 ;
    }
}