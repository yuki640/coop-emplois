<?php
class Autoloader{

    public static function chargerClasses(){

        spl_autoload_register([__CLASS__, 'autoload']);
    }

    public static function autoload($maClasse){
        // Passe le nom de la classe avec une minuscule Accueil => accueil
        $maClasse = lcfirst($maClasse);

        $repertoires = [
            'mod_accueil/',
            'mod_accueil/controleur/',
            'mod_accueil/modele/',
            'mod_accueil/vue/',
            'mod_client/',
            'mod_client/controleur/',
            'mod_client/modele/',
            'mod_client/vue/',
            'mod_produit/',
            'mod_produit/controleur/',
            'mod_produit/modele/',
            'mod_produit/vue/',
            'mod_profil/',
            'mod_profil/controleur/',
            'mod_profil/modele/',
            'mod_profil/vue/',
            'mod_authentification/',
            'mod_authentification/controleur/',
            'mod_authentification/modele/',
            'mod_authentification/vue/',
            'mod_historique/',
            'mod_historique/controleur/',
            'mod_historique/modele/',
            'mod_historique/vue/',
        ];

        foreach($repertoires as $repertoire) {
            //Vérifier si un script .php existe dans le répertoire
            if(file_exists($repertoire.$maClasse.'.php')){
            require_once $repertoire.$maClasse.'.php';
            return;
            }
        }
    }
}
