#PHP
<?php

require_once __DIR__.'/../models/connectaBD.php';
require_once __DIR__.'/../models/consulta_categories.php';

$categories = getCategories(); // Aquesta crida és al model

include __DIR__.'/../vistes/llistar_menu.php';
