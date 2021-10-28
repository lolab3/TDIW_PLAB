<?php foreach ($complements as $producteComplement): ?>
    <div class="a-complements">
        <img src="imgs/producte1-1.jpg" />
        <h2> <?php echo $producteComplement['preu'] ?> </h2>
        <button class="boto-afegir"> Afegir </button>
    </div>
<?php endforeach; ?>
