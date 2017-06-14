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
use BookBundle\Entity\ProjectWilder ;


class LoadProjectWilderData  extends AbstractFixture implements OrderedFixtureInterface
{
    public function load ( ObjectManager $manager )
    {
        $prWild1 = new ProjectWilder();
        $prWild1->setProject($this->getReference('Project1'));
        $prWild1->setWilder($this->getReference('Wilder1'));
        $prWild1->setVisibility(true);
        $manager -> persist ( $prWild1 );

        $prWild2 = new ProjectWilder();
        $prWild2->setProject($this->getReference('Project1'));
        $prWild2->setWilder($this->getReference('Wilder2'));
        $prWild2->setVisibility(true);
        $manager -> persist ( $prWild2 );

        $prWild3 = new ProjectWilder();
        $prWild3->setProject($this->getReference('Project1'));
        $prWild3->setWilder($this->getReference('Wilder3'));
        $prWild3->setVisibility(true);
        $manager -> persist ( $prWild3 );

        $prWild4 = new ProjectWilder();
        $prWild4->setProject($this->getReference('Project1'));
        $prWild4->setWilder($this->getReference('Wilder4'));
        $prWild4->setVisibility(true);
        $manager -> persist ( $prWild4 );

        $prWild5 = new ProjectWilder();
        $prWild5->setProject($this->getReference('Project2'));
        $prWild5->setWilder($this->getReference('Wilder5'));
        $prWild5->setVisibility(true);
        $manager -> persist ( $prWild5 );

        $prWild6 = new ProjectWilder();
        $prWild6->setProject($this->getReference('Project2'));
        $prWild6->setWilder($this->getReference('Wilder6'));
        $prWild6->setVisibility(true);
        $manager -> persist ( $prWild6 );

        $prWild7 = new ProjectWilder();
        $prWild7->setProject($this->getReference('Project3'));
        $prWild7->setWilder($this->getReference('Wilder7'));
        $prWild7->setVisibility(true);
        $manager -> persist ( $prWild7 );

        $prWild8 = new ProjectWilder();
        $prWild8->setProject($this->getReference('Project3'));
        $prWild8->setWilder($this->getReference('Wilder8'));
        $prWild8->setVisibility(true);
        $manager -> persist ( $prWild8 );

        $prWild9 = new ProjectWilder();
        $prWild9->setProject($this->getReference('Project3'));
        $prWild9->setWilder($this->getReference('Wilder9'));
        $prWild9->setVisibility(true);
        $manager -> persist ( $prWild9 );

        $prWild10 = new ProjectWilder();
        $prWild10->setProject($this->getReference('Project4'));
        $prWild10->setWilder($this->getReference('Wilder10'));
        $prWild10->setVisibility(true);
        $manager -> persist ( $prWild10 );

        $prWild11 = new ProjectWilder();
        $prWild11->setProject($this->getReference('Project4'));
        $prWild11->setWilder($this->getReference('Wilder11'));
        $prWild11->setVisibility(true);
        $manager -> persist ( $prWild11 );

        $prWild12 = new ProjectWilder();
        $prWild12->setProject($this->getReference('Project5'));
        $prWild12->setWilder($this->getReference('Wilder12'));
        $prWild12->setVisibility(true);
        $manager -> persist ( $prWild12 );

        $prWild13 = new ProjectWilder();
        $prWild13->setProject($this->getReference('Project5'));
        $prWild13->setWilder($this->getReference('Wilder1'));
        $prWild13->setVisibility(true);
        $manager -> persist ( $prWild13 );

        $prWild14 = new ProjectWilder();
        $prWild14->setProject($this->getReference('Project5'));
        $prWild14->setWilder($this->getReference('Wilder2'));
        $prWild14->setVisibility(true);
        $manager -> persist ( $prWild14 );

        $prWild15 = new ProjectWilder();
        $prWild15->setProject($this->getReference('Project5'));
        $prWild15->setWilder($this->getReference('Wilder3'));
        $prWild15->setVisibility(true);
        $manager -> persist ( $prWild15 );

        $prWild16 = new ProjectWilder();
        $prWild16->setProject($this->getReference('Project6'));
        $prWild16->setWilder($this->getReference('Wilder4'));
        $prWild16->setVisibility(true);
        $manager -> persist ( $prWild16 );

        $prWild17 = new ProjectWilder();
        $prWild17->setProject($this->getReference('Project6'));
        $prWild17->setWilder($this->getReference('Wilder5'));
        $prWild17->setVisibility(true);
        $manager -> persist ( $prWild17 );

        $prWild18 = new ProjectWilder();
        $prWild18->setProject($this->getReference('Project6'));
        $prWild18->setWilder($this->getReference('Wilder6'));
        $prWild18->setVisibility(true);
        $manager -> persist ( $prWild18 );

        $prWild19 = new ProjectWilder();
        $prWild19->setProject($this->getReference('Project6'));
        $prWild19->setWilder($this->getReference('Wilder7'));
        $prWild19->setVisibility(true);
        $manager -> persist ( $prWild19 );

        $prWild20 = new ProjectWilder();
        $prWild20->setProject($this->getReference('Project7'));
        $prWild20->setWilder($this->getReference('Wilder8'));
        $prWild20->setVisibility(true);
        $manager -> persist ( $prWild20 );

        $prWild21 = new ProjectWilder();
        $prWild21->setProject($this->getReference('Project7'));
        $prWild21->setWilder($this->getReference('Wilder9'));
        $prWild21->setVisibility(true);
        $manager -> persist ( $prWild21 );

        $prWild22 = new ProjectWilder();
        $prWild22->setProject($this->getReference('Project8'));
        $prWild22->setWilder($this->getReference('Wilder10'));
        $prWild22->setVisibility(true);
        $manager -> persist ( $prWild22 );

        $prWild23 = new ProjectWilder();
        $prWild23->setProject($this->getReference('Project8'));
        $prWild23->setWilder($this->getReference('Wilder11'));
        $prWild23->setVisibility(true);
        $manager -> persist ( $prWild23 );

        $prWild24 = new ProjectWilder();
        $prWild24->setProject($this->getReference('Project9'));
        $prWild24->setWilder($this->getReference('Wilder12'));
        $prWild24->setVisibility(true);
        $manager -> persist ( $prWild24 );

        $prWild25 = new ProjectWilder();
        $prWild25->setProject($this->getReference('Project9'));
        $prWild25->setWilder($this->getReference('Wilder1'));
        $prWild25->setVisibility(true);
        $manager -> persist ( $prWild25 );

        $prWild26 = new ProjectWilder();
        $prWild26->setProject($this->getReference('Project9'));
        $prWild26->setWilder($this->getReference('Wilder2'));
        $prWild26->setVisibility(true);
        $manager -> persist ( $prWild26 );

        $prWild27 = new ProjectWilder();
        $prWild27->setProject($this->getReference('Project9'));
        $prWild27->setWilder($this->getReference('Wilder3'));
        $prWild27->setVisibility(true);
        $manager -> persist ( $prWild27 );

        $prWild28 = new ProjectWilder();
        $prWild28->setProject($this->getReference('Project10'));
        $prWild28->setWilder($this->getReference('Wilder4'));
        $prWild28->setVisibility(true);
        $manager -> persist ( $prWild28 );

        $prWild29 = new ProjectWilder();
        $prWild29->setProject($this->getReference('Project10'));
        $prWild29->setWilder($this->getReference('Wilder5'));
        $prWild29->setVisibility(true);
        $manager -> persist ( $prWild29 );

        $prWild30 = new ProjectWilder();
        $prWild30->setProject($this->getReference('Project10'));
        $prWild30->setWilder($this->getReference('Wilder6'));
        $prWild30->setVisibility(true);
        $manager -> persist ( $prWild30 );

        $prWild31 = new ProjectWilder();
        $prWild31->setProject($this->getReference('Project11'));
        $prWild31->setWilder($this->getReference('Wilder13'));
        $prWild31->setVisibility(true);
        $manager -> persist ( $prWild31 );

        $prWild32 = new ProjectWilder();
        $prWild32->setProject($this->getReference('Project11'));
        $prWild32->setWilder($this->getReference('Wilder14'));
        $prWild32->setVisibility(true);
        $manager -> persist ( $prWild32 );

        $prWild33 = new ProjectWilder();
        $prWild33->setProject($this->getReference('Project11'));
        $prWild33->setWilder($this->getReference('Wilder15'));
        $prWild33->setVisibility(true);
        $manager -> persist ( $prWild33 );

        $prWild34 = new ProjectWilder();
        $prWild34->setProject($this->getReference('Project12'));
        $prWild34->setWilder($this->getReference('Wilder16'));
        $prWild34->setVisibility(true);
        $manager -> persist ( $prWild34 );

        $prWild35 = new ProjectWilder();
        $prWild35->setProject($this->getReference('Project12'));
        $prWild35->setWilder($this->getReference('Wilder14'));
        $prWild35->setVisibility(true);
        $manager -> persist ( $prWild35 );

        $prWild36 = new ProjectWilder();
        $prWild36->setProject($this->getReference('Project13'));
        $prWild36->setWilder($this->getReference('Wilder17'));
        $prWild36->setVisibility(true);
        $manager -> persist ( $prWild36 );

        $prWild37 = new ProjectWilder();
        $prWild37->setProject($this->getReference('Project13'));
        $prWild37->setWilder($this->getReference('Wilder18'));
        $prWild37->setVisibility(true);
        $manager -> persist ( $prWild37 );

        $prWild38 = new ProjectWilder();
        $prWild38->setProject($this->getReference('Project13'));
        $prWild38->setWilder($this->getReference('Wilder19'));
        $prWild38->setVisibility(true);
        $manager -> persist ( $prWild38 );

        $prWild39 = new ProjectWilder();
        $prWild39->setProject($this->getReference('Project13'));
        $prWild39->setWilder($this->getReference('Wilder20'));
        $prWild39->setVisibility(true);
        $manager -> persist ( $prWild39 );

        $prWild40 = new ProjectWilder();
        $prWild40->setProject($this->getReference('Project14'));
        $prWild40->setWilder($this->getReference('Wilder21'));
        $prWild40->setVisibility(true);
        $manager -> persist ( $prWild40 );

        $prWild41 = new ProjectWilder();
        $prWild41->setProject($this->getReference('Project14'));
        $prWild41->setWilder($this->getReference('Wilder22'));
        $prWild41->setVisibility(true);
        $manager -> persist ( $prWild41 );

        $prWild42 = new ProjectWilder();
        $prWild42->setProject($this->getReference('Project14'));
        $prWild42->setWilder($this->getReference('Wilder23'));
        $prWild42->setVisibility(true);
        $manager -> persist ( $prWild42 );

        $prWild43 = new ProjectWilder();
        $prWild43->setProject($this->getReference('Project15'));
        $prWild43->setWilder($this->getReference('Wilder24'));
        $prWild43->setVisibility(true);
        $manager -> persist ( $prWild43 );

        $prWild44 = new ProjectWilder();
        $prWild44->setProject($this->getReference('Project15'));
        $prWild44->setWilder($this->getReference('Wilder17'));
        $prWild44->setVisibility(true);
        $manager -> persist ( $prWild44 );

        $prWild45 = new ProjectWilder();
        $prWild45->setProject($this->getReference('Project15'));
        $prWild45->setWilder($this->getReference('Wilder18'));
        $prWild45->setVisibility(true);
        $manager -> persist ( $prWild45 );

        $prWild46 = new ProjectWilder();
        $prWild46->setProject($this->getReference('Project15'));
        $prWild46->setWilder($this->getReference('Wilder19'));
        $prWild46->setVisibility(true);
        $manager -> persist ( $prWild46 );

        $prWild47 = new ProjectWilder();
        $prWild47->setProject($this->getReference('Project16'));
        $prWild47->setWilder($this->getReference('Wilder20'));
        $prWild47->setVisibility(true);
        $manager -> persist ( $prWild47 );

        $prWild48 = new ProjectWilder();
        $prWild48->setProject($this->getReference('Project16'));
        $prWild48->setWilder($this->getReference('Wilder21'));
        $prWild48->setVisibility(true);
        $manager -> persist ( $prWild48 );


        $prWild49 = new ProjectWilder();
        $prWild49->setProject($this->getReference('Project17'));
        $prWild49->setWilder($this->getReference('Wilder25'));
        $prWild49->setVisibility(true);
        $manager -> persist ( $prWild49 );

        $prWild50 = new ProjectWilder();
        $prWild50->setProject($this->getReference('Project17'));
        $prWild50->setWilder($this->getReference('Wilder26'));
        $prWild50->setVisibility(true);
        $manager -> persist ( $prWild50 );


        $prWild51 = new ProjectWilder();
        $prWild51->setProject($this->getReference('Project17'));
        $prWild51->setWilder($this->getReference('Wilder27'));
        $prWild51->setVisibility(true);
        $manager -> persist ( $prWild51 );


        $prWild52 = new ProjectWilder();
        $prWild52->setProject($this->getReference('Project17'));
        $prWild52->setWilder($this->getReference('Wilder28'));
        $prWild52->setVisibility(true);
        $manager -> persist ( $prWild52 );


        $prWild53 = new ProjectWilder();
        $prWild53->setProject($this->getReference('Project18'));
        $prWild53->setWilder($this->getReference('Wilder29'));
        $prWild53->setVisibility(true);
        $manager -> persist ( $prWild53 );


        $prWild54 = new ProjectWilder();
        $prWild54->setProject($this->getReference('Project18'));
        $prWild54->setWilder($this->getReference('Wilder30'));
        $prWild54->setVisibility(true);
        $manager -> persist ( $prWild54 );


        $prWild55 = new ProjectWilder();
        $prWild55->setProject($this->getReference('Project18'));
        $prWild55->setWilder($this->getReference('Wilder25'));
        $prWild55->setVisibility(true);
        $manager -> persist ( $prWild55 );


        $prWild56 = new ProjectWilder();
        $prWild56->setProject($this->getReference('Project19'));
        $prWild56->setWilder($this->getReference('Wilder26'));
        $prWild56->setVisibility(true);
        $manager -> persist ( $prWild56 );


        $prWild57 = new ProjectWilder();
        $prWild57->setProject($this->getReference('Project19'));
        $prWild57->setWilder($this->getReference('Wilder27'));
        $prWild57->setVisibility(true);
        $manager -> persist ( $prWild57 );


        $prWild58 = new ProjectWilder();
        $prWild58->setProject($this->getReference('Project19'));
        $prWild58->setWilder($this->getReference('Wilder28'));
        $prWild58->setVisibility(true);
        $manager -> persist ( $prWild58 );

        $prWild59 = new ProjectWilder();
        $prWild59->setProject($this->getReference('Project19'));
        $prWild59->setWilder($this->getReference('Wilder30'));
        $prWild59->setVisibility(true);
        $manager -> persist ( $prWild59 );


        $prWild60 = new ProjectWilder();
        $prWild60->setProject($this->getReference('Project20'));
        $prWild60->setWilder($this->getReference('Wilder33'));
        $prWild60->setVisibility(true);
        $manager -> persist ( $prWild60 );

        $prWild61 = new ProjectWilder();
        $prWild61->setProject($this->getReference('Project20'));
        $prWild61->setWilder($this->getReference('Wilder34'));
        $prWild61->setVisibility(true);
        $manager -> persist ( $prWild61 );

        $prWild62 = new ProjectWilder();
        $prWild62->setProject($this->getReference('Project20'));
        $prWild62->setWilder($this->getReference('Wilder35'));
        $prWild62->setVisibility(true);
        $manager -> persist ( $prWild62 );

        $prWild63 = new ProjectWilder();
        $prWild63->setProject($this->getReference('Project20'));
        $prWild63->setWilder($this->getReference('Wilder36'));
        $prWild63->setVisibility(true);
        $manager -> persist ( $prWild63 );

        $prWild64 = new ProjectWilder();
        $prWild64->setProject($this->getReference('Project21'));
        $prWild64->setWilder($this->getReference('Wilder37'));
        $prWild64->setVisibility(true);
        $manager -> persist ( $prWild64 );

        $prWild65 = new ProjectWilder();
        $prWild65->setProject($this->getReference('Project21'));
        $prWild65->setWilder($this->getReference('Wilder34'));
        $prWild65->setVisibility(true);
        $manager -> persist ( $prWild65 );

        $prWild66 = new ProjectWilder();
        $prWild66->setProject($this->getReference('Project21'));
        $prWild66->setWilder($this->getReference('Wilder35'));
        $prWild66->setVisibility(true);
        $manager -> persist ( $prWild66 );

        $prWild67 = new ProjectWilder();
        $prWild67->setProject($this->getReference('Project21'));
        $prWild67->setWilder($this->getReference('Wilder36'));
        $prWild67->setVisibility(true);
        $manager -> persist ( $prWild67 );

        $prWild68 = new ProjectWilder();
        $prWild68->setProject($this->getReference('Project22'));
        $prWild68->setWilder($this->getReference('Wilder38'));
        $prWild68->setVisibility(true);
        $manager -> persist ( $prWild68 );

        $prWild69 = new ProjectWilder();
        $prWild69->setProject($this->getReference('Project22'));
        $prWild69->setWilder($this->getReference('Wilder39'));
        $prWild69->setVisibility(true);
        $manager -> persist ( $prWild69 );

        $prWild70 = new ProjectWilder();
        $prWild70->setProject($this->getReference('Project23'));
        $prWild70->setWilder($this->getReference('Wilder40'));
        $prWild70->setVisibility(true);
        $manager -> persist ( $prWild70 );

        $prWild71 = new ProjectWilder();
        $prWild71->setProject($this->getReference('Project23'));
        $prWild71->setWilder($this->getReference('Wilder41'));
        $prWild71->setVisibility(true);
        $manager -> persist ( $prWild71 );

        $prWild72 = new ProjectWilder();
        $prWild72->setProject($this->getReference('Project23'));
        $prWild72->setWilder($this->getReference('Wilder42'));
        $prWild72->setVisibility(true);
        $manager -> persist ( $prWild72 );

        $prWild73 = new ProjectWilder();
        $prWild73->setProject($this->getReference('Project24'));
        $prWild73->setWilder($this->getReference('Wilder43'));
        $prWild73->setVisibility(true);
        $manager -> persist ( $prWild73 );

        $prWild74 = new ProjectWilder();
        $prWild74->setProject($this->getReference('Project24'));
        $prWild74->setWilder($this->getReference('Wilder44'));
        $prWild74->setVisibility(true);
        $manager -> persist ( $prWild74 );

        $prWild75 = new ProjectWilder();
        $prWild75->setProject($this->getReference('Project24'));
        $prWild75->setWilder($this->getReference('Wilder45'));
        $prWild75->setVisibility(true);
        $manager -> persist ( $prWild75 );

        $prWild76 = new ProjectWilder();
        $prWild76->setProject($this->getReference('Project25'));
        $prWild76->setWilder($this->getReference('Wilder44'));
        $prWild76->setVisibility(true);
        $manager -> persist ( $prWild76 );

        $prWild77 = new ProjectWilder();
        $prWild77->setProject($this->getReference('Project26'));
        $prWild77->setWilder($this->getReference('Wilder31'));
        $prWild77->setVisibility(true);
        $manager -> persist ( $prWild77 );

        $prWild78 = new ProjectWilder();
        $prWild78->setProject($this->getReference('Project26'));
        $prWild78->setWilder($this->getReference('Wilder32'));
        $prWild78->setVisibility(true);
        $manager -> persist ( $prWild78 );

        $manager -> flush ();
    }

    public function getOrder ()
    {

        return 18 ;
    }
}