<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="domaine")
 **/
class Domaine
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
    private $libelle;
    /**
     * One domaine has many demandeurs. This is the inverse side.
     * @OneToMany(targetEntity="Demandeur", mappedBy="domaine")
     */
    private $demandeurs;
    /**
     * One domaine has many offres. This is the inverse side.
     * @OneToMany(targetEntity="Offre", mappedBy="domaine")
     */
    private $offres;

    /**
     * Domaine constructor.
     */
    public function __construct()
    {
        $this->demandeurs = new ArrayCollection();
        $this->offres = new ArrayCollection();
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
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return mixed
     */
    public function getDemandeurs()
    {
        return $this->demandeurs;
    }

    /**
     * @param mixed $demandeurs
     */
    public function setDemandeurs($demandeurs)
    {
        $this->demandeurs = $demandeurs;
    }

    /**
     * @return mixed
     */
    public function getOffres()
    {
        return $this->offres;
    }

    /**
     * @param mixed $offres
     */
    public function setOffres($offres)
    {
        $this->offres = $offres;
    }


}