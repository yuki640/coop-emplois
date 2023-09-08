<?php
class AccueilVue{

    private $parametre = [] ;
    private $tpl; // propriété de type objet (smarty)
    public function __construct($parametre)
    {
        $this->parametre = $parametre;

        $this->tpl = new Smarty();

    }
    public function genererAffichageListe(){
        $this->tpl->assign('deconnexion', 'Déconnexion');

//        $this->tpl->assign('login', $_SESSION['prenomNom']);

        $this->tpl->assign('tabBord', 'Ici le tableau de bord');

        $this->tpl->display('mod_accueil/vue/accueilVue.tpl');
    }

//    public function genererCaMois($parametre){
 //   echo json_encode($parametre);
 //   exit();
 //   }
}