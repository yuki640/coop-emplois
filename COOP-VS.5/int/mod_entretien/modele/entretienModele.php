<?php

class EntretienModele extends Modele
{

    private $parametre = []; //Tableau = $_REQUEST du fichier index

    public function __construct($parametre)
    {

        $this->parametre = $parametre;

    }

    public function getListeEntretien()
    {

        $sql = "SELECT * FROM p4t1_accompagnateurs";

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
    public function getUnEntretien()
    {
        $sql = "SELECT p4t1_accompagnateurs.*, p4t1_utilisateur.uti_log FROM p4t1_accompagnateurs, p4t1_utilisateur WHERE p4t1_accompagnateurs.acc_ide = ? AND p4t1_utilisateur.uti_ide_acc = ?";
        $idRequete = $this->executeRequete($sql, [
            $this->parametre['acc_ide'],
            $this->parametre['acc_ide']
        ]); // requête préparée

        return new EntretienTable($idRequete->fetch(PDO::FETCH_ASSOC));
    }

    public function addEntretien(EntretienTable $valeurs)
    {
        $sql = "INSERT INTO p4t1_accompagnateurs (acc_nom, acc_pre, acc_tel, acc_mail, acc_fon) VALUES (?, ?, ?, ?, ?)";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getNom(),
            $valeurs->getPrenom(),
            $valeurs->getTelephone(),
            $valeurs->getMail(),
            $valeurs->getFonction(),
        ]);

        $sql = "SELECT LAST_INSERT_ID() as acc_ide FROM p4t1_accompagnateurs";
        $lastId = $this->executeRequete($sql);


        $sql = "INSERT INTO p4t1_utilisateur (uti_log, uti_ide_acc, uti_mdp) VALUES (?, ?, ?)";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getLog(),
            $lastId->fetch(PDO::FETCH_ASSOC)['acc_ide'],
            $valeurs->getMdp(),
        ]);

        // var_dump($valeurs);
        //     die();

        if ($idRequete) {

            EntretienTable::setMessageSucces("Création de l'accompagnateurs correctement effectué.");
        }
    }

    public function deleteEntretien(EntretienTable $valeurs)
    {
        $sql = "DELETE FROM p4t1_utilisateur where uti_ide_acc = ?";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getIde()
        ]);

        
        $sql = "DELETE FROM p4t1_accompagnateurs where acc_ide = ?";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getIde()
        ]);
       
        if ($idRequete) {
            EntretienTable::setMessageSucces("Suppression de l'accompagnateurs correctement effectué.");
        }
    }

    public function verifieMail(EntretiensTable $valeurs)
    {
        $sql = "select * from p4t1_accompagnateurs where acc_mail = ?";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getMail()
        ]);

        $rowCount = $idRequete->rowCount();
        if ($rowCount > 0 ) {
            EntretienTable::setMessageErreur("cet email est déja utilisé");
            return false;
        }
        return true;
    }

    public function verifieAssignation(EntretienTable $valeurs)
    {
        $sql = "select reu_acc from p4t1_reunion where reu_acc = ?";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getIde()
        ]);

        $rowCount = $idRequete->rowCount();

        if ($rowCount > 0) {
            EntretienTable::setMessageErreur("Suppression de l'accompagnateur impossible car il est liée a au moins une réunion");
            return false;
        }
        return true;
    }
    public function updateEntretien(EntretienTable $valeurs)
    {
        // recuperer la date est l'heure du jour en france

        $valeurs->setAcc_dmo(date("Y-m-d H:i:s"));
        $sql = "UPDATE p4t1_accompagnateurs, p4t1_utilisateur SET p4t1_accompagnateurs.acc_nom = ?, p4t1_accompagnateurs.acc_pre = ?, p4t1_accompagnateurs.acc_tel = ?,
         p4t1_accompagnateurs.acc_mail = ?,p4t1_accompagnateurs.acc_fon = ?,
         p4t1_accompagnateurs.acc_dmo = ?, p4t1_utilisateur.uti_dmo = ?, p4t1_utilisateur.uti_log = ?
          WHERE  p4t1_accompagnateurs.acc_ide = ? AND p4t1_utilisateur.uti_ide_acc = ?";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getNom(),
            $valeurs->getPrenom(),
            $valeurs->getTelephone(),
            $valeurs->getMail(),
            $valeurs->getFonction(),
            $valeurs->getDateM(),
            $valeurs->getDateM(),
            $valeurs->getLog(),
            $valeurs->getIde(),
            $valeurs->getIde(),
        ]);
        if ($idRequete) {
            EntretienTable::setMessageSucces("Modification de l'accompagnateur correctement effectué.");
        }
    }
}