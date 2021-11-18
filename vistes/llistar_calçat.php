
    <h2> Calçat </h2>
    <div class="diferencia">
        <div class= "apartat-calçat" id="calçat">
            <?php foreach ($calçat as $producteCal): ?>
                <div class="a-calçat">
                    <a href="/../controladors/producte_indiv.php"><img src="imgs/producte<?php echo $producteCal["id"]; ?>.webp" /></a>
                    <h2> <?php echo $producteCal["preu_actual"] ?>€ </h2>
                    <button class="boto-afegir"> Afegir </button>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

