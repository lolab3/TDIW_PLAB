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
    <img src="/TDIW_PLAB/imgs/producte<?php echo $prod['id']; ?>.webp">
    <h2><?php echo "hola"; ?>€</h2>
    <form method="post" action="controladors/carro-compra.php">
        <input type="hidden" name="nom" value=$prod['nom']>
        <input type="hidden" name="preu_actual" value=$prod['preu_actual']>
        <h1><?php echo $prod['nom']; ?></h1>
        <p><?php echo $prod['descripcio']; ?></p>
        <h2><?php echo $prod['preu_actual']; ?>€</h2>
        <input type="number" name="quantitat">
        <input type="submit" value="Afegir" name="enviar" >
    </form>
</div>
</html>
