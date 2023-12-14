<?php


class AuthentificationModele extends Modele
{

    private array $parametre = []; // Tableau = $_REQUEST

    public function __construct($parametre)
    {
        $this->parametre = $parametre;
    }

    public function rechercherVendeur(AuthentificationTable $authEnCours): bool
    {

        $sql = "SELECT * FROM p4t1_utilisateur WHERE uti_log = ?";

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