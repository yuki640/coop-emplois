<?php

namespace mod_authentification;

use authentificationControleur;

class Authentification
{

    /** Routeur du Module Authentification */

    private array $parametre = []; // Tableau =$_REQUEST
    private authentificationControleur $oControleur; //propriété de type objet

    public function __construct($parametre)
    {
        //Initialisation de la propriété parametre
        $this->parametre = $parametre;
        // Chargement ou appel du controleur

        // Création d'un objet, instance de la classe ClientControleur
        $this->oControleur = new authentificationControleur($this->parametre);
    }

    /**
     * @throws \SmartyException
     */
    public function choixAction(): void
    {

        // Les différentes actions possibles (type switch)
        if (isset($this->parametre['action'])) {
            //Traitement des différentes actions
            switch ($this->parametre['action']) {
                case 'authentifier' :
                    $this->oControleur->authentifier();
                    break;
                case 'deconnecter' :
                    $this->oControleur->deconnecter();
                    break;
            }
        } else {
            // Par défaut le formulaire d'authentification : login et pw à saisir
            $this->oControleur->form_authentifier();

        }
    }
}