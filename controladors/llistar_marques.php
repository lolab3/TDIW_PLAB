<?php
require_once __DIR__.'/../models/connectaBD.php';
require_once __DIR__.'/../models/consultaProds.php';

$connexio = connectaBD();
$peces = getAllProds($connexio);
foreach ($peces as $peça){
    if($peça['categoria_id'] == 1 && $peça['id'] == 1){
        $mostrarRoba = $peça;
    }
    if($peça['categoria_id'] == 3 && $peça['id'] == 9){
        $mostrarCalçat = $peça;
    }
    if($peça['categoria_id'] == 2 && $peça['id'] == 5){
        $mostrarComplements = $peça;
    }
}

include __DIR__.'/../vistes/llistar_marques.php';
?>