<?php
function connectaBD(){
    $servidor = "localhost";
    $usuari = "root";
    $clau = "";
    try{
        $connexio = new PDO("mysql:host=$servidor;dbname=tdiw;charset=UTF8", $usuari, $clau);
        $connexio->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    return($connexio);
}
?>