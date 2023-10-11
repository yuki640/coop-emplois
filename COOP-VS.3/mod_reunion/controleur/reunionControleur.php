<?php

class ReunionControleur
{

    private $parametre = []; // tableau = $_REQUEST
    private $oModele; //propriété de type objet
    private $oVue;  // propriété de type objet

    public function __construct($parametre)
    {
        $this->parametre = $parametre;
        // Création d'un objet, instance de la classe ReunionModele
        $this->oModele = new ReunionModele($this->parametre);
        // Création d'un objet, instance de la classe ReunionVue
        $this->oVue = new ReunionVue($this->parametre);
    }

    public function setAction($action)
    {
        $this->action = $action;
    }
    public function listerAV()
    {
        $listage = ">";
        $listeReunion = $this->oModele->getListeReunion($listage);

        $this->oVue->setAction('listerAV');;
        $this->oVue->genererAffichageListe($listeReunion, $this->action);
    }

    public function listerDP()
    {
        $listage = "<";
        $listeReunion = $this->oModele->getListeReunion($listage);

        $this->oVue->setAction('listerDP');
        $this->oVue->genererAffichageListe($listeReunion, $this->action);
    }

    public function preparerFiche()
    {
        $listeLieux = $this->oModele->getListeLieux();
        $this->oVue->genererAffichageFiche(new ReunionTable(), $listeLieux);
    }

    public function form_consulter()
    {
        $unReunion = $this->oModele->getUnReunion();
        $listeLieux = $this->oModele->getListeLieux();
        $listeAccompagnateurs = $this->oModele->getListeAccompagnateurs();
        $this->oVue->genererAffichageFiche($unReunion, $listeLieux, $listeAccompagnateurs);
    }

    public function form_ajouter()
    {
        $listeLieux = $this->oModele->getListeLieux();
        $listeAccompagnateurs = $this->oModele->getListeAccompagnateurs();
        $unReunion = new ReunionTable(); // Créez une instance vide ici
        $this->oVue->genererAffichageFiche($unReunion, $listeLieux, $listeAccompagnateurs);
    }

    public function ajouter()
    {
        $controleReunion = new ReunionTable($this->parametre);
        $controleReunion->setReu_Lie($this->parametre['reu_lie']); // Assurez-vous que le nom du champ combo est correct

        if ($controleReunion->getAutorisationBD() == false) {
            //Retour à la fiche
            $this->preparerFiche($controleReunion);
        } else {
            // Insertion BD puis retour liste des reunion
            $this->oModele->addReunion($controleReunion);
            $this->listerAV();
        }
    }

    public function form_supprimer()
    {
        $unReunion = $this->oModele->getUnReunion();
        $listeLieux = $this->oModele->getListeLieux();
        $listeAccompagnateurs = $this->oModele->getListeAccompagnateurs();
        $this->oVue->genererAffichageFiche($unReunion, $listeLieux, $listeAccompagnateurs);
    }

    public function supprimer()
    {

        $controleReunion = new ReunionTable($this->parametre);

        // Insertion BD puis retour liste des reunion
        $this->oModele->deleteReunion($controleReunion);
        $this->listerAV();
    }

    public function form_modifier()
    {

        $unReunion = $this->oModele->getUnReunion();
        $listeLieux = $this->oModele->getListeLieux();
        $listeAccompagnateurs = $this->oModele->getListeAccompagnateurs();
        $this->oVue->genererAffichageFiche($unReunion, $listeLieux, $listeAccompagnateurs);
    }

    public function modifier()
    {

        $controleReunion = new ReunionTable($this->parametre);

        if ($controleReunion->getAutorisationBD() == false) {
            //Retour à la fiche
            $this->oVue->genererAffichageFiche($controleReunion);
        } else {
            // Insertion BD puis retour liste des reunion
            $this->oModele->updateReunion($controleReunion);
            $this->listerAV();
        }
    }
}

