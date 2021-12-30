<?php
    session_start();
    error_reporting(E_ALL ^ E_NOTICE);
    if(isset($_SESSION['user_id'])){
        #echo "sesion";
        include __DIR__ . '/connectat_inici_sessio.php';
    } else if(isset($_POST['correu']) && isset($_POST['contrasenya'])){
        #echo "Comprova login";
        include __DIR__ . '/comprovarUsuari.php';
    } else{
        #echo "Login";
        include __DIR__.'/../vistes/llistar_inicisessio.php';
    }
?>

<!--    if(isset($_SESSION['user_id'])){
        #echo "sesion";
        include __DIR__ . '/connectat_inici_sessio.php';
    } else if(isset($_POST['correu']) && isset($_POST['contrasenya'])){
        #echo "Comprova login";
        include __DIR__ . '/comprovarUsuari.php';
    } else{
        #echo "Login";
        include __DIR__.'/../vistes/llistar_inicisessio.php';
    }-->
