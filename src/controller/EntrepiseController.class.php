<?php

use libs\system\Controller;
use libs\system\Model;

class EntrepiseController extends Controller
{

    /**
     * EntrepiseController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function addEntreprise()
    {
        if(isset($_POST['addEntreprise']))
        {
            extract($_POST);
            $entreprise = new Entreprise();

        }

    }
}