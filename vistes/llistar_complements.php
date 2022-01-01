
    <h2> Complements </h2>
    <div class="diferencia">
        <div class= "apartat-complements" id="complements">
            <?php foreach ($complements as $producteComp): ?>
                <div class="a-complements">
                    <img onclick="return carregarProd('<?php echo $producteComp["id"]; ?>');" src="imgs/producte<?php echo $producteComp["id"]; ?>.webp" />
                    <h2> <?php echo $producteComp["preu_actual"] ?>€ </h2>
                    <form method="post" action="controladors/inserirProd.php">
                        <input type="hidden" name="productes_id" value="<?php echo $producteComp['id']; ?>">
                        <input type="hidden" name="preu_historic" value="<?php echo $producteComp['preu_actual']; ?>">
                        <input type="hidden" name="unitats_demanades" value="1"></p>
                        <button class="boto-afegir" name="enviarProd">Afegir</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


