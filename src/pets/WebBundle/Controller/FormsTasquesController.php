<?php

namespace pets\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use pets\WebBundle\Form\TasquesType;
use pets\WebBundle\Entity\Tasques;

class FormsTasquesController extends Controller
{
    public function createAction()
    {
        $titol = "Form tasques";
        $tasca = new Tasques(); 
        $form = $this->createForm(TasquesType::class, $tasca); 
        return $this->render('petsWebBundle:Forms:formTasques.html.twig', array( 'titol' => $titol, 'form' =>$form->createView() ));
    }
}



