<?php

namespace pets\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use pets\WebBundle\Form\SubtasquesType;
use pets\WebBundle\Entity\Subtasques;
use Symfony\Component\HttpFoundation\Request;


class FormsSubtasquesController extends Controller
{
    public function createAction()
    {
        $subtasca = new Subtasques(); 
        $form = $this->createForm(SubtasquesType::class, $subtasca);
        
        $form->handleRequest($request);
        if($form->isValid()){
            $titolForm = "Form subtasques";
            $status = "Formulari vàlid";
            $data = array(
            'titol' => $form->get('titol')->getData(),
            'descripcio' => $form->get('descripcio')->getData(),
            'data_inici' => $form->get('data_inici')->getData(),
            'data_final' => $form->get('data_final')->getData(),
            'estat' => $form->get('estat')->getData(),
            'prioritat' => $form->get('prioritat')->getData(),
            'usuaris' => $form->get('usuaris')->getData(),
            'id_tasca' => $form->get('id_tasca')->getData(),
            );
        } else{
            $titolForm = null;
            $status = null;
            $data = null;
        }
        return $this->render('petsWebBundle:Forms:formSubtasques.html.twig', array( 'status' => $status, 'data' => $data, 'titol' => $titolForm, 'form' =>$form->createView() ));
    }
}
