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
    <form method="post" action="controladors/inserirProd.php">
        <input type="hidden" name="productes_id" value="<?php echo $prod['id']; ?>">
        <input type="hidden" name="preu_historic" value="<?php echo $prod['preu_actual']; ?>">
        <p>Quantitat: <input type="number" name="unitats_demanades" value="1"></p>
        <p><button class="boto-mesmenys" name="Botomes">+</button></p>
        <p><button class="boto-mesmenys" name="Botomenys">-</button></p>
        <p><button class="boto-afegir-indiv" type="submit" name="enviarProd">Afegir</button></p>
    </form>
</div>
</html>