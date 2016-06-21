<?php

namespace Demos\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Demos\BlogBundle\Entity\Post;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('DemosBlogBundle:Default:index.html.twig');
    }
    /**
* @Route("/create")
*/
public function createAction() {
$post = new Post();
$post->setTitle('Demo Blog');
$post->setBody('Hello Symfony 2');
$post->setCreatedDate(new \DateTime("now"));
$post->setUpdatedDate(new \DateTime('now'));

$em = $this->getDoctrine()->getEntityManager();
$em->persist($post);
$em->flush();

return new Response('Created product id ' . $post->getId());
}
    
    /**
     * @Route("/show/{id}")
     * @Template()
     */
    public function showAction($id)
    {
        $post = $this->getDoctrine()
                ->getRepository('DemosBlogBundle:Post')
                ->find($id);
if ( ! is_array($id) || count($id) <= 1) {
// @todo FIXME: Not correct. Relies on specific order.
 $post = is_array($id) ? array_values($id) : array($id);
$id = array_combine($this->_class->identifier, $post);
 }
        return array('post' => $post);
    }
}
