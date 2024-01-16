<?php
class PorteurdeprojetControleur
{

    private $parametre = []; // tableau = $_REQUEST
    private $oModele; //propriété de type objet
    private $oVue;  // propriété de type objet

    public function __construct($parametre)
    {
        $this->parametre = $parametre;
        // Création d'un objet, instance de la classe LieuxModele
        $this->oModele = new PorteurdeprojetModele($this->parametre);
        // Création d'un objet, instance de la classe LieuxVue
        $this->oVue = new PorteurdeprojetVue($this->parametre);
    }

    /**
     * @throws SmartyException
     */
    public function lister(): void
    {

        $listePdP = $this->oModele->getListePdP();

        $this->oVue->genererAffichageListe($listePdP);
    }

    /**
     * @throws SmartyException
     */
    public function form_consulter(): void
    {

        $unPdP = $this->oModele->getUnPdP();
        $this->oVue->genererAffichageFiche($unPdP);
    }

    /**
     * @throws SmartyException
     */
    public function form_ajouter(): void
    {
        $preparePdP = new PorteurdeprojetTable();

        $this->oVue->genererAffichageFiche($preparePdP);
    }

    /**
     * @throws SmartyException
     */
    public function ajouter(): void
    {

        $controlePdP = new PorteurdeprojetTable($this->parametre);

        if (!$controlePdP->getAutorisationBD()) {
            //Retour à la fiche
            $this->oVue->genererAffichageFiche($controlePdP);
        } else {
            // Insertion BD puis retour liste des lieux
            $this->oModele->addPdP($controlePdP);
            $this->lister();
        }
    }

    /**
     * @throws SmartyException
     */
    public function form_supprimer(): void
    {

        $unPdP = $this->oModele->getUnPdP();
        $this->oVue->genererAffichageFiche($unPdP);
    }

    /**
     * @throws SmartyException
     */
    public function supprimer(): void
    {
        $controlePdP = new PorteurdeprojetTable($this->parametre);

//        if (!$this->oModele->verifieAssignation($controleLieux)) {
//            //Retour à la fiche
//            $this->oVue->genererAffichageFiche($controleLieux);
        //     } else {
        // Insertion BD puis retour liste des lieux
        $this->oModele->deletePdP($controlePdP);
        $this->lister();
    }

    //}

    /**
     * @throws SmartyException
     */
    public function form_modifier(): void
    {

        $unPdP = $this->oModele->getUnPdP();
        $this->oVue->genererAffichageFiche($unPdP);
    }

    /**
     * @throws SmartyException
     */
    public function modifier(): void
    {

        $controlePdP = new PorteurdeprojetTable($this->parametre);

        if (!$controlePdP->getAutorisationBD()) {
            //Retour à la fiche
            $this->oVue->genererAffichageFiche($controlePdP);
        } else {
            // Insertion BD puis retour liste des lieux
            $this->oModele->updatePdP($controlePdP);
            $this->lister();
        }
    }
}

