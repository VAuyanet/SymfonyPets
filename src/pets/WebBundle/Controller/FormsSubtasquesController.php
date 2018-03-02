<?php

namespace pets\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use pets\WebBundle\Form\SubtasquesType;
use pets\WebBundle\Form\SearchSubtasquesType;
use pets\WebBundle\Entity\Subtasques;
use Symfony\Component\HttpFoundation\Request;


class FormsSubtasquesController extends Controller
{
    public function createSubtasquesAction(Request $request)
    {
        $subtasca = new Subtasques(); 
        $form = $this->createForm(SubtasquesType::class, $subtasca);

        $form->handleRequest($request);
        if($form->isValid()){
            $titolForm = "Form Create Subtasques";
            $status = "Formulari vàlid";
            $data = array(
                'titol' => $form->get('titol')->getData(),
                'descripcio' => $form->get('descripcio')->getData(),
                'data_inici' => $form->get('dataInici')->getData(),
                'data_final' => $form->get('dataFinal')->getData(),
               'prioritat' => $form->get('prioritat')->getData(),
                'usuaris' => $form->get('usuaris')->getData(),
                'id_tasca' => $form->get('idTasca')->getData(),
            );
        } else{
            $titolForm = null;
            $status = null;
            $data = null;
        }

        $estat="";
        if($form->isValid()){
            $subtasca->setTitol($form->get('titol')->getData());
            $subtasca->setDescripcio($form->get('descripcio')->getData());
            $subtasca->setDataInici($form->get('dataInici')->getData());
            $subtasca->setDataFinal($form->get('dataFinal')->getData());
            $subtasca->setPrioritat($form->get('prioritat')->getData());
            $subtasca->setUsuaris($form->get('usuaris')->getData());
            $subtasca->setIdTasca($form->get('idTasca')->getData());
            //fem el mateix per la resta d'atributs
            //cridem a l'entity manager
            $em = $this->getDoctrine()->getManager();
            //persistim les dades (les guardem dins doctrine)
            $em->persist($subtasca);
            //executem el flush per guardar en la BDD
            $flush = $em->flush();

            if($flush != null){
                $estat = "Subtasca inserida";
            }else{
                $estat = "Subtasca no inserida";
            } 


        }
        return $this->render('petsWebBundle:Forms:formSubtasques.html.twig', array( 'status' => $status, 'data' => $data, 'titol' => $titolForm, 'form' =>$form->createView() ));
    }
    
    public function searchSubtasquesAction(Request $request)
    {
        $tasca = new Subtasques(); 
        $form = $this->createForm(SearchSubtasquesType::class, $tasca); 
        

        $form->handleRequest($request);
        if($form->isValid()){
            $titolForm = "Form Search Subtasques";
            $status = "Formulari vàlid";
            $data = array(
            'id_subtasca' => $form->get('id_subtasca')->getData(),
                );
        } else{
            $titolForm = null;
            $status = null;
            $data = null;
        }
        $estat="";
         if($form->isValid()){
             //cridem a l'entity manager
             $em = $this->getDoctrine()->getManager();
             //crearem el repositori de tasques
             $usuaris_repo = $em->getRepository("petsWebBundle:Subtasques");
             //cerquem la tasca per id
             $id = $form->get('id_tasca')->getData();
             $tasca = $tasques_repo->find($id);
             
             if($usuari != null){
                 $estat = "Subtasca trobada";
             }else{  
                 $estat = "Subtasca no trobada";
             }
            
        
        }
        return $this->render('petsWebBundle:Forms:formSearchSubtasques.html.twig', array( 'status' => $status, 'data' => $data, 'titol' => $titolForm, 'form' =>$form->createView(), 'estat' => $estat  ));
        
    }
}