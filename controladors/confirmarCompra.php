<?php
    session_start();
    error_reporting(E_ALL ^ E_NOTICE);

    if(isset($_SESSION['ID']) and ($_SESSION['total_productes'] > "0")) {
        require_once __DIR__ . '/../models/connectaBD.php';
        require_once __DIR__ . '/../models/inserirProd.php';
        require_once __DIR__ . '/../models/consultaProds.php';

        $connexio = connectaBD();

        $resultat = inserirProd($connexio);
        $llista_ids = array_values(array_unique($_SESSION['cistella']));
        $quantitat_prod_indiv = array_count_values($_SESSION['cistella']);
        $resultats = getProd($connexio, $llista_ids);
        $id_usuari = $_SESSION['ID'];
        $id_comanda = getComandaID($connexio, $id_usuari);
        $resultat2 = inserirProdComandes($connexio, $llista_ids, $resultats, $quantitat_prod_indiv, $id_comanda);

        if (isset($_SESSION['ID'])) {
            $_SESSION['cistella'] = array();
            $_SESSION['total_productes'] = 0;
            $_SESSION['preu_total'] = 0;
        }

        include __DIR__ . '/../vistes/confirmaCompra.php';
    }else{
        include __DIR__ . '/../vistes/noConfirmaCompra.php';
    }

?>



