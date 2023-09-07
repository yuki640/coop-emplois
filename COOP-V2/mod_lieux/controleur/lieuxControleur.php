<?php

class LieuxControleur
{

    private $parametre = []; // tableau = $_REQUEST
    private $oModele; //propriété de type objet
    private $oVue;  // propriété de type objet

    public function __construct($parametre)
    {
        $this->parametre = $parametre;
        // Création d'un objet, instance de la classe LieuxModele
        $this->oModele = new LieuxModele($this->parametre);
            // Création d'un objet, instance de la classe LieuxVue
            $this->oVue = new LieuxVue($this->parametre);
    }

    public function lister()
    {

        $listeLieux = $this->oModele->getListeLieux();

        $this->oVue->genererAffichageListe($listeLieux);
    }

    public function form_consulter()
    {

        $unLieux = $this->oModele->getUnLieux();
        $this->oVue->genererAffichageFiche($unLieux);
    }

    public function form_ajouter()
    {
        $prepareLieux = new LieuxTable();

        $this->oVue->genererAffichageFiche($prepareLieux);
    }

    public function ajouter()
    {

        $controleLieux = new LieuxTable($this->parametre);

        if ($controleLieux->getAutorisationBD() == false) {
            //Retour à la fiche
            $this->oVue->genererAffichageFiche($controleLieux);
        } else {
            // Insertion BD puis retour liste des lieux
            $this->oModele->addLieux($controleLieux);
            $this->lister();
        }
    }

    public function form_supprimer()
    {

        $unLieux = $this->oModele->getUnLieux();
        $this->oVue->genererAffichageFiche($unLieux);
    }

    public function supprimer()
    {

        $controleLieux = new LieuxTable($this->parametre);
//        var_dump($controleLieux);
//        die();
        $row = $this->oModele->verifieCommande($controleLieux);

        if ($row) {
            // Insertion BD puis retour liste des lieux
            $this->oModele->deleteLieux($controleLieux);
            $this->lister();
        } else {
            $this->oVue->genererAffichageFiche($controleLieux);

        }
    }

    public function form_modifier()
    {

        $unLieux = $this->oModele->getUnLieux();
        $this->oVue->genererAffichageFiche($unLieux);
    }

    public function modifier()
    {

        $controleLieux = new LieuxTable($this->parametre);

        if ($controleLieux->getAutorisationBD() == false) {
            //Retour à la fiche
            $this->oVue->genererAffichageFiche($controleLieux);
        } else {
            // Insertion BD puis retour liste des lieux
            $this->oModele->updateLieux($controleLieux);
            $this->lister();
        }
    }
}

