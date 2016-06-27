<?php


namespace AppBundle\Controller;

use AppBundle\Entity\Goods;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class GoodController extends Controller
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