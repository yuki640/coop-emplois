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
            'mod_lieux/',
            'mod_lieux/controleur/',
            'mod_lieux/modele/',
            'mod_lieux/vue/',
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
