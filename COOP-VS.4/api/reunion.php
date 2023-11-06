<?php

require_once '../int/include/configuration.php';

class AccesBd extends modele
{
    public function rechercheReunion(){

        $sql = 'SELECT reu_ide, reu_dat, reu_heu, reu_dur, reu_pre, reu_cap, lie_nom, lie_cpo, lie_vil'
             . ' FROM ' . P .'reunion AS r , ' . P .'lieu AS l'
             . ' WHERE r.reu_lie = l.lie_ide '
             . ' AND reu_dat >= CURDATE() AND reu_pub = 1 '
             . ' ORDER BY reu_dat DESC ';

        return $this->executeRequete($sql);

    }

}

/** Script Principal */

// Vérification : méthode doit être égale à GET
if($_SERVER['REQUEST_METHOD'] == 'GET'){

    $obMod = new AccesBd();

    $idRequete = $obMod->rechercheReunion();

    // Vérification d'au moins 1 enregistrement (1 réunion)
    if($idRequete->rowCount() > 0){

        $listeReunions = $idRequete->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode($listeReunions);

    }else {

        echo json_encode(["message" => "Aucune réunion de planifiée actuellement."]);
    }


}else{

    // Gestion de l'erreur
    echo json_encode(["message" => "La méthode n'est pas autorisée."]);

}
