<?php

    require_once __DIR__.'/../models/connectaBD.php';
    require_once __DIR__.'/../models/consulta_categories.php';

    $connexio = connectaBD();


    include __DIR__.'/../vistes/llistar_categories.php';
?>