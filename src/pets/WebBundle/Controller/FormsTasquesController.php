<?php

namespace pets\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use pets\WebBundle\Form\TasquesType;
use pets\WebBundle\Form\SearchTasquesType;
use pets\WebBundle\Entity\Tasques;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class FormsTasquesController extends Controller
{
    public function createTasquesAction(Request $request)
    {
        $tasca = new Tasques(); 
        $form = $this->createForm(TasquesType::class, $tasca); 


        $form->handleRequest($request);
        if($form->isValid()){
            $titolForm = "Form Create Tasques";
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

            if($flush == null){
                $estat = "Tasca inserida";
            }else{
                $estat = "Tasca no inserida";
            } 
            $form = $this->createForm(TasquesType::class, $tasca); 

        }
        return $this->render('petsWebBundle:Forms:formTasques.html.twig', array( 'status' => $status, 'data' => $data, 'titol' => $titolForm, 'form' =>$form->createView(), 'estat' => $estat ));

    }


    public function searchTasquesAction(Request $request)
    {
        $tasca = new Tasques(); 
        $form = $this->createForm(SearchTasquesType::class, $tasca); 


        $form->handleRequest($request);
        /*if($form->isValid()){
            $titolForm = "Form Search Tasques";
            $status = "Formulari vàlid";
            $data = array(
                'idTasca' => $form->get('idTasca')->getData(),
            );
        } else{
            $titolForm = null;
            $status = null;
            $data = null;
        }*/
        $estat="";

        if($form->isValid()){
            //cridem a l'entity manager
            $em = $this->getDoctrine()->getManager();
            //crearem el repositori de tasques
            $tasques_repo = $em->getRepository("petsWebBundle:Tasques");
            //cerquem la tasca per id
            $id = $form->get('idTasca')->getData();
            $tasca = $tasques_repo->find($id);

            if($tasca != null){
                $estat = "Tasca trobada";
            }else{  
                $estat = "Tasca no trobada";
            }


        }
        return $this->render('petsWebBundle:Forms:formSearchTasques.html.twig', array( 'form' =>$form->createView(), 'estat' => $estat, 'tasca' => $tasca  ));

    }



    public function deleteTasquesAction(Request $request)
    {
        $tasca = new Tasques(); 
        $estat="";
        if($form->isValid()){
            //cridem a l'entity manager
            $em = $this->getDoctrine()->getManager();
            //crearem el repositori de tasques
            $tasques_repo = $em->getRepository("petsWebBundle:Tasques");
            //cerquem la tasca per id
            $id = $form->get('idTasca')->getData();
            $tasca = $tasques_repo->find($id);
            $em->remove($tasca);
            $flush = $em->flush();
            if($flush != null){
                $estat = "Tasca eliminada";
            }else{  
                $estat = "Tasca no eliminada";
            }

        }
        return $this->render('petsWebBundle:Forms:formSearchTasques.html.twig', array( 'data' => $data, 'titol' => $titolForm, 'form' =>$form->createView(), 'estat' => $estat ));

    }



    public function updateTasquesAction(Request $request)
    {

    }

    public function llistaTasquesAction(Request $request)
    {
        /*$conn = $this->getEntityManager()->getConnection();

        $sql = '
        SELECT * FROM tasques 
        ';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();*/



        $entityManager = $this->getDoctrine()->getManager();

       $titol="Llista tasques";
       $query = $entityManager->createQuery(
        'SELECT t
        FROM petsWebBundle:Tasques t'
       );
        $tasques = $query->getResult();  

        return $this->render('petsWebBundle:Llistes:llistaTasques.html.twig', array( 'titol' => $titol, 'tasques' =>$tasques ));


    }






}



