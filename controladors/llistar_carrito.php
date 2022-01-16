<?php
    session_start();
    error_reporting(E_ALL ^ E_NOTICE);
    if (isset($_SESSION['ID'])) {
        include __DIR__ . '/vistes/llistar_carro.php';
    } else {
        include __DIR__ . '/vistes/noLlistarcarro.php';
    }

?>
