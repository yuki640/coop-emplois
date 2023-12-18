<?php
require_once('../int/include/configuration.php');

class AccesBdInscription extends Modele
{

    public function addInscription($data): object
    {
        //Conversion de pdp_ric de chaine vers entier
        $pdp_ric = intval($data->pdp_ric);

        $sql = 'INSERT INTO p4t1_porteur_de_projet '
            . ' (pdp_nom, pdp_npre, pdp_cpo, pdp_vil, pdp_tel, pdp_por, pdp_mai, pdp_reu, pdp_dcr)'
            . ' VALUES(?,?,?,?,?,?,?,?,?)';

        return $this->executeRequete($sql, [
            $data->pdp_nom,
            $data->pdp_pre,
            $data->pdp_cpo,
            $data->pdp_vil,
            $data->pdp_tel,
            $data->pdp_por,
            $data->pdp_mai,
            $pdp_ric,
            DateHeure::getDateEcriture(),
        ]);
    }
}

/**Script Principal */


// On vérifie que la méthode HTTP est bien : POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $obMod = new AccesBdInscription();

    //Récupération des données soumises
    $data = json_decode(file_get_contents("php://input"));


    if (!empty($data->pdp_nom) && !empty($data->pdp_pre) && !empty($data->pdp_cpo)
        && !empty($data->pdp_vil) && (!empty($data->pdp_tel) || !empty($data->pdp_por) ||
            !empty($data->pdp_mai))
        && !empty($data->pdp_ric)) {

        $idRequete = $obMod->addInscription($data);

        if ($idRequete) {
            http_response_code(201);
            echo json_encode(["message" => "Votre inscription a bien été prise en compte. Nous vous remercions"]);
        } else {
            http_response_code(503);
            echo json_encode(["message" => "Un problème est survenu lors de votre inscription. 
            Veuillez contacter CoopEmploi"]);
        }


    } else {

        echo json_encode(["message" => "Certaines données du formulaire sont absentes."]);
    }


} else {

    http_response_code(405);

    echo json_encode(["message" => "La méthode n'est pas autorisée"]);
}
