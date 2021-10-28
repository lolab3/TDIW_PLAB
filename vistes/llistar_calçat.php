
<?php foreach ($calçat as $producteCalçat): ?>
<div class="a-calçat">
    <img src="imgs/producte1-1.jpg" />
    <h2> <?php echo $producteCalçat['preu'] ?> </h2>
    <button class="boto-afegir"> Afegir </button>
</div>
<?php endforeach; ?>