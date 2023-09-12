<?php

class AccompagnateursModele extends Modele
{

    private $parametre = []; //Tableau = $_REQUEST du fichier index

    public function __construct($parametre)
    {

        $this->parametre = $parametre;

    }

    public function getListeAccompagnateurs()
    {

        $sql = "SELECT * FROM accompagnateurs";

        $idRequete = $this->executeRequete($sql); // requête simple

        if ($idRequete->rowCount() > 0) {
            while ($row = $idRequete->fetch(PDO::FETCH_ASSOC)) {

                $listeAccompagnateurs[] = new AccompagnateursTable($row);
            }
            return $listeAccompagnateurs;
        } else {
            return null;
        }

    }

    public function getUnAccompagnateurs()
    {
        $sql = "SELECT * FROM accompagnateurs WHERE codeA = ?";
        $idRequete = $this->executeRequete($sql, [$this->parametre['codea']]); // requête préparée

        return new AccompagnateursTable($idRequete->fetch(PDO::FETCH_ASSOC));
    }

    public function addAccompagnateurs(AccompagnateursTable $valeurs)
    {
        $sql = "INSERT INTO accompagnateurs (nom, prenom, telephone, email, specialisation) VALUES (?, ?, ?, ?, ?)";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getNom(),
            $valeurs->getPrenom(),
            $valeurs->getTelephone(),
            $valeurs->getEmail(),
            $valeurs->getSpecialisation()

        ]);

        if ($idRequete) {

            AccompagnateursTable::setMessageSucces("Création du accompagnateurs correctement effectué.");
        }
    }

    public function deleteAccompagnateurs(AccompagnateursTable $valeurs)
    {
        $sql = "DELETE FROM accompagnateurs where codeA = ?";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getCodeA()
        ]);
        if ($idRequete) {
            AccompagnateursTable::setMessageSucces("Suppression du accompagnateurs correctement effectué.");
        }
    }

//    public function verifieAssignation(AccompagnateursTable $valeurs)
//    {
//        $sql = "select * from accompagnateur where codeA = ?";
//        $idRequete = $this->executeRequete($sql, [
//            $valeurs->getidentifiant()
//        ]);
//
//        $rowCount = $idRequete->rowCount();
//
//        if ($rowCount > 0) {
//            ClientTable::setMessageErreur("Suppression du accompagnateurs impossible car ce client posséde une réunion");
//            return false;
//        }
//        return true;
//    }

    public function updateAccompagnateurs(AccompagnateursTable $valeurs)
    {
        $sql = "UPDATE accompagnateurs SET nom = ?, prenom = ?,telephone = ?,email = ?,specialisation = ?, date_m = ? WHERE codea = ?";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getNom(),
            $valeurs->getPrenom(),
            $valeurs->getTelephone(),
            $valeurs->getEmail(),
            $valeurs->getSpecialisation(),
            $valeurs->getDate_m(),
            $valeurs->getCodea(),
        ]);
        if ($idRequete) {
            AccompagnateursTable::setMessageSucces("Modification du accompagnateurs correctement effectué.");
        }
    }
}

