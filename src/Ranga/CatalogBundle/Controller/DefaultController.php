<?php

namespace Ranga\CatalogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RangaCatalogBundle:Default:index.html.twig', array('name' => $name));
    }
}
