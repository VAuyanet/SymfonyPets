<?php

namespace pets\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use pets\WebBundle\Form\TasquesType;
use pets\WebBundle\Entity\Tasques;
use Symfony\Component\HttpFoundation\Request;

class FormsTasquesController extends Controller
{
    public function createAction(Request $request)
    {
        $tasca = new Tasques(); 
        $form = $this->createForm(TasquesType::class, $tasca); 
        

        $form->handleRequest($request);
        if($form->isValid()){
            $titolForm = "Form tasques";
            $status = "Formulari vàlid";
            $data = array(
            'titol' => $form->get('titol')->getData(),
            'descripcio' => $form->get('descripcio')->getData(),
            'data_inici' => $form->get('data_inici')->getData(),
            'data_final' => $form->get('data_final')->getData(),
            'estat' => $form->get('estat')->getData(),
            'prioritat' => $form->get('prioritat')->getData(),
            'departament' => $form->get('departament')->getData(),
            );
        } else{
            $titolForm = null;
            $status = null;
            $data = null;
        }
        return $this->render('petsWebBundle:Forms:formTasques.html.twig', array( 'status' => $status, 'data' => $data, 'titol' => $titolForm, 'form' =>$form->createView() ));
    }
}
