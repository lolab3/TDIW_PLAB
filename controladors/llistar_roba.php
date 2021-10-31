<?php

    require_once __DIR__.'/../models/connectaBD.php';
    require_once __DIR__.'/../models/consulta_categories.php';
    require_once __DIR__.'/../models/consultaProds.php';

    $connexio = connectaBD();
    $categories = getCategories($connexio);
    $roba = getRoba($connexio, 1); // Aquesta crida és al model

    include __DIR__.'/../vistes/llistar_roba.php';

?>
