<?php

namespace PG\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     *
     * @return Response
     */
    public function indexAction()
    {
        return $this->render('PGMainBundle:Default:index.html.twig', array('name' => 'lol'));
    }
}
