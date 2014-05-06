<?php

namespace Aiki\SubscribeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SuscribeController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AikiSubscribeBundle:Suscribe:index.html.twig', array('name' => $name));
    }
}
