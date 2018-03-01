<?php

namespace pets\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use pets\WebBundle\Form\TasquesType;
use pets\WebBundle\Entity\Tasques;
use Symfony\Component\HttpFoundation\Request;

class FormsTasquesController extends Controller
{
    public function createTasquesAction(Request $request)
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
        $estat="";
        if($form->isValid()){
            $tasca->setTitol($form->get('titol')->getData());
            $tasca->setDescripcio($form->get('descripcio')->getData());
            $tasca->setDataInici($form->get('data_inici')->getData());
            $tasca->setDataFinal($form->get('data_final')->getData());
            $tasca->setEstat($form->get('estat')->getData());
            $tasca->setPrioritat($form->get('prioritat')->getData());
            $tasca->setDepartament($form->get('departament')->getData());
            //fem el mateix per la resta d'atributs
            //cridem a l'entity manager
            $em = $this->getDoctrine()->getManager();
            //persistim les dades (les guardem dins doctrine)
            $em->persist($tasca);
            //executem el flush per guardar en la BDD
            $flush = $em->flush();
            
            if($flush != null){
                $estat = "Tasca inserida";
            }else{
                $estat = "Tasca no inserida";
            } 
        
        }
        return $this->render('petsWebBundle:Forms:formTasques.html.twig', array( 'status' => $status, 'data' => $data, 'titol' => $titolForm, 'form' =>$form->createView(), 'estat' => $estat ));
        
    }
    
    
    public function searchTasquesAction(Request $request)
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
        $estat="";
         if($form->isValid()){
             //cridem a l'entity manager
             $em = $this->getDoctrine()->getManager();
             //crearem el repositori de tasques
             $usuaris_repo = $em->getRepository("petsWebBundle:Tasques");
             //cerquem la tasca per id
             $id = $form->get('id_tasca')->getData();
             $tasca = $tasques_repo->find($id);
             
             if($usuari != null){
                 $estat = "Tasca trobada";
             }else{  
                 $estat = "Tasca no trobada";
             }
            
        
        }
        return $this->render('petsWebBundle:Forms:formTasques.html.twig', array( 'status' => $status, 'data' => $data, 'titol' => $titolForm, 'form' =>$form->createView(), 'estat' => $estat  ));
        
    }
    
    
    
}
    
    
    
