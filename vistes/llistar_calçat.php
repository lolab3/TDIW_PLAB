<div class= "apartat-calçat" id="calçat">
    <?php foreach ($calçat as $producteCalçat): ?>
        <div class="a-calçat">
            <img src="imgs/productez<?php echo $producteCalçat["id"]; ?>.jpg" />
            <h2> <?php echo $producteCalçat["preu"] ?> </h2>
            <button class="boto-afegir"> Afegir </button>
        </div>
    <?php endforeach; ?>
</div>

