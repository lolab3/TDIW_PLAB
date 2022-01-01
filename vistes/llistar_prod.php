
<div class="producte_indiv">
    <img src="/TDIW_PLAB/<?php echo $prod['img']; ?>"></img>
    <h1><?php echo $prod['nom']; ?></h1>
    <p><?php echo $prod['descripcio']; ?></p>
    <h2><?php echo $prod['preu_actual']; ?>€</h2>
    <form method="post" action="controladors/inserirProd.php">
        <input type="hidden" name="productes_id" value="<?php echo $prod['id']; ?>">
        <input type="hidden" name="preu_historic" value="<?php echo $prod['preu_actual']; ?>">
        <input type="number" name="unitats_demanades" value="1">
        <button type="button" class="boto-mesmenys">+</button>
        <button type="button" class="boto-mesmenys">-</button>
        <p><button class="boto-afegir-indiv" type="submit" name="enviarProd">Afegir</button></p>
    </form>
</div>
</html>