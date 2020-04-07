<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="demandeur")
 **/
class Demandeur
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;
    /**
     * @Column(type="string")
     */
    private $nom;
    /**
     * @Column(type="string")
     */
    private $prenom;
    /**
     * @Column(type="string")
     */
    private $tel;
    /**
     * @Column(type="string")
     */
    private $adresse;
    /**
     * @Column(type="string")
     */
    private $sexe;
    /**
     * @Column(type="string")
     */
    private $dateNais;
    /**
     * @Column(type="string")
     */
    private $email;
    /**
     * @Column(type="string")
     */
    private $mdp;
    /**
     * @Column(type="string")
     */
    private $universite;
    /**
     * @Column(type="string")
     */
    private $diplome;
    /**
     * @Column(type="string")
     */
    private $anneeOb;
    /**
     * @Column(type="string")
     */
    private $specialite;
    /**
     * @Column(type="blob")
     */
    private $cv;
    /**
     * One demandeur has many reponses. This is the inverse side.
     * @OneToMany(targetEntity="Reponse", mappedBy="demandeur")
     */
    private $reponses;
    /**
     * Many demandeurs have one domaine. This is the owning side.
     * @ManyToOne(targetEntity="Domaine", inversedBy="demandeurs")
     * @JoinColumn(name="domaine_id", referencedColumnName="id")
     */
    private $domaine;

    /**
     * Demandeur constructor.
     */
    public function __construct()
    {
        $this->reponses = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param mixed $sexe
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    /**
     * @return mixed
     */
    public function getDateNais()
    {
        return $this->dateNais;
    }

    /**
     * @param mixed $dateNais
     */
    public function setDateNais($dateNais)
    {
        $this->dateNais = $dateNais;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * @param mixed $mdp
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }

    /**
     * @return mixed
     */
    public function getUniversite()
    {
        return $this->universite;
    }

    /**
     * @param mixed $universite
     */
    public function setUniversite($universite)
    {
        $this->universite = $universite;
    }

    /**
     * @return mixed
     */
    public function getDiplome()
    {
        return $this->diplome;
    }

    /**
     * @param mixed $diplome
     */
    public function setDiplome($diplome)
    {
        $this->diplome = $diplome;
    }

    /**
     * @return mixed
     */
    public function getAnneeOb()
    {
        return $this->anneeOb;
    }

    /**
     * @param mixed $anneeOb
     */
    public function setAnneeOb($anneeOb)
    {
        $this->anneeOb = $anneeOb;
    }

    /**
     * @return mixed
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * @param mixed $specialite
     */
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;
    }

    /**
     * @return mixed
     */
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * @param mixed $cv
     */
    public function setCv($cv)
    {
        $this->cv = $cv;
    }

    /**
     * @return mixed
     */
    public function getReponses()
    {
        return $this->reponses;
    }

    /**
     * @param mixed $reponses
     */
    public function setReponses($reponses)
    {
        $this->reponses = $reponses;
    }

    /**
     * @return mixed
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * @param mixed $domaine
     */
    public function setDomaine($domaine)
    {
        $this->domaine = $domaine;
    }



}