<?php foreach ($roba as $producteRoba): ?>
    <div class="a-roba">
        <img src="imgs/producte1-1.jpg" />
        <h2> <?php echo $producteRoba['preu'] ?> </h2>
        <button class="boto-afegir"> Afegir </button>
    </div>
<?php endforeach; ?>
