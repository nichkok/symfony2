<?php

namespace Demos\BlogBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class CenaController
{
    public function indexAction($id)
{
      /**
     * @Route("/cena/{id}")
     */  
$price = $repository->find($id);
->getRepository('DemosBlogBundle:price')
->find($id);
 if (!$prices) {
     
throw $this->createNotFoundException('No product found for id '.$id);
 
 }

    }
    
}
