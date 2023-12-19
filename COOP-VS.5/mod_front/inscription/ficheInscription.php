<?php

require_once '../../int/include/configuration.php';



$tpl = new Smarty();
// var_dump($_POST);
if (isset($_POST['form_inscription'])) {
   // $tpl->assign('rappel', $_POST['rappel']);
    $tpl->assign('reu_ide', $_POST['reu_ide']);
    $tpl->assign('message', "");
    $tpl->assign('affichage', 0);

    $tpl->display('ficheInscriptionVue.tpl');

} elseif (isset($_POST['inscription'])) {
    // Accès à l'API

    //initialisation d'une nouvelle ressource cURL
    $curl = curl_init();

    if ($_SERVER['SERVER_ADDR'] == 'https://devroomservice.v70208.campus-centre.fr') {

        // l'URL du fichier reunion.php sur le vps
        $url = "https://devroomservice.v70208.campus-centre.fr/api/inscription.php";
    } else {

        $url = 'http://localhost/coop-emplois/COOP-VS.5/api/inscription.php';
    }


    $postFields = json_encode([
        'pdp_pre' => $_POST['pdp_pre'],
        'pdp_nom' => $_POST['pdp_nom'],
        'pdp_cpo' => $_POST['pdp_cpo'],
        'pdp_vil' => $_POST['pdp_vil'],
        'pdp_tel' => $_POST['pdp_tel'],
        'pdp_por' => $_POST['pdp_por'],
        'pdp_mai' => $_POST['pdp_mai'],
        'pdp_ric' => $_POST['reu_ide'],
    ]);

    $options = [
        CURLOPT_URL => $url,
        CURLOPT_HTTPHEADER => ['content-type:application/json'],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $postFields
    ];


    curl_setopt_array($curl, $options);

    $reponse = curl_exec($curl);


    if ($reponse === false) {

        var_dump('LA REPONSE EST : <br>' . curl_error($curl));

    } else {

        $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);


        if ($http_code === 201) {

            $tpl->assign('affichage', 1);

        } else {

            $tpl->assign('affichage', 0);

        }

        $a = json_decode($reponse);

        $tpl->assign('message', $a->message);
        $tpl->assign('rappel', $_POST['rappel']);
        $tpl->assign('reu_ide', $_POST['reu_ide']);

        $tpl->display('ficheInscriptionVue.tpl');
    }

    curl_close($curl);

}
