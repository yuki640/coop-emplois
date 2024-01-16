<?php

class PorteurdeprojetModele extends Modele
{

    private $parametre = []; //Tableau = $_REQUEST du fichier index

    public function __construct($parametre)
    {

        $this->parametre = $parametre;

    }

    public function getListePdP(): ?array
    {

        $sql = "SELECT * FROM p4t1_porteur_de_projet";

        $idRequete = $this->executeRequete($sql); // requête simple

        if ($idRequete->rowCount() > 0) {
            while ($row = $idRequete->fetch(PDO::FETCH_ASSOC)) {

                $listeLieux[] = new PorteurdeprojetTable($row);
            }
            return $listeLieux;
        } else {
            return null;
        }

    }

    public function getUnPdP(): PorteurdeprojetTable
    {
        $sql = "SELECT * FROM p4t1_porteur_de_projet WHERE pdp_ide = ?";
        $idRequete = $this->executeRequete($sql, [$this->parametre['pdp_ide']]); // requête préparée

        return new PorteurdeprojetTable($idRequete->fetch(PDO::FETCH_ASSOC));
    }

    public function addPdP(PorteurdeprojetTable $valeurs): void
    {
        $sql = "INSERT INTO p4t1_porteur_de_projet (pdp_nom,pdp_npre, pdp_ad1, pdp_ad2, pdp_ad3, pdp_ad4, pdp_cpo,pdp_vil,
                    pdp_tel,pdp_por,pdp_mai,pdp_dna,pdp_pri,pdp_een,pdp_sor,pdp_reu,pdp_vit) VALUES (?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?,?)";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getNom(),
            $valeurs->getNpre(),
            $valeurs->getAd1(),
            $valeurs->getAd2(),
            $valeurs->getAd3(),
            $valeurs->getAd4(),
            $valeurs->getCpo(),
            $valeurs->getVil(),
            $valeurs->getTel(),
            $valeurs->getPor(),
            $valeurs->getMai(),
            $valeurs->getDna(),
            $valeurs->getPri(),
            $valeurs->getEen(),
            $valeurs->getSor(),
            $valeurs->getReu(),
            $valeurs->getVit(),
        ]);

        if ($idRequete) {

            PorteurdeprojetTable::setMessageSucces("Création du lieu correctement effectué.");
        }
    }

    public function deletePdP(PorteurdeprojetTable $valeurs): void
    {
        $sql = "DELETE FROM p4t1_porteur_de_projet where pdp_ide = ?";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getIde()
        ]);
        if ($idRequete) {
            PorteurdeprojetTable::setMessageSucces("Suppression du lieu correctement effectué.");
        }
    }

//    public function verifieAssignation(LieuxTable $valeurs)
//    {
//        $sql = "select reu_lie from p4t1_reunion where reu_lie = ?";
//        $idRequete = $this->executeRequete($sql, [
//            $valeurs->getIde()
//        ]);
//
//        $rowCount = $idRequete->rowCount();
//
//        if ($rowCount > 0) {
//            LieuxTable::setMessageErreur("Suppression du lieu impossible car il est liée a au moins une réunion");
//            return false;
//        }
//        return true;
//    }

    public function updatePdP(PorteurdeprojetTable $valeurs): void
    {
        $sql = "UPDATE p4t1_porteur_de_projet SET pdp_nom = ?,pdp_npre = ?, pdp_ad1 = ?,pdp_ad2 = ?,pdp_ad3 = ?,pdp_ad4 = ?, pdp_cpo = ?,
                 pdp_vil = ?, pdp_tel = ?,pdp_por= ?, pdp_mai = ?, pdp_dna = ?,pdp_pri = ? , pdp_een = ? ,pdp_sor = ?, pdp_reu = ?, pdp_vit = ?
             WHERE pdp_ide = ?";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getNom(),
            $valeurs->getNpre(),
            $valeurs->getAd1(),
            $valeurs->getAd2(),
            $valeurs->getAd3(),
            $valeurs->getAd4(),
            $valeurs->getCpo(),
            $valeurs->getVil(),
            $valeurs->getTel(),
            $valeurs->getPor(),
            $valeurs->getMai(),
            $valeurs->getDna(),
            $valeurs->getPri(),
            $valeurs->getEen(),
            $valeurs->getSor(),
            $valeurs->getReu(),
            $valeurs->getVit(),
        ]);
        if ($idRequete) {
            PorteurdeprojetTable::setMessageSucces("Modification du lieu correctement effectué.");
        }
    }
}

