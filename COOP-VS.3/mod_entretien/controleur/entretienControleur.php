<?php

class EntretienControleur
{

    private $parametre = []; // tableau = $_REQUEST
    private $oModele; //propriété de type objet
    private $oVue;  // propriété de type objet

    public function __construct($parametre)
    {
        $this->parametre = $parametre;
        // Création d'un objet, instance de la classe EntretienModele
        $this->oModele = new EntretienModele($this->parametre);
        // Création d'un objet, instance de la classe EntretienVue
        $this->oVue = new EntretienVue($this->parametre);
    }

    public function setAction($action)
    {
        $this->action = $action;
    }
    public function listerAV()
    {
        $listage = ">";
        $listeEntretien = $this->oModele->getListeEntretien($listage);

        $this->oVue->setAction('listerAV');
        $this->oVue->genererAffichageListe($listeEntretien, $this->action);
    }

    public function listerDP()
    {
        $listage = "<";
        $listeEntretien = $this->oModele->getListeEntretien($listage);

        $this->oVue->setAction('listerDP');
        $this->oVue->genererAffichageListe($listeEntretien, $this->action);
    }

    public function form_consulter()
    {
        $unEntretien = $this->oModele->getUnEntretien();
        $listeLieux = $this->oModele->getListeLieux();
        $listeAccompagnateurs = $this->oModele->getListeAccompagnateurs();
        $this->oVue->genererAffichageFiche($unEntretien, $listeLieux, $listeAccompagnateurs);
    }

    public function form_ajouter()
    {
        $listeLieux = $this->oModele->getListeLieux();
        $listeAccompagnateurs = $this->oModele->getListeAccompagnateurs();
        $unEntretien = new EntretienTable(); // Créez une instance vide ici
        $this->oVue->genererAffichageFiche($unEntretien, $listeLieux, $listeAccompagnateurs);
    }

    public function ajouter()
    {
        $controleEntretien = new EntretienTable($this->parametre);
        $controleCapacite = $this->oModele->VérifieNombrePlace($controleEntretien);

        if ($controleEntretien->getAutorisationBD() == false || $controleCapacite === false) {
            // Retour à la fiche
            $listeAccompagnateur = $this->oModele->getListeAccompagnateurs();
            $listeLieux = $this->oModele->getListeLieux();
            $this->oVue->genererAffichageFiche($controleEntretien, $listeLieux, $listeAccompagnateur);
        } else {
            // Insertion BD puis retour liste des réunions
            $this->oModele->addEntretien($controleEntretien);
            $this->listerAV();
        }
    }

    public function form_supprimer()
    {
        $unEntretien = $this->oModele->getUnEntretien();
        $listeLieux = $this->oModele->getListeLieux();
        $listeAccompagnateurs = $this->oModele->getListeAccompagnateurs();
        $this->oVue->genererAffichageFiche($unEntretien, $listeLieux, $listeAccompagnateurs);
    }

    public function supprimer()
    {

        $controleEntretien = new EntretienTable($this->parametre);

        // Insertion BD puis retour liste des entretien
        $this->oModele->deleteEntretien($controleEntretien);
        $this->listerAV();
    }

    public function form_modifier()
    {

        $unEntretien = $this->oModele->getUnEntretien();
        $listeLieux = $this->oModele->getListeLieux();
        $listeAccompagnateurs = $this->oModele->getListeAccompagnateurs();
        $this->oVue->genererAffichageFiche($unEntretien, $listeLieux, $listeAccompagnateurs);
    }

    public function modifier()
    {

        $controleEntretien = new EntretienTable($this->parametre);
        $controleCapacite = $this->oModele->VérifieNombrePlace($controleEntretien);

        if ($controleEntretien->getAutorisationBD() == false || $controleCapacite === false) {
            //Retour à la fiche

            $listeLieux = $this->oModele->getListeLieux();
            $listeAccompagnateurs = $this->oModele->getListeAccompagnateurs();
            $this->oVue->genererAffichageFiche($controleEntretien, $listeLieux, $listeAccompagnateurs);
        } else {
            // Insertion BD puis retour liste des entretien
            $this->oModele->updateEntretien($controleEntretien);
            $this->listerAV();
        }
    }
}

