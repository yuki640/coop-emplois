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
        var_dump($unAccompagnateurs);
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
            // Vérification de l'adresse mail

            if($this->oModele->verifieMail($controleAccompagnateurs) == false) {
                //Retour à la fiche
                $this->oVue->genererAffichageFiche($controleAccompagnateurs);
            }else {
                // Insertion BD puis retour liste des Accompagnateurs
                $this->oModele->addAccompagnateurs($controleAccompagnateurs);
                $this->lister();
            }
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

        if ($this->oModele->verifieAssignation($controleAccompagnateurs) == false) {
            //Retour à la fiche
            $this->oVue->genererAffichageFiche($controleAccompagnateurs);
        } else {
            // Insertion BD puis retour liste des Accompagnateurs
            $this->oModele->deleteAccompagnateurs($controleAccompagnateurs);
            $this->lister();
        }
    }

    public function form_modifier()
    {

        $unAccompagnateurs = $this->oModele->getUnAccompagnateurs();
        $this->oVue->genererAffichageFiche($unAccompagnateurs);
    }

    public function modifier()
    {

        $controleAccompagnateurs = new AccompagnateursTable($this->parametre);
        $mailbase = $_POST['mailbase'];
        $mailmodifie = $_POST['acc_mail'];
        $mailidentique  = false;
        if($mailbase <> $mailmodifie){
            $mailidentique = false;
        } else{
            $mailidentique = true;
        }
        if ($controleAccompagnateurs->getAutorisationBD() == false) {
            //Retour à la fiche
            $this->oVue->genererAffichageFiche($controleAccompagnateurs);
        } else {
            if ($mailidentique == false) {
                if ($this->oModele->verifieMail($controleAccompagnateurs) == false) {
                    //Retour à la fiche
                    $this->oVue->genererAffichageFiche($controleAccompagnateurs);
                } else {
                    // Insertion BD puis retour liste des Accompagnateurs
                    $this->oModele->updateAccompagnateurs($controleAccompagnateurs);
                    $this->lister();
                }
            } else {
                // Insertion BD puis retour liste des Accompagnateurs
                $this->oModele->updateAccompagnateurs($controleAccompagnateurs);
                $this->lister();
            }
        }
    }
}

