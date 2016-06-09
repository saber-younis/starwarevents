<?php

namespace Yoda\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpFoundation\Response;
use Yoda\EventBundle\Entity\Event;

class DefaultController extends Controller
{
    public function indexAction($firstName, $count)
    {

        $em = $this->getDoctrine()->getManager();

        $repo = $em->getRepository('EventBundle:Event');

        $event = $repo->findOneBy(array(
            'name' => 'test'
            ));

        return $this->render(
            'EventBundle:Default:index.html.twig',
            array(
                'name' => $firstName,
                'count' => $count,
                'event' => $event
            )
        );

    }
}
