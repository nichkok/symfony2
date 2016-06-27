<?php
/**
 * Created by PhpStorm.
 * User: dinobot
 * Date: 28.04.2016
 * Time: 14:15
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Goods;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class GoodsController extends Controller
{
    /**
     * @Route("/good/show")
     */
    public function showAction()
    {
        $good=$this->getDoctrine()->getRepository('AppBundle:Goods')->showByPricesTypeAction(1);
        return $this->render('good/show.html.twig',['good'=>$good]);
    }
}