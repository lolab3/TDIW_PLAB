<?php

require_once __DIR__.'/../models/connectaBD.php';
require_once __DIR__.'/../models/consultaProds.php';

$roba = getRoba(); // Aquesta crida és al model

include __DIR__.'/../vistes/llistar_roba.php';