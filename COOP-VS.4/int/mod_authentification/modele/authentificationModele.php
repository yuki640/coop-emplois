<?php

namespace mod_authentification\modele;

use mod_authentification\controleur\AuthentificationTable;
use Modele;

class AuthentificationModele extends Modele
{

    private $parametre = []; // Tableau = $_REQUEST

    public function __construct($parametre)
    {
        $this->parametre = $parametre;
    }

    public function rechercherVendeur(AuthentificationTable $authEnCours)
    {

        $sql = "SELECT * FROM vendeur WHERE login = ?";

        $idRequete = $this->executeRequete($sql, [$authEnCours->getLogin()]);

        $authExistant = $idRequete->fetch(PDO::FETCH_ASSOC);

        if ($idRequete->rowCount() == 1
            && $authEnCours->getLogin() == $authExistant['login']
            && $authEnCours->getMotdepasse() == $authExistant['motdepasse']
        ) {
            $_SESSION['login'] = $authEnCours->getLogin();
            $_SESSION['prenomNom'] = $authExistant['prenom'] . " " . $authExistant['nom'];
            $_SESSION['codev'] = $authExistant['codev'];
            return true;
        }
        AuthentificationTable::setMessageErreur("Authentification est invalide.");
        return false;
    }
}