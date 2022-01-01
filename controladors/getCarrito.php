<?php
    require_once __DIR__.'/../models/connectaBD.php';
    require_once __DIR__.'/../models/consultaProds.php';

    $llista_ids = array_values(array_unique($_SESSION['cistella']));
    $quantitat_prods = $_SESSION['total_productes'];
    $preu_total = $_SESSION['preu_total'];

    $connexio = connectaBD();
    $resultat = getProd($connexio, $llista_ids);

    if($resultat[0]) {
        #echo "Correcte";
        #include __DIR__ .'/iniciar_sessio.php';
    } else{
        #echo $errorLogin;
        #$errorLogin = $resultat[1];
        #include __DIR__ . '/../vistes/comprovaUsuariinc.php';
    }

    include __DIR__ . '/../vistes/llistar_carro.php';
?>
