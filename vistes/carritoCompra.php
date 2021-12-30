<?php
    if(isset($_REQUEST["enviarProd"])){
        $producte_id = $_REQUEST["productes_id"];
        $productes_nom = $_REQUEST["productes_nom"];
        $preu_historic = $_REQUEST["preu_historic"];
        $unitats_demanades = $_REQUEST["unitats_demanades"];

        $_SESSION['user_id'][$producte_id]['productes_nom'] = $productes_nom;
        $_SESSION['user_id'][$producte_id]['preu_historic'] = $preu_historic;
        $_SESSION['user_id'][$producte_id]['unitats_demanades'] = $unitats_demanades;
    }
    ?>