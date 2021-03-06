<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
 *
 * @ORM\Table(name="projet")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProjetRepository")
 */
class Projet
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="secteur_activites", type="string", length=255)
     */
    private $secteurActivites;

    /**
     * @var string
     *
     * @ORM\Column(name="type_activites", type="string", length=255)
     */
    private $typeActivites;

    /**
     * @var string
     *
     * @ORM\Column(name="idee_projet", type="text")
     */
    private $ideeProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="besoins", type="text")
     */
    private $besoins;

    /**
     * @var string
     *
     * @ORM\Column(name="partenaires", type="text")
     */
    private $partenaires;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_demarrage", type="datetime")
     */
    private $dateDemarrage;

    /**
     * @var string
     *
     * @ORM\Column(name="attentes", type="text")
     */
    private $attentes;

    /**
     * @var string
     *
     * @ORM\Column(name="remarque_staff", type="text")
     */
    private $remarqueStaff;


    public function __toString()
    {
        return $this->titre;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Projet
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set secteurActivites
     *
     * @param string $secteurActivites
     *
     * @return Projet
     */
    public function setSecteurActivites($secteurActivites)
    {
        $this->secteurActivites = $secteurActivites;

        return $this;
    }

    /**
     * Get secteurActivites
     *
     * @return string
     */
    public function getSecteurActivites()
    {
        return $this->secteurActivites;
    }

    /**
     * Set typeActivites
     *
     * @param string $typeActivites
     *
     * @return Projet
     */
    public function setTypeActivites($typeActivites)
    {
        $this->typeActivites = $typeActivites;

        return $this;
    }

    /**
     * Get typeActivites
     *
     * @return string
     */
    public function getTypeActivites()
    {
        return $this->typeActivites;
    }

    /**
     * Set ideeProjet
     *
     * @param string $ideeProjet
     *
     * @return Projet
     */
    public function setIdeeProjet($ideeProjet)
    {
        $this->ideeProjet = $ideeProjet;

        return $this;
    }

    /**
     * Get ideeProjet
     *
     * @return string
     */
    public function getIdeeProjet()
    {
        return $this->ideeProjet;
    }

    /**
     * Set besoins
     *
     * @param string $besoins
     *
     * @return Projet
     */
    public function setBesoins($besoins)
    {
        $this->besoins = $besoins;

        return $this;
    }

    /**
     * Get besoins
     *
     * @return string
     */
    public function getBesoins()
    {
        return $this->besoins;
    }

    /**
     * Set partenaires
     *
     * @param string $partenaires
     *
     * @return Projet
     */
    public function setPartenaires($partenaires)
    {
        $this->partenaires = $partenaires;

        return $this;
    }

    /**
     * Get partenaires
     *
     * @return string
     */
    public function getPartenaires()
    {
        return $this->partenaires;
    }

    /**
     * Set dateDemarrage
     *
     * @param \DateTime $dateDemarrage
     *
     * @return Projet
     */
    public function setDateDemarrage($dateDemarrage)
    {
        $this->dateDemarrage = $dateDemarrage;

        return $this;
    }

    /**
     * Get dateDemarrage
     *
     * @return \DateTime
     */
    public function getDateDemarrage()
    {
        return $this->dateDemarrage;
    }

    /**
     * Set attentes
     *
     * @param string $attentes
     *
     * @return Projet
     */
    public function setAttentes($attentes)
    {
        $this->attentes = $attentes;

        return $this;
    }

    /**
     * Get attentes
     *
     * @return string
     */
    public function getAttentes()
    {
        return $this->attentes;
    }

    /**
     * Set remarqueStaff
     *
     * @param string $remarqueStaff
     *
     * @return Projet
     */
    public function setRemarqueStaff($remarqueStaff)
    {
        $this->remarqueStaff = $remarqueStaff;

        return $this;
    }

    /**
     * Get remarqueStaff
     *
     * @return string
     */
    public function getRemarqueStaff()
    {
        return $this->remarqueStaff;
    }
}
