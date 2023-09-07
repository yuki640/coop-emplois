<?php

class LieuxModele extends Modele
{

    private $parametre = []; //Tableau = $_REQUEST du fichier index

    public function __construct($parametre)
    {

        $this->parametre = $parametre;

    }

    public function getListeLieux()
    {

        $sql = "SELECT * FROM lieux";

        $idRequete = $this->executeRequete($sql); // requête simple

        if ($idRequete->rowCount() > 0) {
            while ($row = $idRequete->fetch(PDO::FETCH_ASSOC)) {

                $listeLieux[] = new LieuxTable($row);
            }
            return $listeLieux;
        } else {
            return null;
        }

    }

    public function getUnLieux()
    {
        $sql = "SELECT * FROM lieux WHERE identifiant = ?";
        $idRequete = $this->executeRequete($sql, [$this->parametre['identifiant']]); // requête préparée

        return new LieuxTable($idRequete->fetch(PDO::FETCH_ASSOC));
    }

//    public function addLieux(LieuxTable $valeurs)
//    {
//        $sql = "INSERT INTO client (nom, adresse, cp, ville, telephone) VALUES (?, ?, ?, ?, ?)";
//
//        $idRequete = $this->executeRequete($sql, [
//            $valeurs->getNom(),
//            $valeurs->getAdresse(),
//            $valeurs->getCp(),
//            $valeurs->getVille(),
//            $valeurs->getTelephone()
//        ]);
//
//        if ($idRequete) {
//
//            ClientTable::setMessageSucces("Création du client correctement effectué.");
//        }
//    }

    public function deleteLieux(LieuxTable $valeurs)
    {
        $sql = "DELETE FROM lieux where identifiant = ?";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getIdentifiant()
        ]);
        if ($idRequete) {
            LieuxTable::setMessageSucces("Suppression du lieux correctement effectué.");
        }
    }

//    public function verifieAssignation(LieuxTable $valeurs)
//    {
//        $sql = "select * from accompagnateur where codeA = ?";
//        $idRequete = $this->executeRequete($sql, [
//            $valeurs->getidentifiant()
//        ]);
//
//        $rowCount = $idRequete->rowCount();
//
//        if ($rowCount > 0) {
//            ClientTable::setMessageErreur("Suppression du lieu impossible car ce client posséde une réunion");
//            return false;
//        }
//        return true;
//    }

    public function updateLieux(LieuxTable $valeurs)
    {
        $sql = "UPDATE lieux SET nom = ?, adresse1 = ?,adresse2 = ?,adresse3 = ?,adresse4 = ?, code_postal = ?,
                 ville = ?, telephone_s = ?,contact= ?, telephone_c = ?, capacite = ?, date_m = ?
             WHERE codeL = ?";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getNom(),
            $valeurs->getAdresse1(),
            $valeurs->getAdresse2(),
            $valeurs->getAdresse3(),
            $valeurs->getAdresse4(),
            $valeurs->getCodePostal(),
            $valeurs->getVille(),
            $valeurs->getTelephoneS(),
            $valeurs->getContact(),
            $valeurs->getTelephoneC(),
            $valeurs->getCapacite(),
            $valeurs->getDateM(),
        ]);
        if ($idRequete) {
            LieuxTable::setMessageSucces("Modification du lieux correctement effectué.");
        }
    }
}

