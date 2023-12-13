<?php

namespace mod_authentification\controleur;

use mod_authentification\modele\AuthentificationModele;
use mod_authentification\vue\AuthentificationVue;

class AuthentificationControleur
{

    private $parametre = []; // tableau = $_REQUEST
    private $oModele; //propriété de type objet
    private $oVue;  // propriété de type objet

    public function __construct($parametre)
    {
        $this->parametre = $parametre;
        // Création d'un objet, instance de la classe ClientModele
        $this->oModele = new AuthentificationModele($this->parametre);
        // Création d'un objet, instance de la classe ClientVue
        $this->oVue = new AuthentificationVue($this->parametre);
    }

    public function form_authentifier()
    {
        $prepareAuthentification = new AuthentificationTable($this->parametre);

//                var_dump($prepareAuthentification);
//                die();

        $this->oVue->genererAffichage($prepareAuthentification);
    }

    public function authentifier()
    {

        $controleAuthentification = new AuthentificationTable($this->parametre);
        if ($controleAuthentification->getAutorisationSession() == false ||
            $this->oModele->rechercherVendeur($controleAuthentification) == false) {

            $this->oVue->genererAffichage($controleAuthentification);
        } else {

            header('location:index.php');

        }
    }

    public function deconnecter()
    {
        session_destroy();
        $_SESSION = [];

        header('location:index.php');
    }
}

