<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Secteuractivite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Secteuractivite controller.
 *
 * @Route("secteuractivite")
 */
class SecteuractiviteController extends Controller
{
    /**
     * Lists all secteuractivite entities.
     *
     * @Route("/", name="secteuractivite_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $secteuractivites = $em->getRepository('AppBundle:Secteuractivite')->findAll();

        return $this->render('secteuractivite/index.html.twig', array(
            'secteuractivites' => $secteuractivites,
        ));
    }

    /**
     * Finds and displays a secteuractivite entity.
     *
     * @Route("/{id}", name="secteuractivite_show")
     * @Method("GET")
     */
    public function showAction(Secteuractivite $secteuractivite)
    {

        return $this->render('secteuractivite/show.html.twig', array(
            'secteuractivite' => $secteuractivite,
        ));
    }
}
