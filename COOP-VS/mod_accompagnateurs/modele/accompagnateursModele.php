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

        $sql = "SELECT * FROM accompagnateurs";

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
        $sql = "SELECT * FROM accompagnateurs WHERE codeA = ?";
        $idRequete = $this->executeRequete($sql, [$this->parametre['codea']]); // requête préparée

        return new AccompagnateursTable($idRequete->fetch(PDO::FETCH_ASSOC));
    }

    public function addAccompagnateurs(AccompagnateursTable $valeurs)
    {
        $loginsetup = lcfirst(substr($valeurs->getNom(),0,1)). lcfirst(substr($valeurs->getPrenom(),0,1)) . date("dmo-hi");
        $valeurs->setLogin($loginsetup);

        $sql = "INSERT INTO accompagnateurs (nom, prenom, telephone, email, specialisation, login) VALUES (?, ?, ?, ?, ?,?)";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getNom(),
            $valeurs->getPrenom(),
            $valeurs->getTelephone(),
            $valeurs->getEmail(),
            $valeurs->getSpecialisation(),
            $valeurs->getLogin()
        ]);

        // var_dump($valeurs);
        //     die();

        if ($idRequete) {

            AccompagnateursTable::setMessageSucces("Création du accompagnateurs correctement effectué.");
        }
    }

    public function deleteAccompagnateurs(AccompagnateursTable $valeurs)
    {
        $sql = "DELETE FROM accompagnateurs where codeA = ?";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getCodeA()
        ]);
        if ($idRequete) {
            AccompagnateursTable::setMessageSucces("Suppression de l'accompagnateurs correctement effectué.");
        }
    }

    public function verifieMail(AccompagnateursTable $valeurs)
    {
        $sql = "select * from accompagnateurs where email = ?";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getEmail()
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
        $sql = "UPDATE accompagnateurs SET nom = ?, prenom = ?,telephone = ?,email = ?,specialisation = ? WHERE codea = ?";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getNom(),
            $valeurs->getPrenom(),
            $valeurs->getTelephone(),
            $valeurs->getEmail(),
            $valeurs->getSpecialisation(),
            $valeurs->getCodea(),
        ]);
        if ($idRequete) {
            AccompagnateursTable::setMessageSucces("Modification de l'accompagnateur correctement effectué.");
        }
    }
}

