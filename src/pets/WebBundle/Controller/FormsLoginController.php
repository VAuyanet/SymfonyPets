<?php

namespace pets\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use pets\WebBundle\Form\LoginType;
use pets\WebBundle\Entity\Usuaris;
use Symfony\Component\HttpFoundation\Request;

class FormsLoginController extends Controller
{
    public function loginAction(Request $request)
    {
        $usuari = new Usuaris(); 
        $form = $this->createForm(LoginType::class, $usuari);
        $estat="";
        $status="";
        $data="";
        $titol="";
        $form->handleRequest($request);
        if($form->isValid()){
            $email = $form->get('email')->getData();
            $password = $form->get('password')->getData();

            $em = $this->getDoctrine()->getManager();
            $usuaris_repo = $em->getRepository("petsWebBundle:Usuaris");
//            $id = $form->get('idUsuari')->getData();
            //$usuari = $usuaris_repo->find($id);
            $usuari = $usuaris_repo->findOneBy([
                'email' => $email,
                'password' => $password,
            ]);
            if($usuari != null){
                return $this->redirectToRoute('pets_web_usuaris');
                $estat ="login correcte";
            }else{  
                return $this->render('petsWebBundle:Forms:formLogin.html.twig', array( 'status' => $status, 'data' => $data, 'titol' => $titolForm, 'form' =>$form->createView(), 'estat' => $estat  ));
            }

            $form = $this->createForm(LoginType::class, $usuari);

        }
        return $this->render('petsWebBundle:Forms:formLogin.html.twig', array( 'status' => $status, 'data' => $data, 'titol' => $titol, 'form' =>$form->createView(), 'estat' => $estat  ));

    }



}



