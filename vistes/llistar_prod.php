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
    <form method="post" action="controladors/inserirProd.php">
        <input type="hidden" name="productes_id" value="<?php echo $prod['id']; ?>">
        <input type="hidden" name="productes_nom" value="<?php echo $prod['nom']; ?>">
        <input type="hidden" name="preu_historic" value="<?php echo $prod['preu_actual']; ?>">
        <h1><?php echo $prod['nom']; ?></h1>
        <p><?php echo $prod['descripcio']; ?></p>
        <h2><?php echo $prod['preu_actual']; ?>€</h2>
        <input type="number" name="unitats_demanades" value="1">
        <input type="submit" value="Afegir" name="enviarProd" >
    </form>
</div>
</html>