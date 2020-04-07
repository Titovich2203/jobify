<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="entreprise")
 **/
class Entreprise
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
    private $ninea;
    /**
     * @Column(type="string")
     */
    private $raisonSo;
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
    private $siege;
    /**
     * @Column(type="string")
     */
    private $dateCr;
    /**
     * @Column(type="blob")
     */
    private $logo;
    /**
     * @Column(type="string")
     */
    private $nomCEO;
    /**
     * Many entreprises have one categorie. This is the owning side.
     * @ManyToOne(targetEntity="Categorie", inversedBy="entreprise")
     * @JoinColumn(name="categorie_id", referencedColumnName="id")
     */
    private $categorie;
    /**
     * One entreprise has many offres. This is the inverse side.
     * @OneToMany(targetEntity="Offre", mappedBy="enttreprise")
     */
    private $offres;

    /**
     * Entreprise constructor.
     */
    public function __construct()
    {
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
    public function getNinea()
    {
        return $this->ninea;
    }

    /**
     * @param mixed $ninea
     */
    public function setNinea($ninea)
    {
        $this->ninea = $ninea;
    }

    /**
     * @return mixed
     */
    public function getRaisonSo()
    {
        return $this->raisonSo;
    }

    /**
     * @param mixed $raisonSo
     */
    public function setRaisonSo($raisonSo)
    {
        $this->raisonSo = $raisonSo;
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
    public function getSiege()
    {
        return $this->siege;
    }

    /**
     * @param mixed $siege
     */
    public function setSiege($siege)
    {
        $this->siege = $siege;
    }

    /**
     * @return mixed
     */
    public function getDateCr()
    {
        return $this->dateCr;
    }

    /**
     * @param mixed $dateCr
     */
    public function setDateCr($dateCr)
    {
        $this->dateCr = $dateCr;
    }

    /**
     * @return mixed
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param mixed $logo
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

    /**
     * @return mixed
     */
    public function getNomCEO()
    {
        return $this->nomCEO;
    }

    /**
     * @param mixed $nomCEO
     */
    public function setNomCEO($nomCEO)
    {
        $this->nomCEO = $nomCEO;
    }

    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param mixed $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
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