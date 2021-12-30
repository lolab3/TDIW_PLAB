<?php
    require_once __DIR__.'/../models/connectaBD.php';
    require_once __DIR__.'/../models/inserirUsuari.php';

    $connexio = connectaBD();
    $resultat = inserirUsuari($connexio);

    if($resultat[0]) {
        #echo "Correcte";
        include __DIR__ .'/iniciar_sessio.php';
    } else{
        #echo $errorLogin;
        $errorLogin = $resultat[1];
        include __DIR__ . '/../vistes/comprovaUsuariinc.php';
    }
?>