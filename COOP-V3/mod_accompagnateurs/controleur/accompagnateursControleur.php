<?php

class AccompagnateursControleur
{

    private $parametre = []; // tableau = $_REQUEST
    private $oModele; //propriété de type objet
    private $oVue;  // propriété de type objet

    public function __construct($parametre)
    {
        $this->parametre = $parametre;
        // Création d'un objet, instance de la classe AccompagnateursModele
        $this->oModele = new AccompagnateursModele($this->parametre);
            // Création d'un objet, instance de la classe AccompagnateursVue
            $this->oVue = new AccompagnateursVue($this->parametre);
    }

    public function lister()
    {

        $listeAccompagnateurs = $this->oModele->getListeAccompagnateurs();

        $this->oVue->genererAffichageListe($listeAccompagnateurs);
    }

    public function form_consulter()
    {

        $unAccompagnateurs = $this->oModele->getUnAccompagnateurs();
        $this->oVue->genererAffichageFiche($unAccompagnateurs);
    }

    public function form_ajouter()
    {
        $prepareAccompagnateurs = new AccompagnateursTable();

        $this->oVue->genererAffichageFiche($prepareAccompagnateurs);
    }

    public function ajouter()
    {

        $controleAccompagnateurs = new AccompagnateursTable($this->parametre);

        if ($controleAccompagnateurs->getAutorisationBD() == false) {
            //Retour à la fiche
            $this->oVue->genererAffichageFiche($controleAccompagnateurs);
        } else {
            // Insertion BD puis retour liste des Accompagnateurs
            $this->oModele->addAccompagnateurs($controleAccompagnateurs);
            $this->lister();
        }
    }

    public function form_supprimer()
    {

        $unAccompagnateurs = $this->oModele->getUnAccompagnateurs();
        $this->oVue->genererAffichageFiche($unAccompagnateurs);
    }

    public function supprimer()
    {

        $controleAccompagnateurs = new AccompagnateursTable($this->parametre);
            // Insertion BD puis retour liste des Accompagnateurs
            $this->oModele->deleteAccompagnateurs($controleAccompagnateurs);
            $this->lister();
    }

    public function form_modifier()
    {

        $unAccompagnateurs = $this->oModele->getUnAccompagnateurs();
        $this->oVue->genererAffichageFiche($unAccompagnateurs);
    }

    public function modifier()
    {

        $controleAccompagnateurs = new AccompagnateursTable($this->parametre);

        if ($controleAccompagnateurs->getAutorisationBD() == false) {
            //Retour à la fiche
            $this->oVue->genererAffichageFiche($controleAccompagnateurs);
        } else {
            // Insertion BD puis retour liste des Accompagnateurs
            $this->oModele->updateAccompagnateurs($controleAccompagnateurs);
            $this->lister();
        }
    }
}

