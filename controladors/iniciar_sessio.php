<?php
    require_once __DIR__.'/../models/connectaBD.php';
    require_once __DIR__.'/../models/consultaUsuari.php';

    $connexio = connectaBD();
    $usuaris = getUsuaris($connexio); // Aquesta crida és al model

    include __DIR__.'/../vistes/llistar_inicisessio.php';
?>