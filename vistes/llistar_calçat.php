
    <h2> Calçat </h2>
    <div class="diferencia">
        <div class= "apartat-calçat" id="calçat">
            <?php foreach ($calçat as $producteCal): ?>
                <div class="a-calçat">
                    <img onclick="return carregarProd('<?php echo $producteCal["id"]; ?>');" src="imgs/producte<?php echo $producteCal["id"]; ?>.webp" />
                    <h2> <?php echo $producteCal["preu_actual"] ?>€ </h2>
                    <button class="boto-afegir"> Afegir </button>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

