<br>
<h2> Complements </h2>
<div class="diferencia">
    <div class= "apartat-complements" id="complements">
        <?php foreach ($complements as $producteComp): ?>
            <div class="a-complements">
                <img src="imgs/productec<?php echo $producteComp["id"]; ?>.webp" />
                <h2> <?php echo $producteComp["preu_actual"] ?> </h2>
                <button class="boto-afegir"> Afegir </button>
            </div>
        <?php endforeach; ?>
    </div>
</div>
