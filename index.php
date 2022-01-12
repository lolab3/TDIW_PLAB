<?php
    session_start();
    if(!isset($_SESSION['ID'])){
        $_SESSION['cistella'] = array();
        $_SESSION['total_productes'] = 0;
        $_SESSION['preu_total'] = 0;
    }
    error_reporting(E_ALL ^ E_NOTICE);

    $accio= $_GET['accio'];
    if(!isset($accio)) {
        header("Location: index.php?accio=home");
        exit();
    }
    else {
        switch ($accio) {
            case 'llistar-roba':
                include __DIR__ . '/recurs_llistar_roba.php';
                break;
            case 'llistar-calçat':
                include __DIR__ . '/recurs_llistar_calçat.php';
                break;
            case 'llistar-complements':
                include __DIR__ . '/recurs_llistar_complements.php';
                break;
            case 'llistar-iniciasessio':
                #session_start();
                include __DIR__ . '/recurs_iniciasessio.php';
                break;
            case 'llistar-compra':
                include __DIR__ .'/controladors/getCarrito.php';
                break;
            case 'cat-1':
                include __DIR__ . '/controladors/llistar_roba.php';
                break;
            case 'cat-3':
                include __DIR__ . '/controladors/llistar_calçat.php';
                break;
            case 'cat-2':
                include __DIR__ . '/controladors/llistar_complements.php';
                break;
            case 'producte':
                include __DIR__ . '/controladors/producte_indiv.php';
                break;
            case 'llistar-registrarte':
                include __DIR__ . '/recurs_registrarte.php';
                break;
            case 'tancar-sessio':
                include __DIR__ . '/recurs_tancar-sessio.php';
                break;
            case 'eliminarCistella':
                include __DIR__ . '/controladors/eliminarCarrito.php';
                break;
            case 'llistar-inici_sessio':
                include __DIR__ . '/recurs_inici_sessio.php';
                break;
            case 'llistar-comandes':
                include __DIR__ . '/controladors/llistarComandes.php';
                break;
            case 'confirmaCompra':
                include __DIR__ . '/controladors/confirmarCompra.php';
                break;
            case 'llistar-perfil':
                include __DIR__ . '/controladors/cont_edicio_perfil.php';
                break;
            case 'home':
                include __DIR__ . '/recurs_home.php';
                break;
            default:
                include __DIR__ . '/recurs_home.php';
                break;
        }
    }
?>




