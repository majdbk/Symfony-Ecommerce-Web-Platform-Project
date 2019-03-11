<?php

namespace Esprit\DemandeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EspritDemandeBundle:Default:index.html.twig', array('name' => $name));
    }
}
