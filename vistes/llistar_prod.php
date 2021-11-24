<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=yes"/>
    <title>eRoba</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/funcions.js"></script>
</head>
<div class="producte_indiv">
    <img src="/TDIW_PLAB/imgs/producte<?php echo $prod['id']; ?>.webp"></img>
    <h1><?php echo $prod['nom']; ?></h1>
    <p><?php echo $prod['descripcio']; ?></p>
    <h2><?php echo $prod['preu_actual']; ?>€</h2>
    <button class="boto-afegir-indiv"> Afegir </button>
</div>
</html>
