<?php
/**
 * Created by PhpStorm.
 * User: wilder7
 * Date: 18/06/17
 * Time: 11:36
 */

namespace BookBundle\Controller;

use BookBundle\Entity\User;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\Common\Persistence\ObjectManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * FinishRegistrationController controller.
 *
 */
class FinishRegistrationController extends Controller
{
    /**
     *
     * @Route("/registration/finish/{token}", name="finish_registration")
     */
    public function finishRegistrationAction($token, Request $request)
    {
        $userManager = $this->get("fos_user.user_manager");
        $user = $userManager->findUserBy(array("confirmationToken" => $token));

        if($request->isMethod("POST")){
            if($request->get("plainPassword") != null && !empty($request->get("plainPassword"))){
                $user->setPlainPassword($request->get("plainPassword"));
                $user->setEnabled(true);

                $userManager->updateUser($user);

                return $this->redirect($this->generateUrl("fos_user_security_login"));
            }
        }

        return $this->render('BookBundle:FinishRegistration:finish_registration.html.twig');


    }

}