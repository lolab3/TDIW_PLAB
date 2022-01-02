<?php
    session_start();
    error_reporting(E_ALL ^ E_NOTICE);

    require_once __DIR__.'/../models/connectaBD.php';
    require_once __DIR__.'/../models/consultaComanda.php';

    $user_id = $_SESSION['ID'];
    $connexio = connectaBD();
    $prods = getProds($connexio, $user_id);

    $llista_ids_comanda = array();
    foreach($prods as $i){
        array_push($llista_ids_comanda,$i['id']);
    }
    $prodsComanda = getComandaProds($connexio, $llista_ids_comanda);


    include_once __DIR__.'/../vistes/llistarComandes.php';
?>