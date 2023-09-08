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
        $sql = "SELECT * FROM lieux WHERE codeL = ?";
        $idRequete = $this->executeRequete($sql, [$this->parametre['codel']]); // requête préparée

        return new LieuxTable($idRequete->fetch(PDO::FETCH_ASSOC));
    }

    public function addLieux(LieuxTable $valeurs)
    {
        $sql = "INSERT INTO lieux (nom, adresse1, adresse2, adresse3, adresse4, codePostal, ville,
                    telephoneS, contact, telephoneC, capacite) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getNom(),
            $valeurs->getAdresse1(),
            $valeurs->getAdresse2(),
            $valeurs->getAdresse3(),
            $valeurs->getAdresse4(),
            $valeurs->getCodepostal(),
            $valeurs->getVille(),
            $valeurs->getTelephoneS(),
            $valeurs->getContact(),
            $valeurs->getTelephoneC(),
            $valeurs->getCapacite(),
        ]);

        if ($idRequete) {

            LieuxTable::setMessageSucces("Création du lieu correctement effectué.");
        }
    }

    public function deleteLieux(LieuxTable $valeurs)
    {
        $sql = "DELETE FROM lieux where codeL = ?";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getCodeL()
        ]);
        if ($idRequete) {
            LieuxTable::setMessageSucces("Suppression du lieu correctement effectué.");
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
            $valeurs->getCodeL(),
        ]);
        if ($idRequete) {
            LieuxTable::setMessageSucces("Modification du lieu correctement effectué.");
        }
    }
}

