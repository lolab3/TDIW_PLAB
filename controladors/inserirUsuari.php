<?php
    require_once __DIR__.'/../models/connectaBD.php';
    require_once __DIR__.'/../models/inserirUsuari.php';

    $connexio = connectaBD();
    $resultat = inserirUsuari($connexio);
    $missatge = $resultat[1];

    include __DIR__ . '/../vistes/registreUsuariinc.php';
?>