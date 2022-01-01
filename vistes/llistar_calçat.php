
    <h2> Calçat </h2>
    <div class="diferencia">
        <div class= "apartat-calçat" id="calçat">
            <?php foreach ($calçat as $producteCal): ?>
                <div class="a-calçat">
                    <img onclick="return carregarProd('<?php echo $producteCal["id"]; ?>');" src=<?php echo $producteCal["img"]; ?> />
                    <h2> <?php echo $producteCal["preu_actual"] ?>€ </h2>
                    <form method="post" action="controladors/inserirProd.php">
                        <input type="hidden" name="productes_id" value="<?php echo $producteCal['id']; ?>">
                        <input type="hidden" name="preu_historic" value="<?php echo $producteCal['preu_actual']; ?>">
                        <input type="hidden" name="unitats_demanades" value="1"></p>
                        <button class="boto-afegir" name="enviarProd">Afegir</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

