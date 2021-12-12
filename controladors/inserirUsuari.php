<?php
    require_once __DIR__.'/../models/connectaBD.php';
    require_once __DIR__.'/../models/inserirUsuari.php';

    $connexio = connectaBD();
    $resultat = inserirUsuari($connexio);

    if($resultat) {
        include __DIR__ . '/../vistes/comprova_registre.php';
    } else{
        include __DIR__ . '/../vistes/comprovaUsuariinc.php';
    }
?>