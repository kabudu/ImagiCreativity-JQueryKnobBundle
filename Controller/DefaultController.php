<?php

namespace ImagiCreativity\Bundle\JqueryKnobBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ImagiCreativityJqueryKnobBundle:Default:index.html.twig', array('name' => $name));
    }
}
