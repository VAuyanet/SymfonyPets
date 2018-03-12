<?php

namespace pets\WebBundle\Controller;

use pets\WebBundle\Entity\Subtasques;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Subtasques controller.
 *
 */
class SubtasquesController extends Controller
{
    /**
     * Lists all subtasque entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $subtasques = $em->getRepository('petsWebBundle:Subtasques')->findAll();

        return $this->render('petsWebBundle:subtasques:index.html.twig', array(
            'subtasques' => $subtasques,
        ));
    }

    /**
     * Creates a new subtasque entity.
     *
     */
    public function newAction(Request $request)
    {
        $subtasque = new Subtasques();
        $form = $this->createForm('pets\WebBundle\Form\SubtasquesType', $subtasque);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($subtasque);
            $em->flush();

            return $this->redirectToRoute('subtasques_show', array('idSubtasca' => $subtasque->getIdsubtasca()));
        }

        return $this->render('petsWebBundle:subtasques:new.html.twig', array(
            'subtasque' => $subtasque,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a subtasque entity.
     *
     */
    public function showAction(Subtasques $subtasque)
    {
        $deleteForm = $this->createDeleteForm($subtasque);

        return $this->render('petsWebBundle:subtasques:show.html.twig', array(
            'subtasque' => $subtasque,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing subtasque entity.
     *
     */
    public function editAction(Request $request, Subtasques $subtasque)
    {
        $deleteForm = $this->createDeleteForm($subtasque);
        $editForm = $this->createForm('pets\WebBundle\Form\SubtasquesType', $subtasque);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('subtasques_edit', array('idSubtasca' => $subtasque->getIdsubtasca()));
        }

        return $this->render('petsWebBundle:subtasques:edit.html.twig', array(
            'subtasque' => $subtasque,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a subtasque entity.
     *
     */
    public function deleteAction(Request $request, Subtasques $subtasque)
    {
        $form = $this->createDeleteForm($subtasque);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($subtasque);
            $em->flush();
        }

        return $this->redirectToRoute('subtasques_index');
    }

    /**
     * Creates a form to delete a subtasque entity.
     *
     * @param Subtasques $subtasque The subtasque entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Subtasques $subtasque)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('subtasques_delete', array('idSubtasca' => $subtasque->getIdsubtasca())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
