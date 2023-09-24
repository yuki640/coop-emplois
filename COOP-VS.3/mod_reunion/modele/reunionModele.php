<?php

class ReunionModele extends Modele
{

    private $parametre = []; //Tableau = $_REQUEST du fichier index

    public function __construct($parametre)
    {

        $this->parametre = $parametre;

    }

    public function getListeReunion($valListage)
    {
        $valListage = $valListage . "'" . date("Y-m-d") . "'";

        $sql = "SELECT * FROM p4t1_reunion where reu_dat $valListage";
        $idRequete = $this->executeRequete($sql); // requête simple

        if ($idRequete->rowCount() > 0) {
            while ($row = $idRequete->fetch(PDO::FETCH_ASSOC)) {

                $listeReunion[] = new ReunionTable($row);
            }
            return $listeReunion;
        } else {
            return null;
        }

    }

    public function getUnReunion()
    {
        $sql = "SELECT * FROM p4t1_reunionx WHERE reu_ide = ?";
        $idRequete = $this->executeRequete($sql, [$this->parametre['reu_ide']]); // requête préparée

        return new ReunionTable($idRequete->fetch(PDO::FETCH_ASSOC));
    }

    public function addReunion(ReunionTable $valeurs)
    {
        $sql = "INSERT INTO p4t1_reunionx (lie_nom, lie_ad1, lie_ad2, lie_ad3, lie_ad4, lie_cpo, lie_ville,
                    lie_tel, lie_con, lie_tco, lie_cap) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
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

            ReunionTable::setMessageSucces("Création de la reunion correctement effectué.");
        }
    }

    public function deleteReunion(ReunionTable $valeurs)
    {
        $sql = "DELETE FROM p4t1_reunionx where lie_ide = ?";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getIde()
        ]);
        if ($idRequete) {
            ReunionTable::setMessageSucces("Suppression de la reunion correctement effectué.");
        }
    }

//    public function verifieAssignation(ReunionTable $valeurs)
//    {
//        $sql = "select * from accompagnateur where codeA = ?";
//        $idRequete = $this->executeRequete($sql, [
//            $valeurs->getidentifiant()
//        ]);
//
//        $rowCount = $idRequete->rowCount();
//
//        if ($rowCount > 0) {
//            ClientTable::setMessageErreur("Suppression de la reunion impossible car ce client posséde une réunion");
//            return false;
//        }
//        return true;
//    }

    public function updateReunion(ReunionTable $valeurs)
    {
        $sql = "UPDATE p4t1_reunionx SET lie_nom = ?, lie_ad1 = ?,lie_ad2 = ?,lie_ad3 = ?,lie_ad4 = ?, lie_cpo = ?,
                 lie_ville = ?, lie_tel = ?,lie_con= ?, lie_tco = ?, lie_cap = ?
             WHERE lie_ide = ?";
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
            $valeurs->getIde()
        ]);
        if ($idRequete) {
            ReunionTable::setMessageSucces("Modification de la  reunion correctement effectué.");
        }
    }
}

