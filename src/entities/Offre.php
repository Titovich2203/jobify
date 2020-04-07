<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="offre")
 **/
class Offre
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
    private $intitule;
    /**
     * @Column(type="text")
     */
    private $description;
    /**
     * @Column(type="string")
     */
    private $datePub;
    /**
     * @Column(type="date")
     */
    private $dateFinV;
    /**
     * Many offres have one domaine. This is the owning side.
     * @ManyToOne(targetEntity="Domaine", inversedBy="offres")
     * @JoinColumn(name="domaine_id", referencedColumnName="id")
     */
    private $domaine;
    /**
     * Many offres have one entreprise. This is the owning side.
     * @ManyToOne(targetEntity="Entreprise", inversedBy="offres")
     * @JoinColumn(name="entreprise_id", referencedColumnName="id")
     */
    private $entreprise;
    /**
     * One offre has many reponses. This is the inverse side.
     * @OneToMany(targetEntity="Reponse", mappedBy="offre")
     */
    private $reponses;

    /**
     * Offre constructor.
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
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * @param mixed $intitule
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDatePub()
    {
        return $this->datePub;
    }

    /**
     * @param mixed $datePub
     */
    public function setDatePub($datePub)
    {
        $this->datePub = $datePub;
    }

    /**
     * @return mixed
     */
    public function getDateFinV()
    {
        return $this->dateFinV;
    }

    /**
     * @param mixed $dateFinV
     */
    public function setDateFinV($dateFinV)
    {
        $this->dateFinV = $dateFinV;
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

    /**
     * @return mixed
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * @param mixed $entreprise
     */
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;
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



}