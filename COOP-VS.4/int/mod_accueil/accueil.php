<?php

//Routeur de la class Accueil
class Accueil
{

    private $parametre = []; // Tableau =$_REQUEST
    private $oControleur; //propriété de type objet

    public function __construct($parametre)
    {
        //Initialisation de la propriété parametre
        $this->parametre = $parametre;
        // Chargement ou appel du controleur
        //require_once 'mod_accueil/controleur/accueilControleur.php';
        // Création d'un objet, instance de la classe AccueilControleur
        $this->oControleur = new AccueilControleur($this->parametre);
    }

    public function choixAction()
    {

        // Ici, à venir une structure alternative pour tester les différentes actions pour tester
        // Les différentes actions possibles (type switch)
        if (isset($this->parametre['action'])) {
            switch ($this->parametre['action']) {
                case 'generer_stats' :
                    $this->oControleur->charts();
                    break;
            }
        } else {
            $this->oControleur->lister();
        }
    }
}