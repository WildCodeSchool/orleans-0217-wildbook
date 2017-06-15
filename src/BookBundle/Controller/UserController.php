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
use Symfony\Component\HttpFoundation\Request;

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
//                $password = uniqid();
//                $user->setPlainPassword($password);
                $user->setPlainPassword('password');
                $user->setEnabled(true);
                $user->setRoles(array('ROLE_USER'));
                $userManager->updateUser($user);
                $em->persist($user);
                $em->flush();
                // mail à l'utilisateur créé avec envoi de $password non hashé
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
                $user->setPlainPassword('password');
                $user->setEnabled(true);
                $user->setRoles(array('ROLE_ADMIN'));
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