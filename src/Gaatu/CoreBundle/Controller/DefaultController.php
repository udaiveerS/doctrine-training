<?php

namespace Gaatu\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/core")
     */
    public function indexAction()
    {
        return $this->render('GaatuCoreBundle:Default:index.html.twig');
    }
}
