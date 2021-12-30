<?php
    require_once __DIR__.'/../models/connectaBD.php';
    require_once __DIR__.'/../models/connectat_inicia_usuari.php';

    $connexio = connectaBD();
    $user = sessioUser($connexio);

    if(!empty($user)) {
        #<br> Benvingut. <?= $user['correu'];
        include __DIR__ . '/../vistes/comprovaUsuari.php';
    } else{
        header("Location: index.php?accio=home");
    }
?>