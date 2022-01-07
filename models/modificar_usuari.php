<?php

function modUsuari($connexio){
    try{
        $usuari = "UPDATE INTO usuari()";
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
