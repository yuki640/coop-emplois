<?php

namespace mod_authentification\vue;
use Smarty;

class AuthentificationVue
{
    private array $parametre = [];
    private $tpl; // propriété de type objet (smarty)

    public function __construct($parametre)
    {
        $this->parametre = $parametre;

        $this->tpl = new Smarty();

    }

    /**
     * @throws \SmartyException
     */
    public function genererAffichage($valeurs): void
    {
        $this->tpl->assign('titreVue', 'COOP EMPLOI');

        $this->tpl->assign('action', 'authentifier');

        $this->tpl->assign('unVendeur', $valeurs);

        $this->tpl->display('mod_authentification/vue/authentificationVue.tpl');
    }

}