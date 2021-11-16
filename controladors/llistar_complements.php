<?php

require_once __DIR__.'/../models/connectaBD.php';
require_once __DIR__.'/../models/consultaProds.php';

$connexio = connectaBD();
$complements = getProds($connexio, 2); // Aquesta crida és al model

include __DIR__.'/../vistes/llistar_complements.php';

?>

