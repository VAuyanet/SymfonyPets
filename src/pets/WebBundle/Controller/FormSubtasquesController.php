<?php

namespace pets\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use pets\WebBundle\Form\SubtasquesType;
use pets\WebBundle\Entity\Subtasques;
use Symfony\Component\HttpFoundation\Request;


class FormsSubtasquesController extends Controller
{
    public function createAction(Request $request)
    {
        $titol = "Form subtasques";
        $subtasca = new Subtasques(); 
        $form = $this->createForm(SubtasquesType::class, $subtasca); 
        return $this->render('petsWebBundle:Forms:formSubtasques.html.twig', array( 'titol' => $titol, 'form' =>$form->createView() ));
    }
}
