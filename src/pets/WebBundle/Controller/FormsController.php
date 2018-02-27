<?php

namespace pets\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Entity\Usuaris;

class FormsController extends Controller
{
    public function createAction()
    {
        $titol = "Form usuaris"; 
        $usuari = new Usuaris(); 
        $form = $this->createForm(UsuarisType::class, $usuari); 
        return $this->render('petsWebBundle:Forms:formUsuaris.html.twig', array( 'titol' => $titol, 'form' =>$form->createView() ));
    }
}



