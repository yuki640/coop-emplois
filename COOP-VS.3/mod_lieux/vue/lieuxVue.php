<?php

class LieuxVue
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

    public function genererAffichageListe($valeurs)
    {
   //     $this->chargementValeurs();
        $this->tpl->assign('titrePage', 'Liste des lieux');

        $this->tpl->assign('listeLieux', $valeurs);

        $this->tpl->display('mod_lieux/vue/lieuxListeVue.tpl');
    }

    public function genererAffichageFiche($valeurs)
    {

 //       $this->chargementValeurs();

        switch ($this->parametre['action']) {
            case 'form_consulter':
                $this->tpl->assign('action', 'consulter');

                $this->tpl->assign('readonly', 'disabled');

                $this->tpl->assign('required', '');

                $this->tpl->assign('titrePage', 'Fiche lieux :  Consultation');

                $this->tpl->assign('unLieux', $valeurs);

                break;
            case 'form_ajouter':
            case 'ajouter':
                $this->tpl->assign('action', 'ajouter');

                $this->tpl->assign('readonly', '');

                $this->tpl->assign('required', 'required');

                $this->tpl->assign('titrePage', 'Fiche lieux :  Création');

                $this->tpl->assign('unLieux', $valeurs);
                break;

            case 'form_supprimer':
            case 'supprimer':
                $this->tpl->assign('action', 'supprimer');

                $this->tpl->assign('readonly', 'readonly');

            $this->tpl->assign('required', '');

                $this->tpl->assign('titrePage', 'Fiche lieux :  Suppression');

                $this->tpl->assign('unLieux', $valeurs);
                break;

            case 'form_modifier':
            case 'modifier':
                $this->tpl->assign('action', 'modifier');

                $this->tpl->assign('readonly', '');

                $this->tpl->assign('required', 'required');

                $this->tpl->assign('titrePage', 'Fiche lieux :  Modification');

                $this->tpl->assign('unLieux', $valeurs);
                break;
        }

        $this->tpl->display('mod_lieux/vue/lieuxFicheVue.tpl');
    }

}