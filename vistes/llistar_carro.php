
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



<!--<div class="carro_total">
    <h2>Carro compra</h2>
    <table class="carro_table">
        <tr class="header_table">
            <th class="data">Producte</th>
            <th class="data">Nom</th>
            <th class="data">Preu</th>
            <th class="data">Quantitat</th>
        </tr>
        <tr class="fila_table">
            <td class="data" >Jaqueta</td>
            <td class="data" >Jaqueta</td>
            <td class="data" >$350</td>
            <td class="data" ><button>-1</button><div class="box_quantitat">2</div><button>+1</button></td>
        </tr>
        <tr class="fila_table">
            <td class="data" ><img src="/TDIW_PLAB/imgs/producte2.webp"></td>
            <td class="data" >Pantalons</td>
            <td class="data" >$220</td>
            <td class="data" ><button>-1</button><button>+1</button></td>
        </tr>

    </table>
</div>-->