<?php
/**
 * Created by PhpStorm.
 * User: wilder7
 * Date: 14/06/17
 * Time: 16:48
 */

namespace BookBundle\Controller;

use BookBundle\Entity\User;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\Common\Persistence\ObjectManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Swift_Message;

/**
 * User controller.
 *
 * @Route("user")
 * @Security("has_role('ROLE_ADMIN')")
 */
class UserController extends Controller
{
    /**
     * Lists all user entities.
     *
     * @Route("/", name="user_index")
     * @Method("GET")
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('BookBundle:User')->findAll();

        return $this->render('user/index.html.twig', array(
            'users' => $users,
        ));
    }

    /**
     * Creates a new User entity.
     *
     * @Route("/new", name="user_new")
     * @Method({"GET", "POST"})
     *
     */
    public function newAction(Request $request)
    {
        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->createUser();
        $form = $this->createForm('BookBundle\Form\UserType', $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $email_exist = $userManager->findUserByEmail($user->getEmail());
            if ($email_exist) {
                return $this->redirectToRoute('user_index');
            } else {
                $em = $this->getDoctrine()->getManager();
//                $user->setPlainPassword('password');
//                $user->setEnabled(true);
//                $user->setRoles(array('ROLE_USER'));

                $user->setPlainPassword(md5(uniqid()));
                $user->setEnabled(false);
                $user->setRoles(array('ROLE_USER'));
                $user->setConfirmationToken(md5(uniqid()));

                $message = \Swift_Message::newInstance()
                    ->setSubject('registration')
                    ->setFrom('veronique.jollivel@gmail.com')
                    ->setTo($user->getEmail())
                    ->setBody(
                        $this->renderView('BookBundle:FinishRegistration:registration_email.html.twig',
                            array('token'=> $user->getConfirmationToken())),
                        'text/html'
                    );
                $this->get('mailer')->send($message);

                $userManager->updateUser($user);
                $em->persist($user);
                $em->flush();

            }


            return $this->redirectToRoute('user_index');
        }

        return $this->render('user/new.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
        ));

    }

    /**
     * Creates a new User entity.
     *
     * @Route("/new/admin", name="user_admin_new")
     * @Method({"GET", "POST"})
     *
     */
    public function newAdminAction(Request $request)
    {
        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->createUser();
        $form = $this->createForm('BookBundle\Form\UserType', $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $email_exist = $userManager->findUserByEmail($user->getEmail());
            if ($email_exist) {
                return $this->redirectToRoute('user_index');
            } else {
                $em = $this->getDoctrine()->getManager();
//                $user->setPlainPassword('password');
//                $user->setEnabled(true);
//                $user->setRoles(array('ROLE_ADMIN'));

                $user->setPlainPassword(md5(uniqid()));
                $user->setEnabled(false);
                $user->setRoles(array('ROLE_ADMIN'));
                $user->setConfirmationToken(md5(uniqid()));

                $message = \Swift_Message::newInstance()
                    ->setSubject('registration')
                    ->setFrom('mailer_user')
                    ->setTo($user->getEmail())
                    ->setBody(
                        $this->renderView('BookBundle:FinishRegistration:registration_email.html.twig',
                            array('token'=> $user->getConfirmationToken())),
                        'text/html'
                    );
                $this->get('mailer')->send($message);

                $userManager->updateUser($user);
                $em->persist($user);
                $em->flush();
            }
            return $this->redirectToRoute('user_index');
        }

        return $this->render('user/new_admin.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
        ));
    }
}