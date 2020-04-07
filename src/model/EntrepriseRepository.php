<?php


namespace src\model;

use libs\system\Model;

class EntrepriseRepository extends Model
{
    /**
     * EntrepriseRepository constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function add($entreprise)
    {
        $this->db->persist($entreprise);
        $this->db->flush();

        return $entreprise;
    }
}