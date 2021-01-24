<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($firstName, $lastName) # have to match with url variables of routing
    {
        $wife = 'Emilie';
        return $this->render('EcommerceBundle:Default:index.html.twig', array('firstname' => $firstName, 'lastname' => $lastName, 'wife' => $wife));
        # $this->render = views folder
        # EcommerceBundle:Default = EcommerceBundle/Default folder
        # return index view from "views/Default" folder with array and its "value => case" content
    }
}
