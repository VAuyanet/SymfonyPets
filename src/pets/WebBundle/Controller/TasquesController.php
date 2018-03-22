<?php

namespace pets\WebBundle\Controller;

use pets\WebBundle\Entity\Tasques;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Tasques controller.
 *
 */
class TasquesController extends Controller
{
    /**
     * Lists all tasque entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tasques = $em->getRepository('petsWebBundle:Tasques')->findAll();

        return $this->render('petsWebBundle:tasques:index.html.twig', array(
            'tasques' => $tasques,
        ));
    }

    /**
     * Creates a new tasque entity.
     *
     */
    public function newAction(Request $request)
    {
        $tasque = new Tasques();
        $form = $this->createForm('pets\WebBundle\Form\TasquesType', $tasque);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tasque);
            $em->flush();

            return $this->redirectToRoute('tasques_show', array('idTasca' => $tasque->getIdtasca()));
        }

        return $this->render('petsWebBundle:tasques:new.html.twig', array(
            'tasque' => $tasque,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tasque entity.
     *
     */
    public function showAction(Tasques $tasque)
    {
        $deleteForm = $this->createDeleteForm($tasque);

        return $this->render('petsWebBundle:tasques:show.html.twig', array(
            'tasque' => $tasque,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tasque entity.
     *
     */
    public function editAction(Request $request, Tasques $tasque)
    {
        $deleteForm = $this->createDeleteForm($tasque);
        $editForm = $this->createForm('pets\WebBundle\Form\TasquesType', $tasque);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tasques_edit', array('idTasca' => $tasque->getIdtasca()));
        }

        return $this->render('petsWebBundle:tasques:edit.html.twig', array(
            'tasque' => $tasque,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tasque entity.
     *
     */
    public function deleteAction(Request $request, Tasques $tasque)
    {
        $form = $this->createDeleteForm($tasque);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tasque);
            $em->flush();
        }

        return $this->redirectToRoute('tasques_index');
    }

    /**
     * Creates a form to delete a tasque entity.
     *
     * @param Tasques $tasque The tasque entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tasques $tasque)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tasques_delete', array('idTasca' => $tasque->getIdtasca())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
    public function llistaTasquesDepartamentAction($idDepartament)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $titol="Llista tasques departament X";
        $query = $entityManager->createQuery(
            'SELECT t
        FROM petsWebBundle:Tasques t
        WHERE t.departament= '.$idDepartament.' '
        );
        $tasques = $query->getResult();  
        $sql = $entityManager->createQuery(
            'SELECT d.nom
        FROM petsWebBundle:Departament d
        WHERE d.idDepartament= '.$idDepartament.' '
        );
        $nomDepartament = $sql->getResult();

        return $this->render('petsWebBundle:tasques:index.html.twig', array( 'titol' => $titol, 'tasques' =>$tasques, 'nomDepartament' => $nomDepartament[0]['nom'] ));
    }
}
