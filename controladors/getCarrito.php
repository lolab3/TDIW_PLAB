<?php
    require_once __DIR__.'/../models/connectaBD.php';
    require_once __DIR__.'/../models/consultaProds.php';

    $llista_ids = array_values(array_unique($_SESSION['cistella']));
    $quantitat_prod_indiv = array_count_values($_SESSION['cistella']);
    $quantitat_prods = $_SESSION['total_productes'];
    $preu_total = $_SESSION['preu_total'];

    $connexio = connectaBD();
    $resultat = getProd($connexio, $llista_ids);

    include __DIR__ . '/../vistes/llistar_carro.php';
?>
