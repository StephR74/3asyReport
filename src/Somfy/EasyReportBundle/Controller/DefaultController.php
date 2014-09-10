<?php

namespace Somfy\EasyReportBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SomfyEasyReportBundle:Default:index.html.twig');
    }
}
