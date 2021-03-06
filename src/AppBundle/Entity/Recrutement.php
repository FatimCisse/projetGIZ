<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recrutement
 *
 * @ORM\Table(name="recrutement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RecrutementRepository")
 */
class Recrutement
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
     * @ORM\Column(name="adresseactuel", type="string", length=255)
     */
    private $adresseactuel;

    /**
     * @var string
     *
     * @ORM\Column(name="qualifiations", type="text")
     */
    private $qualifiations;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau_etude", type="string", length=255)
     */
    private $niveauEtude;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau_experience", type="string", length=255)
     */
    private $niveauExperience;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255)
     */
    private $statut;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="type_emploi", type="string", length=255)
     */
    private $typeEmploi;

    /**
     * @var string
     *
     * @ORM\Column(name="besoins", type="text")
     */
    private $besoins;


    /**
     * @var string
     *
     * @ORM\Column(name="attentes", type="text")
     */
    private $attentes;


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
     * @return Recrutement
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
     * @return Recrutement
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
     * @return Recrutement
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
     * @return Recrutement
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
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return Recrutement
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
     * @return Recrutement
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
     * @return Recrutement
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
     * Set qualifiations
     *
     * @param string $qualifiations
     *
     * @return Recrutement
     */
    public function setQualifiations($qualifiations)
    {
        $this->qualifiations = $qualifiations;

        return $this;
    }

    /**
     * Get qualifiations
     *
     * @return string
     */
    public function getQualifiations()
    {
        return $this->qualifiations;
    }

    /**
     * Set niveauEtude
     *
     * @param string $niveauEtude
     *
     * @return Recrutement
     */
    public function setNiveauEtude($niveauEtude)
    {
        $this->niveauEtude = $niveauEtude;

        return $this;
    }

    /**
     * Get niveauEtude
     *
     * @return string
     */
    public function getNiveauEtude()
    {
        return $this->niveauEtude;
    }

    /**
     * Set niveauExperience
     *
     * @param string $niveauExperience
     *
     * @return Recrutement
     */
    public function setNiveauExperience($niveauExperience)
    {
        $this->niveauExperience = $niveauExperience;

        return $this;
    }

    /**
     * Get niveauExperience
     *
     * @return string
     */
    public function getNiveauExperience()
    {
        return $this->niveauExperience;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return Recrutement
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return Recrutement
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set typeEmploi
     *
     * @param string $typeEmploi
     *
     * @return Recrutement
     */
    public function setTypeEmploi($typeEmploi)
    {
        $this->typeEmploi = $typeEmploi;

        return $this;
    }

    /**
     * Get typeEmploi
     *
     * @return string
     */
    public function getTypeEmploi()
    {
        return $this->typeEmploi;
    }

    /**
     * Set besoins
     *
     * @param string $besoins
     *
     * @return Recrutement
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
     * Set attentes
     *
     * @param string $attentes
     *
     * @return Recrutement
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
}
