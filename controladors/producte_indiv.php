<?php

require_once __DIR__.'/../models/connectaBD.php';
require_once __DIR__.'/../models/consultaProds.php';
require_once __DIR__.'/../models/consulta_categories.php';

$connexio = connectaBD();
$categories = getCategories($connexio);
foreach ($categories as $categoria){
    $cat = $categoria['categoria_id'];
    $producte = getProds($connexio, $cat);
}

include_once __DIR__ .'/../vistes/llistar_menu.php';
include_once __DIR__.'/../vistes/llistar_prod.php';

?>
