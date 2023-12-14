<?php
//echo "La liste des réunions";

require_once 'int/include/configuration.php';

$tpl = new Smarty();

//Initialisation session cURL
$curl = curl_init();

if($_SERVER['SERVER_ADDR'] == '94.247.183.122'){
    $url = '';
    // Url du fichier reunion.php sur le serveur
}else{

    $url = 'http://localhost/coopemploi/api/reunion.php';
}

$options = [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
];

curl_setopt_array($curl,$options);

$reponse = curl_exec($curl);

if($reponse === false){
    var_dump('La réponse est : ' . curl_error($curl));
}else{


    if(curl_getinfo($curl, CURLINFO_HTTP_CODE) === 200){

        //Tout est OK - Objet reçu = $reu
        $reu = json_decode($reponse);


        if(isset($reu->message))
        {
            $tpl->assign('message', $reu->message);
            $tpl->assign('affichage', 0);

        }else{

            $tpl->assign('message', '');
            $tpl->assign('affichage', 1);
            $tpl->assign('listeReunions', $reu);
        }



        $tpl->display('listeReunionVue.tpl');
    }
}

curl_close($curl);





