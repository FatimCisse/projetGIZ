<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Repertoire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Repertoire controller.
 *
 * @Route("repertoire")
 */
class RepertoireController extends Controller
{
    /**
     * Lists all repertoire entities.
     *
     * @Route("/", name="repertoire_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $repertoires = $em->getRepository('AppBundle:Repertoire')->findAll();

        return $this->render('repertoire/index.html.twig', array(
            'repertoires' => $repertoires,
        ));
    }

    /**
     * Creates a new repertoire entity.
     *
     * @Route("/new", name="repertoire_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $repertoire = new Repertoire();
        $form = $this->createForm('AppBundle\Form\RepertoireType', $repertoire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($repertoire);
            $em->flush();

            return $this->redirectToRoute('repertoire_show', array('id' => $repertoire->getId()));
        }

        return $this->render('repertoire/new.html.twig', array(
            'repertoire' => $repertoire,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a repertoire entity.
     *
     * @Route("/{id}", name="repertoire_show")
     * @Method("GET")
     */
    public function showAction(Repertoire $repertoire)
    {
        $deleteForm = $this->createDeleteForm($repertoire);

        return $this->render('repertoire/show.html.twig', array(
            'repertoire' => $repertoire,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing repertoire entity.
     *
     * @Route("/{id}/edit", name="repertoire_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Repertoire $repertoire)
    {
        $deleteForm = $this->createDeleteForm($repertoire);
        $editForm = $this->createForm('AppBundle\Form\RepertoireType', $repertoire);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('repertoire_edit', array('id' => $repertoire->getId()));
        }

        return $this->render('repertoire/edit.html.twig', array(
            'repertoire' => $repertoire,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a repertoire entity.
     *
     * @Route("/{id}", name="repertoire_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Repertoire $repertoire)
    {
        $form = $this->createDeleteForm($repertoire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($repertoire);
            $em->flush();
        }

        return $this->redirectToRoute('repertoire_index');
    }

    /**
     * Creates a form to delete a repertoire entity.
     *
     * @param Repertoire $repertoire The repertoire entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Repertoire $repertoire)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('repertoire_delete', array('id' => $repertoire->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
