<?php

class EntretienVue
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

//        $this->tpl->assign('login', $_SESSION['prenomNom']);

//        $this->tpl->assign('titreVue', 'Gourmandise SARL');

//    }

    public function genererAffichageListe($valeurs)
    {
   //     $this->chargementValeurs();
        $this->tpl->assign('titrePage', 'Liste des Entretien');

        $this->tpl->assign('listeEntretien', $valeurs);

        $this->tpl->display('mod_entretien/vue/entretienListeVue.tpl');
    }

    public function genererAffichageFiche($valeurs)
    {

 //       $this->chargementValeurs();

        switch ($this->parametre['action']) {
            case 'form_consulter':
                $this->tpl->assign('action', 'consulter');

                $this->tpl->assign('readonly', 'disabled');

                $this->tpl->assign('required', '');

                $this->tpl->assign('titrePage', 'Fiche Entretien :  Consultation');

                $this->tpl->assign('unEntretien', $valeurs);

                break;
            case 'form_ajouter':
            case 'ajouter':
                $this->tpl->assign('action', 'ajouter');

                $this->tpl->assign('readonly', '');

                $this->tpl->assign('required', 'required');

                $this->tpl->assign('titrePage', 'Fiche entretien :  Création');

                $this->tpl->assign('unEntretien', $valeurs);
                break;

            case 'form_supprimer':
            case 'supprimer':
                $this->tpl->assign('action', 'supprimer');

                $this->tpl->assign('readonly', 'readonly');

            $this->tpl->assign('required', '');

                $this->tpl->assign('titrePage', 'Fiche entretien :  Suppression');

                $this->tpl->assign('unEntretien', $valeurs);
                break;

            case 'form_modifier':
            case 'modifier':
                $this->tpl->assign('action', 'modifier');

                $this->tpl->assign('readonly', '');

                $this->tpl->assign('required', 'required');

                $this->tpl->assign('titrePage', 'Fiche entretien :  Modification');

                $this->tpl->assign('unEntretien', $valeurs);
                break;
        }

        $this->tpl->display('mod_entretien/vue/entretienFicheVue.tpl');
    }

}