<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 27/06/2016
 * Time: 11:02
 */
namespace ResaBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

Class MainController extends Controller
{
    /**
     * @param Request $request
     *
     * @Route("/index", name="homepage")
     */
    public function MainController(Request $request)
    {
        return $this->render("@Resa/Default/index.html.twig");
    }
}