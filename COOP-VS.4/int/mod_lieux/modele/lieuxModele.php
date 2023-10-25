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

        $sql = "SELECT * FROM p4t1_lieux";

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
        $sql = "SELECT * FROM p4t1_lieux WHERE lie_ide = ?";
        $idRequete = $this->executeRequete($sql, [$this->parametre['lie_ide']]); // requête préparée

        return new LieuxTable($idRequete->fetch(PDO::FETCH_ASSOC));
    }

    public function addLieux(LieuxTable $valeurs)
    {
        $sql = "INSERT INTO p4t1_lieux (lie_nom, lie_ad1, lie_ad2, lie_ad3, lie_ad4, lie_cpo, lie_ville,
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

            LieuxTable::setMessageSucces("Création du lieu correctement effectué.");
        }
    }

    public function deleteLieux(LieuxTable $valeurs)
    {
        $sql = "DELETE FROM p4t1_lieux where lie_ide = ?";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getIde()
        ]);
        if ($idRequete) {
            LieuxTable::setMessageSucces("Suppression du lieu correctement effectué.");
        }
    }

    public function verifieAssignation(LieuxTable $valeurs)
    {
        $sql = "select reu_lie from p4t1_reunion where reu_lie = ?";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getIde()
        ]);

        $rowCount = $idRequete->rowCount();

        if ($rowCount > 0) {
            LieuxTable::setMessageErreur("Suppression du lieu impossible car il est liée a au moins une réunion");
            return false;
        }
        return true;
    }

    public function updateLieux(LieuxTable $valeurs)
    {
        $sql = "UPDATE p4t1_lieux SET lie_nom = ?, lie_ad1 = ?,lie_ad2 = ?,lie_ad3 = ?,lie_ad4 = ?, lie_cpo = ?,
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
            LieuxTable::setMessageSucces("Modification du lieu correctement effectué.");
        }
    }
}

