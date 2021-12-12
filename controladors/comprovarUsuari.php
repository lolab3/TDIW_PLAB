<?php
    require_once __DIR__.'/../models/connectaBD.php';
    require_once __DIR__.'/../models/comprovaUsuari.php';

    $connexio = connectaBD();
    $resultat = comprovaUsuari($connexio);

    if($resultat) {
        include __DIR__ .'/connectat_inici_sessio.php';
    } else{
        include __DIR__ . '/../vistes/comprovaUsuariinc.php';
    }
?>

