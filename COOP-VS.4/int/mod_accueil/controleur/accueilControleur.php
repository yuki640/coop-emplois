<?php
Class AccueilControleur{

    private $parametre = []; // tableau = $_REQUEST
    private $oModele;
    private $oVue;  // propriété de type objet

    public function __construct($parametre){
        $this->parametre = $parametre;
        // Chargement ou appel de la vue
        //require_once 'mod_accueil/vue/accueilVue.php';
        $this->oModele = new AccueilModele($parametre);
        // Création d'un objet, instance de la classe AccueilVue
        $this->oVue = new AccueilVue($this->parametre);
    }
    public function lister(){

        $this->oVue->genererAffichageListe();
    }

    public function charts(){

        $valeurs = $this->oModele->caMois();
        $this->oVue->genererCaMois($valeurs);
    }



}