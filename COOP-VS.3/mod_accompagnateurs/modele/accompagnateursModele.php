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
        $sql = "SELECT * FROM p4t1_accompagnateurs WHERE acc_ide = ?";
        $idRequete = $this->executeRequete($sql, [$this->parametre['acc_ide']]); // requête préparée

        return new AccompagnateursTable($idRequete->fetch(PDO::FETCH_ASSOC));
    }

    public function addAccompagnateurs(AccompagnateursTable $valeurs)
    {
//        $loginsetup = lcfirst(substr($valeurs->getNom(),0,1)). lcfirst(substr($valeurs->getPrenom(),0,1)) . date("dmo-hi");
//        $valeurs->setLogin($loginsetup);

        $sql = "INSERT INTO p4t1_accompagnateurs (acc_nom, acc_pre, acc_tel, acc_mail, acc_fon) VALUES (?, ?, ?, ?, ?)";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getNom(),
            $valeurs->getPrenom(),
            $valeurs->getTelephone(),
            $valeurs->getMail(),
            $valeurs->getFonction(),
        ]);

        // var_dump($valeurs);
        //     die();

        if ($idRequete) {

            AccompagnateursTable::setMessageSucces("Création du accompagnateurs correctement effectué.");
        }
    }

    public function deleteAccompagnateurs(AccompagnateursTable $valeurs)
    {
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

    public function updateAccompagnateurs(AccompagnateursTable $valeurs)
    {
        $sql = "UPDATE p4t1_accompagnateurs SET acc_nom = ?, acc_pre = ?,acc_tel = ?, acc_mail = ?,acc_fon = ? WHERE acc_ide = ?";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getNom(),
            $valeurs->getPrenom(),
            $valeurs->getTelephone(),
            $valeurs->getMail(),
            $valeurs->getFonction(),
            $valeurs->getIde(),
        ]);
        if ($idRequete) {
            AccompagnateursTable::setMessageSucces("Modification de l'accompagnateur correctement effectué.");
        }
    }
}

