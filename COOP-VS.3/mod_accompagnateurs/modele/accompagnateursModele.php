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

        $sql = "SELECT * FROM p4t1_accompagnateurs";

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
        $sql = "SELECT p4t1_accompagnateurs.*, p4t1_utilisateur.uti_log FROM p4t1_accompagnateurs, p4t1_utilisateur WHERE p4t1_accompagnateurs.acc_ide = ? AND p4t1_utilisateur.uti_ide_acc = ?";
        $idRequete = $this->executeRequete($sql, [
            $this->parametre['acc_ide'],
            $this->parametre['acc_ide']
        ]); // requête préparée

        return new AccompagnateursTable($idRequete->fetch(PDO::FETCH_ASSOC));
    }

    public function addAccompagnateurs(AccompagnateursTable $valeurs)
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

            AccompagnateursTable::setMessageSucces("Création du accompagnateurs correctement effectué.");
        }
    }

    public function deleteAccompagnateurs(AccompagnateursTable $valeurs)
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
            AccompagnateursTable::setMessageSucces("Suppression de l'accompagnateurs correctement effectué.");
        }
    }

    public function verifieMail(AccompagnateursTable $valeurs)
    {
        $sql = "select * from p4t1_accompagnateurs where acc_mail = ?";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getMail()
        ]);

        $rowCount = $idRequete->rowCount();
        if ($rowCount > 0 ) {
            AccompagnateursTable::setMessageErreur("cet email est déja utilisé");
            return false;
        }
        return true;
    }

    public function verifieAssignation(AccompagnateursTable $valeurs)
    {
        $sql = "select reu_acc from p4t1_reunion where reu_acc = ?";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getIde()
        ]);

        $rowCount = $idRequete->rowCount();

        if ($rowCount > 0) {
            AccompagnateursTable::setMessageErreur("Suppression de l'accompagnateur impossible car il est liée a au moins une réunion");
            return false;
        }
        return true;
    }
    public function updateAccompagnateurs(AccompagnateursTable $valeurs)
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
            AccompagnateursTable::setMessageSucces("Modification de l'accompagnateur correctement effectué.");
        }
    }
}