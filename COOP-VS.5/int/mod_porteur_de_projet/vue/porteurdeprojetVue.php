<?php

class PorteurdeprojetVue
{
    private $parametre = [];
    private $tpl; // propriété de type objet (smarty)

    public function __construct($parametre)
    {
        $this->parametre = $parametre;

        $this->tpl = new Smarty();

    }

//    public function chargementValeurs()
//    {
//        $this->tpl->assign('deconnexion', 'Déconnexion');
//
//        $this->tpl->assign('login', $_SESSION['prenomNom']);
//
//        $this->tpl->assign('titreVue', 'Gourmandise SARL');
//
//    }

    /**
     * @throws SmartyException
     */
    public function genererAffichageListe($valeurs): void
    {
   //     $this->chargementValeurs();
        $this->tpl->assign('titrePage', 'Liste des porteur de projet');

        $this->tpl->assign('listePdP', $valeurs);

        $this->tpl->display('mod_lieux/vue/porteurdeprojetListeVue.tpl');
    }

    /**
     * @throws SmartyException
     */
    public function genererAffichageFiche($valeurs): void
    {

 //       $this->chargementValeurs();

        switch ($this->parametre['action']) {
            case 'form_consulter':
                $this->tpl->assign('action', 'consulter');

                $this->tpl->assign('readonly', 'disabled');

                $this->tpl->assign('required', '');

                $this->tpl->assign('titrePage', 'Fiche porteur de projet :  Consultation');

                $this->tpl->assign('unPdP', $valeurs);

                break;
            case 'form_ajouter':
            case 'ajouter':
                $this->tpl->assign('action', 'ajouter');

                $this->tpl->assign('readonly', '');

                $this->tpl->assign('required', 'required');

                $this->tpl->assign('titrePage', 'Fiche porteur de projet :  Création');

                $this->tpl->assign('unPdP', $valeurs);
                break;

            case 'form_supprimer':
            case 'supprimer':
                $this->tpl->assign('action', 'supprimer');

                $this->tpl->assign('readonly', 'readonly');

            $this->tpl->assign('required', '');

                $this->tpl->assign('titrePage', 'Fiche porteur de projet :  Suppression');

                $this->tpl->assign('unPdP', $valeurs);
                break;

            case 'form_modifier':
            case 'modifier':
                $this->tpl->assign('action', 'modifier');

                $this->tpl->assign('readonly', '');

                $this->tpl->assign('required', 'required');

                $this->tpl->assign('titrePage', 'Fiche porteur de projet :  Modification');

                $this->tpl->assign('unPdP', $valeurs);
                break;
        }

        $this->tpl->display('mod_lieux/vue/porteurdeprojetFicheVue.tpl');
    }

}