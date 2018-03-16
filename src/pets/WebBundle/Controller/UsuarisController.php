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

        $usuaris = $em->getRepository('petsWebBundle:Usuaris')->findAll();

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
            $usuari->setPassword(crypt($usuari->getPassword()));
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

        return $this->render('petsWebBundle:usuaris:show.html.twig', array(
            'usuari' => $usuari,
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
}
