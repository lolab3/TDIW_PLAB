
<?php

    require_once __DIR__.'/../models/connectaBD.php';
    require_once __DIR__.'/../models/consulta_categories.php';

    $connexio = connectaBD();
    $categories = getCategories($connexio); // Aquesta crida és al model

    foreach($categories as $num=>$fila){
        $categories[$num]['tipus'] = htmlentities($fila['tipus'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    }

    include_once __DIR__.'/../vistes/llistar_menu.php';

?>