
<?php

    require_once __DIR__.'/../models/connectaBD.php';
    require_once __DIR__.'/../models/consulta_categories.php';

    $connexio = connectaBD();
    $categories = getCategories($connexio); // Aquesta crida és al model

    include_once __DIR__.'/../vistes/llistar_menu.php';

?>
