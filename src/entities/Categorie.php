<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="categorie")
 **/
class Categorie
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
     * One categorie has many entreprises. This is the inverse side.
     * @OneToMany(targetEntity="Entreprise", mappedBy="categorie")
     */
    private $entreprises;

    /**
     * Categorie constructor.
     */
    public function __construct()
    {
        $this->entreprises = new ArrayCollection();
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
    public function getEntreprises()
    {
        return $this->entreprises;
    }

    /**
     * @param mixed $entreprises
     */
    public function setEntreprises($entreprises)
    {
        $this->entreprises = $entreprises;
    }

}