
<div class="main">
<div class="carro_total">
    <h2>Cistella de la compra</h2>
    <table class="carro_table">
        <tr class="header_table">
            <th class="data">Nom</th>
            <th class="data">Preu unitari (EUR)</th>
            <th class="data">Quantitat</th>
        </tr>
        <?php $n=0; ?>
        <?php if(isset($_SESSION['ID'])): ?>
            <?php foreach ($resultat as $i): ?>
                <tr class="fila_table">
                    <?php foreach($i as $b): ?>
                        <td class="data"><?php echo $b; ?></td>
                    <?php endforeach; ?>
                    <td class="data"><?php echo $quantitat_prod_indiv[$llista_ids[$n]]; ?></td>
                </tr>
                <?php $n++; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>

    <a href="/TDIW_PLAB/index.php?accio=eliminarCistella" class="link" ><p>Buidar cistella</p></a>

    <div class="boto-confirma-compra">
        <p><button onclick="return confirmaCompra()" type="submit" >Confirmar compra</button></p>
    </div>
</div>
</div>


