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
        $sql = "SELECT * FROM accompagnateurs WHERE codeL = ?";
        $idRequete = $this->executeRequete($sql, [$this->parametre['codel']]); // requête préparée

        return new AccompagnateursTable($idRequete->fetch(PDO::FETCH_ASSOC));
    }

    public function addAccompagnateurs(accompagnateursTable $valeurs)
    {
        $sql = "INSERT INTO accompagnateurs (nom, adresse1, adresse2, adresse3, adresse4, codePostal, ville,
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

            AccompagnateursTable::setMessageSucces("Création du accompagnateurs correctement effectué.");
        }
    }

    public function deleteAccompagnateurs(AccompagnateursTable $valeurs)
    {
        $sql = "DELETE FROM accompagnateurs where codeL = ?";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getCodeL()
        ]);
        if ($idRequete) {
            AccompagnateursTable::setMessageSucces("Suppression du accompagnateurs correctement effectué.");
        }
    }

//    public function verifieAssignation(AccompagnateursTable $valeurs)
//    {
//        $sql = "select * from accompagnateur where codeA = ?";
//        $idRequete = $this->executeRequete($sql, [
//            $valeurs->getidentifiant()
//        ]);
//
//        $rowCount = $idRequete->rowCount();
//
//        if ($rowCount > 0) {
//            ClientTable::setMessageErreur("Suppression du accompagnateurs impossible car ce client posséde une réunion");
//            return false;
//        }
//        return true;
//    }

    public function updateAccompagnateurs(AccompagnateursTable $valeurs)
    {
        $sql = "UPDATE accompagnateurs SET nom = ?, adresse1 = ?,adresse2 = ?,adresse3 = ?,adresse4 = ?, code_postal = ?,
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
            AccompagnateursTable::setMessageSucces("Modification du accompagnateurs correctement effectué.");
        }
    }
}

