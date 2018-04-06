<?php

namespace pets\WebBundle\Controller;

use pets\WebBundle\Entity\Usuaris;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Usuari controller.
 *
 */
class UsuarisController extends Controller
{
    /**
     * Lists all usuaris entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        //$usuaris = $em->getRepository('petsWebBundle:Usuaris')->findAll();
        $query = $em->createQuery(
            'SELECT u.idUsuari, u.nom, u.cognoms, u.email, u.role, u.password, u.departament, d.nom as nomD
                FROM petsWebBundle:Usuaris u
               INNER JOIN petsWebBundle:Departament d WITH d.idDepartament = u.departament 
            ');
        $usuaris = $query->getResult();  

        return $this->render('petsWebBundle:usuaris:index.html.twig', array(
            'usuaris' => $usuaris,
        ));
    }

    /**
     * Creates a new usuari entity.
     *
     */
    public function newAction(Request $request)
    {
        $usuari = new Usuaris();
        $form = $this->createForm('pets\WebBundle\Form\UsuarisType', $usuari);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $usuari->setPassword(crypt($usuari->getPassword(), null));
            $em = $this->getDoctrine()->getManager();
            $em->persist($usuari);
            $em->flush();

            return $this->redirectToRoute('usuaris_show', array('idUsuari' => $usuari->getIdusuari()));
        }

        return $this->render('petsWebBundle:usuaris:new.html.twig', array(
            'usuari' => $usuari,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a usuari entity.
     *
     */
    public function showAction(Usuaris $usuari)
    {
        $deleteForm = $this->createDeleteForm($usuari);
        
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT u.idUsuari, u.nom, u.cognoms, u.email, u.role, u.password, u.departament, d.nom as nom
                FROM petsWebBundle:Usuaris u
               INNER JOIN petsWebBundle:Departament d WITH d.idDepartament = u.departament 
                           WHERE u.idUsuari= '.$usuari->getIdUsuari().' 
            ');
        $usuaris = $query->getResult(); 
        
        return $this->render('petsWebBundle:usuaris:show.html.twig', array(
            'usuari' => $usuari,
            'usuaris' => $usuaris,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing usuari entity.
     *
     */
    public function editAction(Request $request, Usuaris $usuari)
    {
        $deleteForm = $this->createDeleteForm($usuari);
        $editForm = $this->createForm('pets\WebBundle\Form\UsuarisType', $usuari);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('usuaris_edit', array('idUsuari' => $usuari->getIdusuari()));
        }

        return $this->render('petsWebBundle:usuaris:edit.html.twig', array(
            'usuari' => $usuari,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a usuari entity.
     *
     */
    public function deleteAction(Request $request, Usuaris $usuari)
    {
        $form = $this->createDeleteForm($usuari);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($usuari);
            $em->flush();
        }

        return $this->redirectToRoute('usuaris_index');
    }

    /**
     * Creates a form to delete a usuari entity.
     *
     * @param Usuaris $usuari The usuari entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Usuaris $usuari)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('usuaris_delete', array('idUsuari' => $usuari->getIdusuari())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }

    public function llistaUsuarisDepartamentAction($idDepartament)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $titol="Llista usuaris departament X";
        $query = $entityManager->createQuery(
            'SELECT t
        FROM petsWebBundle:Usuaris t
        WHERE t.departament= '.$idDepartament.' '
        );
        $usuaris = $query->getResult();  
        $sql = $entityManager->createQuery(
            'SELECT d.nom
        FROM petsWebBundle:Departament d
        WHERE d.idDepartament= '.$idDepartament.' '
        );
        $nomDepartament = $sql->getResult();

        return $this->render('petsWebBundle:usuaris:llistaUsuarisDepartament.html.twig', array( 'titol' => $titol, 'usuaris' =>$usuaris, 'nomDepartament' => $nomDepartament[0]['nom'] ));
    }
}
