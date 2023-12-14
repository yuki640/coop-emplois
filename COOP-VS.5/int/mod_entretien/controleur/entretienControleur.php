<?php

class EntretienControleur
{

    private $parametre = []; // tableau = $_REQUEST
    private $oModele; //propriété de type objet
    private $oVue;  // propriété de type objet

    public function __construct($parametre)
    {
        $this->parametre = $parametre;
        // Création d'un objet, instance de la classe AccompagnateursModele
        $this->oModele = new EntretienModele($this->parametre);
            // Création d'un objet, instance de la classe AccompagnateursVue
            $this->oVue = new EntretienVue($this->parametre);
    }

    public function lister()
    {

        $listeEntretien = $this->oModele->getListeEntretien();

        $this->oVue->genererAffichageListe($listeEntretien);
    }

    public function form_consulter()
    {

        $unEntretien = $this->oModele->getUnEntretien();
        $this->oVue->genererAffichageFiche($unEntretien);
    }

    public function form_ajouter()
    {
        $prepareEntretien = new EntretienTable();

        $this->oVue->genererAffichageFiche($prepareEntretien);
    }

    public function ajouter()
    {

        $controleEntretien = new EntretienTable($this->parametre);


        if ($controleEntretien->getAutorisationBD() == false) {
                //Retour à la fiche
                $this->oVue->genererAffichageFiche($controleEntretien);
        } else {
            // Vérification de l'adresse mail

            if($this->oModele->verifieMail($controleEntretien) == false) {
                //Retour à la fiche
                $this->oVue->genererAffichageFiche($controleEntretien);
            }else {
                // Insertion BD puis retour liste des Accompagnateurs
                $this->oModele->addEntretien($controleEntretien);
                $this->lister();
            }
        }
    }

    public function form_supprimer()
    {

        $unEntretien = $this->oModele->getUnEntretien();
        $this->oVue->genererAffichageFiche($unEntretien);
    }

    public function supprimer()
    {
        $controleEntretien = new EntretienTable($this->parametre);

        if ($this->oModele->verifieAssignation($controleEntretien) == false) {
            //Retour à la fiche
            $this->oVue->genererAffichageFiche($controleEntretien);
        } else {
            // Insertion BD puis retour liste des Entretien
            $this->oModele->deleteEntretien($controleEntretien);
            $this->lister();
        }
    }

    public function form_modifier()
    {

        $unEntretien = $this->oModele->getUnEntretien();
        $this->oVue->genererAffichageFiche($unEntretien);
    }

    public function modifier()
    {

        $controleEntretien = new EntretienTable($this->parametre);
        $mailbase = $_POST['mailbase'];
        $mailmodifie = $_POST['acc_mail'];
        $mailidentique  = false;
        if($mailbase <> $mailmodifie){
            $mailidentique = false;
        } else{
            $mailidentique = true;
        }
        if ($controleEntretien->getAutorisationBD() == false) {
            //Retour à la fiche
            $this->oVue->genererAffichageFiche($controleEntretien);
        } else {
            if ($mailidentique == false) {
                if ($this->oModele->verifieMail($controleEntretien) == false) {
                    //Retour à la fiche
                    $this->oVue->genererAffichageFiche($controleEntretien);
                } else {
                    // Insertion BD puis retour liste des Accompagnateurs
                    $this->oModele->updateEntretien($controleEntretien);
                    $this->lister();
                }
            } else {
                // Insertion BD puis retour liste des Accompagnateurs
                $this->oModele->updateEntretien($controleEntretien);
                $this->lister();
            }
        }
    }
}

