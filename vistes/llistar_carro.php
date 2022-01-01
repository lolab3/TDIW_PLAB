
<div class="carro_total">
    <h2>Carro compra</h2>
    <table class="carro_table">
        <tr class="header_table">
            <th class="data">Imatge</th>
            <th class="data">Nom</th>
            <th class="data">Preu unitari</th>
            <th class="data">Quantitat</th>
        </tr>
        <?php if(isset($_SESSION['ID'])): ?>
            <?php print_r($_SESSION); ?>
            <?php foreach ($_SESSION as $a => $i): ?>
                <tr class="fila_table">
                <?php foreach($i as $b => $o): ?>
                    <td class="data"><?php echo $o; ?></td>
                <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
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