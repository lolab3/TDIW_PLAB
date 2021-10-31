<?php

    require_once __DIR__.'/../models/connectaBD.php';
    require_once __DIR__.'/../models/consulta_categories.php';
    require_once __DIR__.'/../models/consultaProds.php';

    $connexio = connectaBD();
    $categories = getCategories($connexio);
    $complements = getComplements($connexio, 3); // Aquesta crida és al model

    include __DIR__.'/../vistes/llistar_complements.php';

?>
