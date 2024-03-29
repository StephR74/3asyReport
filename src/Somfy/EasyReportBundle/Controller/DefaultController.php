<?php

/*
 * This file is part of the 3asyReport package.
 *
 * (c) Stephane Rapin <stephane.rapin@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Somfy\EasyReportBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * This is the "default controler". It's only used to root the user on the web
 * site home page.
 *
 * @author Stephane Rapin <stephane.rapin@gmail.com>
 */
class DefaultController extends Controller
{
    /**
     * Rooting the user on the web site home page (the default index page of
     * 3asyReport)
     */
    public function indexAction()
    {
        return $this->render('SomfyEasyReportBundle:Default:index.html.twig');
    }
}
