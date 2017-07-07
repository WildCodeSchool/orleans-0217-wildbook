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

                $user->setPlainPassword(md5(uniqid()));
                $user->setEnabled(false);
                $user->setRoles(['ROLE_USER']);
                $user->setConfirmationToken(md5(uniqid()));

//                $this->redirectToRoute('fos_user_resetting_send_email');


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
                $this->addFlash('success', 'Nouveau wilder enregistré ');

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
                $this->addFlash('success', 'Nouveau campus manager enregistré ');
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
        $wilder = $em->getRepository('BookBundle:Wilder')->findOneByUser($this->getUser());
        if (!isset($wilder)) {
            return $this->redirectToRoute('wilder_new');
        } else {
            return $this->render('user/indexWilder.html.twig', [
                'wilder' => $wilder
            ]);
        }

    }

    /**
     * @Route("/project-wilder-one-index", name="project_one_wilder_index")
     * @return \Symfony\Component\HttpFoundation\Response
     * @Security("has_role('ROLE_USER')")
     */
    public function indexProjectWilderAction()
    {
        $userId = $this->getUser()->getId();

        $em = $this->getDoctrine()->getManager();
        $projects = $em->getRepository('BookBundle:Project')->projectsByWilder($userId);
        if (!isset($projects)) {
            return $this->redirectToRoute('home_admin');
        } else {
            return $this->render('user/indexProject.html.twig', [
                'projects' => $projects
            ]);
        }

    }

    /**
     *
     * @Route("/campus-one-index", name="one_campus_index")
     * @return \Symfony\Component\HttpFoundation\Response
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function indexCampusAction()
    {
        $em = $this->getDoctrine()->getManager();
        $campusManager = $em->getRepository('BookBundle:CampusManager')->findOneByUser($this->getUser());
        if (!isset($campusManager)) {
            return $this->redirectToRoute('campusmanager_new');
        } else {
            return $this->render('user/indexCampusManager.html.twig', [
                'campusManager' => $campusManager
            ]);
        }

    }

}