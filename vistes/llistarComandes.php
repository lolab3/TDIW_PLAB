<div class="main">
<h1>Les meves comandes</h1>
    <?php echo nl2br("\n\n\n");?>
    <?php $n=0; ?>
    <?php $a=1; ?>
    <?php foreach ($prods as $prod):?>
        <h2><?php echo "Comanda nº {$prod['id']}, feta el dia {$prod['data']}:";?></h2>
        <?php foreach ($prodsComanda[$n] as $prodUnic):?>
            <h3><?php echo "Article nº $a:";?></h3>
            <h4><?php echo "Nom del producte: {$prodUnic['nom_producte']}";?></h4>
            <h4><?php echo "Preu: {$prodUnic['preu_historic']}€";?></h4>
            <h4><?php echo nl2br("Unitats: {$prodUnic['unitat_productes']}\n");?></h4>
            <?php $a = $a+1; ?>
            <?php echo nl2br("\n");?>
        <?php endforeach; ?>
        <?php $a = 1; ?>
        <?php $n = $n+1; ?>
        <h3><?php echo "Total de productes: {$prod['total_productes']}";?></h3>
        <h3><?php echo "Cost total: {$prod['preu_total']}€";?></h3>
        <?php echo nl2br("\n\n\n");?>
    <?php endforeach; ?>
</div>

<!--