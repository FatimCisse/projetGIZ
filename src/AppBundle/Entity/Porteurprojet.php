<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Porteurprojet
 *
 * @ORM\Table(name="porteurprojet")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PorteurprojetRepository")
 */
class Porteurprojet
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
     * @ORM\Column(name="nom_pme", type="string", length=255)
     */
    private $nomPme;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_complet_promoteur", type="string", length=255)
     */
    private $nomCompletPromoteur;

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
     * @var string
     *
     * @ORM\Column(name="adresse_pme", type="string", length=255)
     */
    private $adressePme;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=255)
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="commune", type="string", length=255)
     */
    private $commune;

    /**
     * @var string
     *
     * @ORM\Column(name="village", type="string", length=255)
     */
    private $village;

    /**
     * @var int
     *
     * @ORM\Column(name="telephone", type="integer")
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="qualifications", type="text")
     */
    private $qualifications;


    /**
     * @ORM\ManyToOne(targetEntity="Projet")
     * @ORM\JoinColumn(name="projet_id", referencedColumnName="id", nullable=true)
     */
    private $projet;


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
     * Set nomPme
     *
     * @param string $nomPme
     *
     * @return Porteurprojet
     */
    public function setNomPme($nomPme)
    {
        $this->nomPme = $nomPme;

        return $this;
    }

    /**
     * Get nomPme
     *
     * @return string
     */
    public function getNomPme()
    {
        return $this->nomPme;
    }

    /**
     * Set nomCompletPromoteur
     *
     * @param string $nomCompletPromoteur
     *
     * @return Porteurprojet
     */
    public function setNomCompletPromoteur($nomCompletPromoteur)
    {
        $this->nomCompletPromoteur = $nomCompletPromoteur;

        return $this;
    }

    /**
     * Get nomCompletPromoteur
     *
     * @return string
     */
    public function getNomCompletPromoteur()
    {
        return $this->nomCompletPromoteur;
    }

    /**
     * Set sexe
     *
     * @param boolean $sexe
     *
     * @return Porteurprojet
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
     * @return Porteurprojet
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
     * Set adressePme
     *
     * @param string $adressePme
     *
     * @return Porteurprojet
     */
    public function setAdressePme($adressePme)
    {
        $this->adressePme = $adressePme;

        return $this;
    }

    /**
     * Get adressePme
     *
     * @return string
     */
    public function getAdressePme()
    {
        return $this->adressePme;
    }

    /**
     * Set region
     *
     * @param string $region
     *
     * @return Porteurprojet
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
     * @return Porteurprojet
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
     * Set village
     *
     * @param string $village
     *
     * @return Porteurprojet
     */
    public function setVillage($village)
    {
        $this->village = $village;

        return $this;
    }

    /**
     * Get village
     *
     * @return string
     */
    public function getVillage()
    {
        return $this->village;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return Porteurprojet
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return int
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Porteurprojet
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
     * Set qualifications
     *
     * @param string $qualifications
     *
     * @return Porteurprojet
     */
    public function setQualifications($qualifications)
    {
        $this->qualifications = $qualifications;

        return $this;
    }

    /**
     * Get qualifications
     *
     * @return string
     */
    public function getQualifications()
    {
        return $this->qualifications;
    }

    /**
     * Set projet
     *
     * @param \AppBundle\Entity\Projet $projet
     *
     * @return Porteurprojet
     */
    public function setProjet(\AppBundle\Entity\Projet $projet = null)
    {
        $this->projet = $projet;

        return $this;
    }

    /**
     * Get projet
     *
     * @return \AppBundle\Entity\Projet
     */
    public function getProjet()
    {
        return $this->projet;
    }
}
