<?php
    session_start();
    error_reporting(E_ALL ^ E_NOTICE);

    include_once __DIR__.'/../models/connectaBD.php';
    include_once __DIR__.'/../models/modificar_usuari.php';

    $connexio=connectaBD();
    $usuari= ModificaUsuari($connexio);

?>
<meta http-equiv="refresh" content="0;url=/../TDIW_PLAB/index.php?accio=home">
