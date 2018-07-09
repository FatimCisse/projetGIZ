<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Domaineintervention;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Domaineintervention controller.
 *
 * @Route("domaineintervention")
 */
class DomaineinterventionController extends Controller
{
    /**
     * Lists all domaineintervention entities.
     *
     * @Route("/", name="domaineintervention_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $domaineinterventions = $em->getRepository('AppBundle:Domaineintervention')->findAll();

        return $this->render('domaineintervention/index.html.twig', array(
            'domaineinterventions' => $domaineinterventions,
        ));
    }

    /**
     * Creates a new domaineintervention entity.
     *
     * @Route("/new", name="domaineintervention_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $domaineintervention = new Domaineintervention();
        $form = $this->createForm('AppBundle\Form\DomaineinterventionType', $domaineintervention);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($domaineintervention);
            $em->flush();

            return $this->redirectToRoute('domaineintervention_show', array('id' => $domaineintervention->getId()));
        }

        return $this->render('domaineintervention/new.html.twig', array(
            'domaineintervention' => $domaineintervention,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a domaineintervention entity.
     *
     * @Route("/{id}", name="domaineintervention_show")
     * @Method("GET")
     */
    public function showAction(Domaineintervention $domaineintervention)
    {
        $deleteForm = $this->createDeleteForm($domaineintervention);

        return $this->render('domaineintervention/show.html.twig', array(
            'domaineintervention' => $domaineintervention,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing domaineintervention entity.
     *
     * @Route("/{id}/edit", name="domaineintervention_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Domaineintervention $domaineintervention)
    {
        $deleteForm = $this->createDeleteForm($domaineintervention);
        $editForm = $this->createForm('AppBundle\Form\DomaineinterventionType', $domaineintervention);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('domaineintervention_edit', array('id' => $domaineintervention->getId()));
        }

        return $this->render('domaineintervention/edit.html.twig', array(
            'domaineintervention' => $domaineintervention,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a domaineintervention entity.
     *
     * @Route("/{id}", name="domaineintervention_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Domaineintervention $domaineintervention)
    {
        $form = $this->createDeleteForm($domaineintervention);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($domaineintervention);
            $em->flush();
        }

        return $this->redirectToRoute('domaineintervention_index');
    }

    /**
     * Creates a form to delete a domaineintervention entity.
     *
     * @param Domaineintervention $domaineintervention The domaineintervention entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Domaineintervention $domaineintervention)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('domaineintervention_delete', array('id' => $domaineintervention->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
