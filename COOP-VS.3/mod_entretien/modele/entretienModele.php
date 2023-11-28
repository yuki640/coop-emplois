<?php

class EntretienModele extends Modele
{

    private $parametre = []; //Tableau = $_REQUEST du fichier index

    public function __construct($parametre)
    {

        $this->parametre = $parametre;

    }

    public function getListeEntretien($valListage)
    {
        $valListage = $valListage . "'" . date("Y-m-d") . "'";

        $sql = "SELECT p4t1_entretien.*,p4t1_lieux.lie_nom AS reu_lie_nom, p4t1_accompagnateurs.acc_nom  AS reu_acc_nom
FROM p4t1_entretien
LEFT JOIN p4t1_lieux ON p4t1_entretien.reu_lie = p4t1_lieux.lie_ide
LEFT JOIN p4t1_accompagnateurs ON p4t1_entretien.reu_acc = p4t1_accompagnateurs.acc_ide
WHERE p4t1_entretien.reu_dat $valListage";

        $idRequete = $this->executeRequete($sql); // requête simple
        if ($idRequete->rowCount() > 0) {
            while ($row = $idRequete->fetch(PDO::FETCH_ASSOC)) {
                $listeEntretien[] = new EntretienTable($row);
            }
            return $listeEntretien;
        } else {
            return null;
        }

    }

    public function getListeLieux()
    {
        $sql = "SELECT lie_ide, lie_nom FROM p4t1_lieux";
        $idRequete = $this->executeRequete($sql);

        $listeLieux = [];
        while ($row = $idRequete->fetch(PDO::FETCH_ASSOC)) {
            $listeLieux[] = $row;
        }
        return $listeLieux;
    }

    public function getListeAccompagnateurs()
    {
        $sql = "SELECT acc_ide, acc_nom, acc_pre FROM p4t1_accompagnateurs";
        $idRequete = $this->executeRequete($sql);

        $listeAccompagnateurs = [];
        while ($row = $idRequete->fetch(PDO::FETCH_ASSOC)) {
            $listeAccompagnateurs[] = $row;
        }
        return $listeAccompagnateurs;
    }

    public function getUnEntretien()
    {
        $sql = "SELECT * FROM p4t1_entretien WHERE reu_ide = ?";

        $idRequete = $this->executeRequete($sql, [$this->parametre['reu_ide']]); // requête préparée

        return new EntretienTable($idRequete->fetch(PDO::FETCH_ASSOC));
    }

    public function addEntretien(EntretienTable $valeurs)
    {
        $sql = "INSERT INTO p4t1_entretien (reu_dat,reu_heu,reu_dur,reu_lie,reu_cap,reu_pre,reu_acc,reu_pub/*,reu_dcr,reu_dmo*/) VALUES (?, ?, ?, ?, ?, ?, ?, ?/*, ?, ?*/)";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getReuDat(),
            $valeurs->getReuHeu(),
            $valeurs->getReuDur(),
            $valeurs->getReuLie(),
            $valeurs->getReuCap(),
            $valeurs->getReuPre(),
            $valeurs->getReuAcc(),
            $valeurs->getReuPub(),
//            $valeurs->getReuDcr(),
//            $valeurs->getReuDmo(),
        ]);

        if ($idRequete) {

            EntretienTable::setMessageSucces("Création de la entretien correctement effectué.");
        }
    }

    public function deleteEntretien(EntretienTable $valeurs)
    {
        $sql = "DELETE FROM p4t1_entretien where reu_ide = ?";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getReuIde()
        ]);
        if ($idRequete) {
            EntretienTable::setMessageSucces("Suppression de la entretien correctement effectué.");
        }
    }

    public function updateEntretien(EntretienTable $valeurs)
    {
        $sql = "UPDATE p4t1_entretien SET reu_dat = ? ,reu_heu = ?,reu_dur = ? ,reu_lie = ? ,reu_cap = ? ,reu_pre = ? ,reu_acc = ? ,reu_pub = ?
             WHERE reu_ide = ?";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getReuDat(),
            $valeurs->getReuHeu(),
            $valeurs->getReuDur(),
            $valeurs->getReuLie(),
            $valeurs->getReuCap(),
            $valeurs->getReuPre(),
            $valeurs->getReuAcc(),
            $valeurs->getReuPub(),
            $valeurs->getReuIde()
        ]);
        if ($idRequete) {
            EntretienTable::setMessageSucces("Modification de la  entretien correctement effectué.");
        }
    }

    public function VérifieNombrePlace(EntretienTable $valeurs)
    {
        $sql = "SELECT lie_cap FROM p4t1_lieux WHERE lie_ide = ?";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getReuLie()
        ]);

        if ($idRequete !== false) {
            $row = $idRequete->fetch(PDO::FETCH_ASSOC);
            $lie_cap = $row['lie_cap'];

            if ($valeurs->getReuCap() > $lie_cap) {
                EntretienTable::setMessageErreur("La capacité saisie dépasse la capacité d'accueil de la salle.");
                return false;
            } else {
                return true;
            }
        }
    }
}

