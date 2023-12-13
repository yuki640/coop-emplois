<?php

namespace mod_authentification\vue;
use Smarty;

class AuthentificationVue
{
    private $parametre = [];
    private $tpl; // propriété de type objet (smarty)

    public function __construct($parametre)
    {
        $this->parametre = $parametre;

        $this->tpl = new Smarty();

    }

    public function genererAffichage($valeurs)
    {
        $this->tpl->assign('titreVue', 'Gourmandise SARL');

        $this->tpl->assign('action', 'authentifier');

        $this->tpl->assign('unVendeur', $valeurs);

        $this->tpl->display('mod_authentification/vue/authentificationVue.tpl');
    }

}