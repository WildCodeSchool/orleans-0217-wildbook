<?php
/**
 * Created by PhpStorm.
 * User: wilder7
 * Date: 12/06/17
 * Time: 22:23
 */

namespace BookBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Admin controller.
 *
 * @Route("admin")
 */
class AdminController extends Controller
{

    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('layout_admin.html.twig');
    }

    /**
     * @Route("/login/")
     */
    public function loginSuccessAction()
    {


    }

}