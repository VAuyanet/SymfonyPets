<?php

namespace pets\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use pets\WebBundle\Form\UsuarisType;
use pets\WebBundle\Entity\Usuaris;
use Symfony\Component\HttpFoundation\Request;

class FormsUsuarisController extends Controller
{
    public function createAction(Request $request)
    {
        $usuari = new Usuaris(); 
        $form = $this->createForm(UsuarisType::class, $usuari);
        
        $form->handleRequest($request);
        if($form->isValid()){
            $titolForm = "Form usuaris";
            $status = "Formulari vàlid";
            $data = array(
            'nom' => $form->get('nom')->getData(),
            'cognoms' => $form->get('cognoms')->getData(),
            'email' => $form->get('email')->getData(),
            'perfil' => $form->get('perfil')->getData(),
            'password' => $form->get('password')->getData(),
            'departament' => $form->get('departament')->getData(),
            );
        } else{
            $titolForm = null;
            $status = null;
            $data = null;
        }
        return $this->render('petsWebBundle:Forms:formUsuaris.html.twig', array( 'status' => $status, 'data' => $data, 'titol' => $titolForm, 'form' =>$form->createView() ));
    }
}



