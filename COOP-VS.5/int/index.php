<?php
session_start();
date_default_timezone_set('Europe/Paris');
require_once 'include/configuration.php';
// gestion = ? client, produit, profil, accueil ?
// action = ? lister (action par défaut), ajouter, modifier, supprimer, rechercher, trier, ...
// action = form_ajouter (appel formulaire vierge), form_consulter (formulaire en consultation)

// Mais aussi request
Autoloader::chargerClasses();
//if (!isset($_SESSION['login'])) {
//
//    $_REQUEST['gestion'] = 'authentification';
/*} else*/
if (!isset($_REQUEST['gestion'])) {

    $_REQUEST['gestion'] = 'accueil';

}

// Création d'un objet, instance de la classe de type (routeur) accueil (client, produit, ...)
$oRouteur = new $_REQUEST['gestion']($_REQUEST);


$oRouteur->choixAction();