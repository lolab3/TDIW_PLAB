<?php

require_once __DIR__.'/../models/connectaBD.php';
require_once __DIR__.'/../models/consultaProds.php';

$complements = getComplements(); // Aquesta crida és al model

include __DIR__.'/../vistes/llistar_complements.php';