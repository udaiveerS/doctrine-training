<?php

namespace Uda\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/BlogBundle")
     */
    public function indexAction()
    {
        return $this->render('BlogBundle:Default:index.html.twig');
    }
}
