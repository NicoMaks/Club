<?php

namespace Aiki\SubscribeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SuscribeController extends Controller
{
    public function indexAction()
    {
        return $this->render('AikiSubscribeBundle:Suscribe:index.html.twig');
    }
}
