<?php

namespace Aiki\SubscribeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Aiki\SubscribeBundle\Entity\Adherent;
use Aiki\SubscribeBundle\Form\AdherentAddChildType;

class SubscribeController extends Controller
{
    public function indexAction()
    {
        
        return $this->render('AikiSubscribeBundle:Subscribe:index.html.twig');
        
    }
    
    public function addAction()
    {
        $adherent = new Adherent;
        $adherent->setIschild(TRUE);
        $form = $this->createForm(new AdherentAddChildType, $adherent);
        
        $request = $this->get('request');
        
        if ($request->getMethod() == 'POST')
        {
            $form->bind($request);
            
            if ($form->isValid())
            {
                $em = $this->getDoctrine()->getManager();
                $em->persist($adherent);
                $em->flush();
                
                return $this->redirect($this->generateUrl('aiki_subscribe_homepage'));
            }
        }
        
        return $this->render('AikiSubscribeBundle:Subscribe:add.html.twig', array(
    'form' => $form->createView(),
        ));
    }
    
    public function traductionAction($name)
    {
        return $this->render('AikiSubscribeBundle:Subscribe:traduction.html.twig',
        array(
        'name' => $name
        ));
    }
}
