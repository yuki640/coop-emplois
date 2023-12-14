<?php


class AuthentificationControleur
{

    private array $parametre = []; // tableau = $_REQUEST
    private AuthentificationModele $oModele; //propriété de type objet
    private authentificationVue $oVue;  // propriété de type objet

    public function __construct($parametre)
    {
        $this->parametre = $parametre;
        // Création d'un objet, instance de la classe ClientModele
        $this->oModele = new AuthentificationModele($this->parametre);
        // Création d'un objet, instance de la classe ClientVue
        $this->oVue = new AuthentificationVue($this->parametre);
    }

    /**
     * @throws SmartyException
     */
    public function form_authentifier(): void
    {
        $prepareAuthentification = new authentificationTable($this->parametre);

//                var_dump($prepareAuthentification);
//                die();

        $this->oVue->genererAffichage($prepareAuthentification);
    }

    /**
     * @throws \SmartyException
     */
    public function authentifier(): void
    {

        $controleAuthentification = new authentificationTable($this->parametre);
        if (!$controleAuthentification->getAutorisationSession() ||
            !$this->oModele->rechercherVendeur($controleAuthentification)) {

            $this->oVue->genererAffichage($controleAuthentification);
        } else {

            header('location:index.php');

        }
    }

    public function deconnecter(): void
    {
        session_destroy();
        $_SESSION = [];

        header('location:index.php');
    }
}
