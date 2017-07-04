<?php
/**
 * Created by PhpStorm.
 * User: wilder7
 * Date: 14/06/17
 * Time: 16:48
 */

namespace BookBundle\Controller;

use BookBundle\Entity\User;
use BookBundle\Entity\Wilder;
use FOS\UserBundle\Model\User as BaseUser;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Controller\ResettingController;
use FOS\UserBundle\Mailer;
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
 */
class UserController extends Controller
{
    /**
     * Lists all user entities.
     *
     * @Route("/", name="user_index")
     * @Method("GET")
     * @Security("has_role('ROLE_ADMIN')")
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('BookBundle:User')->findAll();

        return $this->render('user/index.html.twig', [
            'users' => $users,
        ]);
    }

    /**
     * Creates a new User entity.
     *
     * @Route("/new", name="user_new")
     * @Method({"GET", "POST"})
     * @Security("has_role('ROLE_ADMIN')")
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
//                $user->setRoles(['ROLE_USER']);

                $user->setPlainPassword(md5(uniqid()));
                $user->setEnabled(false);
                $user->setRoles(['ROLE_USER']);
                $user->setConfirmationToken(md5(uniqid()));


                $message = \Swift_Message::newInstance()
                    ->setSubject('registration')
                    ->setFrom($this->getParameter('mailer_user'))
                    ->setTo($user->getEmail())
                    ->setBody(
                        $this->renderView('BookBundle:FinishRegistration:registration_email.html.twig',
                            ['token' => $user->getConfirmationToken()]),
                        'text/html'
                    );
                $this->get('mailer')->send($message);

                $userManager->updateUser($user);
                $em->persist($user);
                $em->flush();

            }


            return $this->redirectToRoute('user_index');
        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);

    }

    /**
     * Creates a new User entity.
     *
     * @Route("/new/admin", name="user_admin_new")
     * @Method({"GET", "POST"})
     * @Security("has_role('ROLE_ADMIN')")
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

                $user->setPlainPassword(md5(uniqid()));
                $user->setEnabled(false);
                $user->setRoles(['ROLE_ADMIN']);
                $user->setConfirmationToken(md5(uniqid()));

                $message = \Swift_Message::newInstance()
                    ->setSubject('registration')
                    ->setFrom($this->getParameter('mailer_user'))
                    ->setTo($user->getEmail())
                    ->setBody(
                        $this->renderView('BookBundle:FinishRegistration:registration_email.html.twig',
                            ['token' => $user->getConfirmationToken()]),
                        'text/html'
                    );
                $this->get('mailer')->send($message);

                $userManager->updateUser($user);
                $em->persist($user);
                $em->flush();
            }
            return $this->redirectToRoute('user_index');
        }

        return $this->render('user/new_admin.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     *
     * @Route("/one-index", name="one_wilder_index")
     * @return \Symfony\Component\HttpFoundation\Response
     * @Security("has_role('ROLE_USER')")
     */
    public function indexWilderAction()
    {
        $em = $this->getDoctrine()->getManager();
        $wild = $em->getRepository('BookBundle:Wilder')->findByUser($this->getUser());
        if (!isset($wild[0])) {
            return $this->redirectToRoute('wilder_new');
        } else {
            $wilder = $wild[0];
            return $this->render('user/indexWilder.html.twig', [
                'wilder' => $wilder
            ]);
        }
    }

}