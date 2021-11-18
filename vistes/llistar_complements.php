
    <h2> Complements </h2>
    <div class="diferencia">
        <div class= "apartat-complements" id="complements">
            <?php foreach ($complements as $producteComp): ?>
                <div class="a-complements">
                    <a href="/../controladors/producte_indiv.php"><img src="imgs/producte<?php echo $producteComp["id"]; ?>.webp" /></a>
                    <h2> <?php echo $producteComp["preu_actual"] ?>€ </h2>
                    <button class="boto-afegir"> Afegir </button>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


