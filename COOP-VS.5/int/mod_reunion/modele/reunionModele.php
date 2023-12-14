<?php

class ReunionModele extends Modele
{

    private $parametre = []; //Tableau = $_REQUEST du fichier index

    public function __construct($parametre)
    {

        $this->parametre = $parametre;

    }

    public function getListeReunion($valListage): ?array
    {
        $valListage = $valListage . "'" . date("Y-m-d") . "'";

        $sql = "SELECT p4t1_reunion.*,p4t1_lieux.lie_nom AS reu_lie_nom, p4t1_accompagnateurs.acc_nom  AS reu_acc_nom
FROM p4t1_reunion
LEFT JOIN p4t1_lieux ON p4t1_reunion.reu_lie = p4t1_lieux.lie_ide
LEFT JOIN p4t1_accompagnateurs ON p4t1_reunion.reu_acc = p4t1_accompagnateurs.acc_ide
WHERE p4t1_reunion.reu_dat $valListage";

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

    public function getListeLieux(): array
    {
        $sql = "SELECT lie_ide, lie_nom FROM p4t1_lieux";
        $idRequete = $this->executeRequete($sql);

        $listeLieux = [];
        while ($row = $idRequete->fetch(PDO::FETCH_ASSOC)) {
            $listeLieux[] = $row;
        }
        return $listeLieux;
    }

    public function getListeAccompagnateurs(): array
    {
        $sql = "SELECT acc_ide, acc_nom, acc_pre FROM p4t1_accompagnateurs";
        $idRequete = $this->executeRequete($sql);

        $listeAccompagnateurs = [];
        while ($row = $idRequete->fetch(PDO::FETCH_ASSOC)) {
            $listeAccompagnateurs[] = $row;
        }
        return $listeAccompagnateurs;
    }

    public function getUnReunion(): ReunionTable
    {
        $sql = "SELECT * FROM p4t1_reunion WHERE reu_ide = ?";

        $idRequete = $this->executeRequete($sql, [$this->parametre['reu_ide']]); // requête préparée

        return new ReunionTable($idRequete->fetch(PDO::FETCH_ASSOC));
    }

    public function addReunion(ReunionTable $valeurs): void
    {
        $sql = "INSERT INTO p4t1_reunion (reu_dat,reu_heu,reu_dur,reu_lie,reu_cap,reu_pre,reu_acc,reu_pub/*,reu_dcr,reu_dmo*/) VALUES (?, ?, ?, ?, ?, ?, ?, ?/*, ?, ?*/)";
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

            ReunionTable::setMessageSucces("Création de la reunion correctement effectué.");
        }
    }

    public function deleteReunion(ReunionTable $valeurs): void
    {
        $sql = "DELETE FROM p4t1_reunion where reu_ide = ?";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getReuIde()
        ]);
        if ($idRequete) {
            ReunionTable::setMessageSucces("Suppression de la reunion correctement effectué.");
        }
    }

    public function updateReunion(ReunionTable $valeurs): void
    {
        $sql = "UPDATE p4t1_reunion SET reu_dat = ? ,reu_heu = ?,reu_dur = ? ,reu_lie = ? ,reu_cap = ? ,reu_pre = ? ,reu_acc = ? ,reu_pub = ?
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
            ReunionTable::setMessageSucces("Modification de la  reunion correctement effectué.");
        }
    }

    public function VérifieNombrePlace(ReunionTable $valeurs)
    {
        $sql = "SELECT lie_cap FROM p4t1_lieux WHERE lie_ide = ?";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getReuLie()
        ]);

        if ($idRequete) {
            $row = $idRequete->fetch(PDO::FETCH_ASSOC);
            $lie_cap = $row['lie_cap'];

            if ($valeurs->getReuCap() > $lie_cap) {
                ReunionTable::setMessageErreur("La capacité saisie dépasse la capacité d'accueil de la salle.");
                return false;
            } else {
                return true;
            }
        }
    }
}

