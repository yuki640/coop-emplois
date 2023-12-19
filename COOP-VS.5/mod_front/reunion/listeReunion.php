<?php
//echo "La liste des réunions";

require_once '../../int/include/configuration.php';

$tpl = new Smarty();
//Initialisation session cURL
$curl = curl_init();

if ($_SERVER['SERVER_ADDR'] == '94.247.183.122') {
    // Url du fichier reunion.php sur le serveur
    $url = "https://devroomservice.v70208.campus-centre.fr/api/reunion.php";
} else {

    $url = 'http://localhost/coop-emplois/COOP-VS.5/api/reunion.php';

//    $url = 'http://localhost/coopemploi/api/reunion.php';
}

$options = [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
];

curl_setopt_array($curl, $options);

$reponse = curl_exec($curl);

if ($reponse === false) {
    var_dump('La réponse est : ' . curl_error($curl));
} else {


    if (curl_getinfo($curl, CURLINFO_HTTP_CODE) === 200) {

        //Tout est OK - Objet reçu = $reu
        $reu = json_decode($reponse);


        if (isset($reu->message)) {
            $tpl->assign('message', $reu->message);
            $tpl->assign('affichage', 0);

        } else {
            $formatter = new IntlDateFormatter(
                'fr_FR',
                IntlDateFormatter::FULL,
                IntlDateFormatter::NONE,
                'Europe/Paris',
                IntlDateFormatter::GREGORIAN,
                'EEEE d MMMM Y'
            );
            $tpl->assign('message', '');
            $tpl->assign('affichage', 1);
            foreach ($reu as $key => $uneReunion) {
                $dateObj = DateTime::createFromFormat('Y-m-d', $uneReunion->reu_dat);
                if ($dateObj) {
                    $uneReunion->reu_dat = $formatter->format($dateObj);
                } else {
                    $uneReunion->reu_dat = "Date invalide";
                }
            }

            $tpl->assign('listeReunions', $reu);
        }


        try {

            $tpl->display('listeReunionVue.tpl');
        } catch (SmartyException|Exception $e) {
            var_dump($e);
        }
    } else {
        var_dump("probléme CURL", $url);
    }
}

curl_close($curl);


