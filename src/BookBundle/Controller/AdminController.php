<?php
/**
 * Created by PhpStorm.
 * User: wilder7
 * Date: 02/06/17
 * Time: 17:11
 */

namespace BookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\BrowserKit\Request;

class AdminController extends Controller
{
    /**
     * @Route("/accueiladmin", name="accueil_admin")
     */
    public function indexAction()
    {
        return $this->render('BookBundle:Admin:homepage.html.twig');
    }

    /**
     * @Route("/admin", name="admin_page")
     */
    public function adminPageAction()
    {
        return $this->render('BookBundle:Admin:admin.html.twig');
    }

    /**
     * @Route("/adminwilder", name="adminwilder_page")
     *
     *
     */
    public function wilderPageAction()
    {
        return $this->render('BookBundle:Admin:wilder.html.twig');
    }

    /**
     * @Route("/login_ok", name="login_ok")
     *
     */
    public function showUserAction()
    {
        return $this->render('BookBundle:Admin:loginsuccess.html.twig');
    }

}