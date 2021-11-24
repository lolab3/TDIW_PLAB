<?php

require_once __DIR__.'/../models/connectaBD.php';
require_once __DIR__.'/../models/consultaProds.php';
require_once __DIR__.'/../models/consulta_categories.php';

$connexio = connectaBD();
$productes = getAllProds($connexio);

foreach ($productes as $producte){
    if($producte['id'] == $_POST['myVar']){
        $prod = $producte;
        include_once __DIR__.'/../vistes/llistar_prod.php';
    }
}



?>
