<div class= "apartat-calçat" id="calçat">
    <?php foreach ($complements as $producteComplement): ?>
        <div class="a-complements">
            <img src="imgs/productec<?php echo $producteComplement["id"]; ?>.jpg" />
            <h2> <?php echo $producteComplement["preu"] ?> </h2>
            <button class="boto-afegir"> Afegir </button>
        </div>
    <?php endforeach; ?>
</div>
