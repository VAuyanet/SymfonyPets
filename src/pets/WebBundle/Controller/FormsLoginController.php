<?php

namespace pets\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use pets\WebBundle\Form\LoginType;
use pets\WebBundle\Entity\Usuaris;
use Symfony\Component\HttpFoundation\Request;

class FormsLoginController extends Controller
{
     public function searchLoginAction(Request $request)
    {
        $usuari = new Usuaris(); 
        $form = $this->createForm(LoginType::class, $usuari);
        
        $form->handleRequest($request);
        if($form->isValid()){
            $titolForm = "Login";
            $status = "Formulari vàlid";
            $data = array(
            'email' => $form->get('email')->getData(),
            'password' => $form->get('password')->getData(),
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
             $usuaris_repo = $em->getRepository("petsWebBundle:Usuaris");
             //cerquem la tasca per id
             $id = $form->get('idUsuari')->getData();
             $tasca = $tasques_repo->find($id);
             
             if($usuari != null){
                 $estat = "Usuari trobat";
             }else{  
                 $estat = "Usuari no trobat";
             }
            
        $form = $this->createForm(LoginType::class, $usuari);

        }
        return $this->render('petsWebBundle:Forms:formLogin.html.twig', array( 'status' => $status, 'data' => $data, 'titol' => $titolForm, 'form' =>$form->createView(), 'estat' => $estat  ));
        
    }
    
    
    
}



