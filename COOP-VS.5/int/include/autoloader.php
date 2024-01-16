<?php

class Autoloader
{

    public static function chargerClasses()
    {

        spl_autoload_register([__CLASS__, 'autoload']);
    }

    public static function autoload($maClasse)
    {
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
            'mod_accompagnateurs/',
            'mod_accompagnateurs/controleur/',
            'mod_accompagnateurs/modele/',
            'mod_accompagnateurs/vue/',
            'mod_reunion/',
            'mod_reunion/controleur/',
            'mod_reunion/modele/',
            'mod_reunion/vue/',
            'mod_utilisateur/',
            'mod_utilisateur/controleur/',
            'mod_entretien/',
            'mod_entretien/controleur/',
            'mod_entretien/modele/',
            'mod_entretien/vue/',
            'mod_authentification/',
            'mod_authentification/controleur/',
            'mod_authentification/modele/',
            'mod_authentification/vue/',
            'mod_porteur_de_projet/',
            'mod_porteur_de_projet/controleur/',
            'mod_porteur_de_projet/modele/',
        ];

        foreach ($repertoires as $repertoire) {
            //Vérifier si un script .php existe dans le répertoire
            if (file_exists($repertoire . $maClasse . '.php')) {
                require_once $repertoire . $maClasse . '.php';
                return;
            }
        }
    }
}
