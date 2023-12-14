<?php

class ReunionControleur
{

    private array $parametre = []; // tableau = $_REQUEST
    private ReunionModele $oModele; //propriété de type objet
    private ReunionVue $oVue;  // propriété de type objet

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
    public function listerAV(): void
    {
        $listage = ">";
        $listeReunion = $this->oModele->getListeReunion($listage);

        $this->oVue->setAction('listerAV');
        $this->oVue->genererAffichageListe($listeReunion, $this->action);
    }

    public function listerDP(): void
    {
        $listage = "<";
        $listeReunion = $this->oModele->getListeReunion($listage);

        $this->oVue->setAction('listerDP');
        $this->oVue->genererAffichageListe($listeReunion, $this->action);
    }

    public function form_consulter(): void
    {
        $unReunion = $this->oModele->getUnReunion();
        $listeLieux = $this->oModele->getListeLieux();
        $listeAccompagnateurs = $this->oModele->getListeAccompagnateurs();
        $this->oVue->genererAffichageFiche($unReunion, $listeLieux, $listeAccompagnateurs);
    }

    public function form_ajouter(): void
    {
        $listeLieux = $this->oModele->getListeLieux();
        $listeAccompagnateurs = $this->oModele->getListeAccompagnateurs();
        $unReunion = new ReunionTable(); // Créez une instance vide ici
        $this->oVue->genererAffichageFiche($unReunion, $listeLieux, $listeAccompagnateurs);
    }

    public function ajouter(): void
    {
        $controleReunion = new ReunionTable($this->parametre);
        $controleCapacite = $this->oModele->VérifieNombrePlace($controleReunion);

        if (!$controleReunion->getAutorisationBD() || $controleCapacite === false) {
            // Retour à la fiche
            $listeAccompagnateur = $this->oModele->getListeAccompagnateurs();
            $listeLieux = $this->oModele->getListeLieux();
            $this->oVue->genererAffichageFiche($controleReunion, $listeLieux, $listeAccompagnateur);
        } else {
            // Insertion BD puis retour liste des réunions
            $this->oModele->addReunion($controleReunion);
            $this->listerAV();
        }
    }

    public function form_supprimer(): void
    {
        $unReunion = $this->oModele->getUnReunion();
        $listeLieux = $this->oModele->getListeLieux();
        $listeAccompagnateurs = $this->oModele->getListeAccompagnateurs();
        $this->oVue->genererAffichageFiche($unReunion, $listeLieux, $listeAccompagnateurs);
    }

    public function supprimer(): void
    {

        $controleReunion = new ReunionTable($this->parametre);

        // Insertion BD puis retour liste des reunion
        $this->oModele->deleteReunion($controleReunion);
        $this->listerAV();
    }

    public function form_modifier(): void
    {

        $unReunion = $this->oModele->getUnReunion();
        $listeLieux = $this->oModele->getListeLieux();
        $listeAccompagnateurs = $this->oModele->getListeAccompagnateurs();
        $this->oVue->genererAffichageFiche($unReunion, $listeLieux, $listeAccompagnateurs);
    }

    public function modifier(): void
    {

        $controleReunion = new ReunionTable($this->parametre);
        $controleCapacite = $this->oModele->VérifieNombrePlace($controleReunion);

        if (!$controleReunion->getAutorisationBD() || $controleCapacite === false) {
            //Retour à la fiche

            $listeLieux = $this->oModele->getListeLieux();
            $listeAccompagnateurs = $this->oModele->getListeAccompagnateurs();
            $this->oVue->genererAffichageFiche($controleReunion, $listeLieux, $listeAccompagnateurs);
        } else {
            // Insertion BD puis retour liste des reunion
            $this->oModele->updateReunion($controleReunion);
            $this->listerAV();
        }
    }
}

