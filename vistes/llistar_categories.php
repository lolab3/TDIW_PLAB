#solament les 4 primeres imatges de cadascún

<?php foreach ($roba as $producteRoba): ?>
    <div class="a-roba">
        <img src="imgs/producte1-1.jpg" />
        <h2> <?php echo $producteRoba['preu'] ?> </h2>
        <button class="boto-afegir"> Afegir </button>
    </div>
<?php endforeach; ?>


<?php foreach ($calçat as $producteCalçat): ?>
    <div class="a-calçat">
        <img src="imgs/producte1-1.jpg" />
        <h2> <?php echo $producteCalçat['preu'] ?> </h2>
        <button class="boto-afegir"> Afegir </button>
    </div>
<?php endforeach; ?>

<?php foreach ($complements as $producteComplement): ?>
    <div class="a-complements">
        <img src="imgs/producte1-1.jpg" />
        <h2> <?php echo $producteComplement['preu'] ?> </h2>
        <button class="boto-afegir"> Afegir </button>
    </div>
<?php endforeach; ?>



