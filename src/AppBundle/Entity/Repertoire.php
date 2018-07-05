<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Repertoire
 *
 * @ORM\Table(name="repertoire")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RepertoireRepository")
 */
class Repertoire
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var bool
     *
     * @ORM\Column(name="sexe", type="boolean")
     */
    private $sexe;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer")
     */
    private $age;

    /**
     * @var int
     *
     * @ORM\Column(name="contact", type="integer")
     */
    private $contact;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseactuel", type="string", length=255)
     */
    private $adresseactuel;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=255, nullable=true)
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="commune", type="string", length=255, nullable=true)
     */
    private $commune;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datereceptiondossier", type="datetime")
     */
    private $datereceptiondossier;

    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="text")
     */
    private $observations;


    /**
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumn(name="categorie_id", referencedColumnName="id", nullable=true)
     */
    private $categorie;

    /**
     * @ORM\ManyToOne(targetEntity="Secteuractivite")
     * @ORM\JoinColumn(name="secteuractivite_id", referencedColumnName="id", nullable=true)
     */
    private $secteuractivite;


    /**
     * @ORM\ManyToOne(targetEntity="Domaineintervention")
     * @ORM\JoinColumn(name="domaineintervention_id", referencedColumnName="id", nullable=true)
     */
    private $domaineintervention;

    /**
     * @ORM\ManyToOne(targetEntity="Porteurprojet")
     * @ORM\JoinColumn(name="porteurprojet_id", referencedColumnName="id", nullable=true)
     */
    private $porteurprojet;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Repertoire
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Repertoire
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set sexe
     *
     * @param boolean $sexe
     *
     * @return Repertoire
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return bool
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return Repertoire
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set contact
     *
     * @param integer $contact
     *
     * @return Repertoire
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return int
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Repertoire
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set adresseactuel
     *
     * @param string $adresseactuel
     *
     * @return Repertoire
     */
    public function setAdresseactuel($adresseactuel)
    {
        $this->adresseactuel = $adresseactuel;

        return $this;
    }

    /**
     * Get adresseactuel
     *
     * @return string
     */
    public function getAdresseactuel()
    {
        return $this->adresseactuel;
    }

    /**
     * Set region
     *
     * @param string $region
     *
     * @return Repertoire
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set commune
     *
     * @param string $commune
     *
     * @return Repertoire
     */
    public function setCommune($commune)
    {
        $this->commune = $commune;

        return $this;
    }

    /**
     * Get commune
     *
     * @return string
     */
    public function getCommune()
    {
        return $this->commune;
    }

    /**
     * Set datereceptiondossier
     *
     * @param \DateTime $datereceptiondossier
     *
     * @return Repertoire
     */
    public function setDatereceptiondossier($datereceptiondossier)
    {
        $this->datereceptiondossier = $datereceptiondossier;

        return $this;
    }

    /**
     * Get datereceptiondossier
     *
     * @return \DateTime
     */
    public function getDatereceptiondossier()
    {
        return $this->datereceptiondossier;
    }

    /**
     * Set observations
     *
     * @param string $observations
     *
     * @return Repertoire
     */
    public function setObservations($observations)
    {
        $this->observations = $observations;

        return $this;
    }

    /**
     * Get observations
     *
     * @return string
     */
    public function getObservations()
    {
        return $this->observations;
    }

    /**
     * Set categorie
     *
     * @param \AppBundle\Entity\Categorie $categorie
     *
     * @return Repertoire
     */
    public function setCategorie(\AppBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \AppBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set secteuractivite
     *
     * @param \AppBundle\Entity\Secteuractivite $secteuractivite
     *
     * @return Repertoire
     */
    public function setSecteuractivite(\AppBundle\Entity\Secteuractivite $secteuractivite = null)
    {
        $this->secteuractivite = $secteuractivite;

        return $this;
    }

    /**
     * Get secteuractivite
     *
     * @return \AppBundle\Entity\Secteuractivite
     */
    public function getSecteuractivite()
    {
        return $this->secteuractivite;
    }

    /**
     * Set domaineintervention
     *
     * @param \AppBundle\Entity\Domaineintervention $domaineintervention
     *
     * @return Repertoire
     */
    public function setDomaineintervention(\AppBundle\Entity\Domaineintervention $domaineintervention = null)
    {
        $this->domaineintervention = $domaineintervention;

        return $this;
    }

    /**
     * Get domaineintervention
     *
     * @return \AppBundle\Entity\Domaineintervention
     */
    public function getDomaineintervention()
    {
        return $this->domaineintervention;
    }

    /**
     * Set porteurprojet
     *
     * @param \AppBundle\Entity\Porteurprojet $porteurprojet
     *
     * @return Repertoire
     */
    public function setPorteurprojet(\AppBundle\Entity\Porteurprojet $porteurprojet = null)
    {
        $this->porteurprojet = $porteurprojet;

        return $this;
    }

    /**
     * Get porteurprojet
     *
     * @return \AppBundle\Entity\Porteurprojet
     */
    public function getPorteurprojet()
    {
        return $this->porteurprojet;
    }
}
