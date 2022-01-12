<?php
    session_start();
    error_reporting(E_ALL ^ E_NOTICE);
    include_once __DIR__.'/../models/connectaBD.php';
    include_once __DIR__.'/../models/consultaUsuari.php';

    if(isset($_SESSION['ID'])) {
        $connexio = connectaBD();
        $usuaris = getUsuaris($connexio);
        foreach ($usuaris as $i) {
            if (isset($_SESSION['ID'])) {
                if ($_SESSION['ID'] == $i['id']) {
                    $usuari = $i;
                }
            }
        }
        include __DIR__ . '/../vistes/edicio_perfil.php';
    } else{
        include __DIR__ . '/../vistes/noEditarPerfil.php';
    }

?>