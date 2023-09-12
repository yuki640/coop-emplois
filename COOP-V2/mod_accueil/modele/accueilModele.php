<?php


class AccueilModele extends Modele
{
    private $parametre = array();


    function __construct($parametre)
    {
        $this->parametre = $parametre;
    }

    public function caMois()
    {

        //Requête de type SELECT
        $sql = "SELECT MONTH(date_livraison) AS mois, SUM(total_ht) AS total_ht from commande GROUP BY MONTH(date_livraison)";

        $resultat = $this->executeRequete($sql);

        return $resultat->fetchall(PDO::FETCH_ASSOC);
    }
}