<?php

namespace IR\JqueryFileuploadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('IRJqueryFileuploadBundle:Default:index.html.twig', array('name' => $name));
    }
}
