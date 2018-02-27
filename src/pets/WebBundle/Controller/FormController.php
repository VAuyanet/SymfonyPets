<?php

namespace pets\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function createAction()
    {
        return $this->render('petsWebBundle:FormUsuaris:formUsuaris.html.twig');
    }
}
