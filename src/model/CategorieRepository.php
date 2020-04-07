<?php


namespace src\model;


use libs\system\Model;

class CategorieRepository extends Model
{
    public function __construct(){
        parent::__construct();
    }

    public function getAll()
    {
        if($this->db != null) {
            $sql = "SELECT a FROM categorie a";
            return $this->db->createQuery($sql)->getResult();
        }
    }
}