<?php
    session_start();
    error_reporting(E_ALL ^ E_NOTICE);
    if(isset($_REQUEST["enviarProd"])) {
        $productes_id = $_REQUEST["productes_id"];
        $preu_historic = $_REQUEST["preu_historic"];
        $unitats_demanades = $_REQUEST["unitats_demanades"];

        if(isset($_SESSION["ID"])) {
            for ($i = 0; $i < $unitats_demanades; $i++) {
                array_push($_SESSION['cistella'], $productes_id);
            }

            $_SESSION['total_productes'] = $_SESSION['total_productes'] + $unitats_demanades;
            $_SESSION['preu_total'] = $_SESSION['preu_total'] + ($preu_historic * $unitats_demanades);

            echo '<script>alert("Producte inserit correctament a la cistella");</script>';
        }
    }
?>
<meta http-equiv="refresh" content="0;url=/../TDIW_PLAB/index.php?accio=home">




<!    $carrito = array();
$carrito = !empty($_SESSION['user_id'])?$_SESSION['user_id']:NULL;
print_r($carrito);

$_SESSION['ID'][$productes_id]['productes_nom'] = $productes_nom;
$_SESSION['ID'][$productes_id]['preu_historic'] = $preu_historic;
$_SESSION['ID'][$productes_id]['unitats_demanades'] = $unitats_demanades;!>
