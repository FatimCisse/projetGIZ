<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Porteurprojet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Porteurprojet controller.
 *
 * @Route("porteurprojet")
 */
class PorteurprojetController extends Controller
{
    /**
     * Lists all porteurprojet entities.
     *
     * @Route("/", name="porteurprojet_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $porteurprojets = $em->getRepository('AppBundle:Porteurprojet')->findAll();

        return $this->render('porteurprojet/index.html.twig', array(
            'porteurprojets' => $porteurprojets,
        ));
    }

    /**
     * Creates a new porteurprojet entity.
     *
     * @Route("/new", name="porteurprojet_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $porteurprojet = new Porteurprojet();
        $form = $this->createForm('AppBundle\Form\PorteurprojetType', $porteurprojet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($porteurprojet);
            $em->flush();

            return $this->redirectToRoute('porteurprojet_show', array('id' => $porteurprojet->getId()));
        }

        return $this->render('porteurprojet/new.html.twig', array(
            'porteurprojet' => $porteurprojet,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a porteurprojet entity.
     *
     * @Route("/{id}", name="porteurprojet_show")
     * @Method("GET")
     */
    public function showAction(Porteurprojet $porteurprojet)
    {
        $deleteForm = $this->createDeleteForm($porteurprojet);

        return $this->render('porteurprojet/show.html.twig', array(
            'porteurprojet' => $porteurprojet,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing porteurprojet entity.
     *
     * @Route("/{id}/edit", name="porteurprojet_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Porteurprojet $porteurprojet)
    {
        $deleteForm = $this->createDeleteForm($porteurprojet);
        $editForm = $this->createForm('AppBundle\Form\PorteurprojetType', $porteurprojet);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('porteurprojet_edit', array('id' => $porteurprojet->getId()));
        }

        return $this->render('porteurprojet/edit.html.twig', array(
            'porteurprojet' => $porteurprojet,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a porteurprojet entity.
     *
     * @Route("/{id}", name="porteurprojet_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Porteurprojet $porteurprojet)
    {
        $form = $this->createDeleteForm($porteurprojet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($porteurprojet);
            $em->flush();
        }

        return $this->redirectToRoute('porteurprojet_index');
    }

    /**
     * Creates a form to delete a porteurprojet entity.
     *
     * @param Porteurprojet $porteurprojet The porteurprojet entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Porteurprojet $porteurprojet)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('porteurprojet_delete', array('id' => $porteurprojet->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
