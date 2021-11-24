<div class="main">
    <div class="diferencia">
        <h2> Marques </h2>
        <div class= "apartat-roba" id="roba">
            <div class="a-cat">
                <img onclick="return carregarCat('<?php echo $mostrarRoba['categoria_id'] ?>')" src="/TDIW_PLAB/imgs/producte<?php echo $mostrarRoba['id'] ?>.webp" />
                <h2>ROBA</h2>
            </div>
            <div class="a-cat">
                <img onclick="return carregarCat('<?php echo $mostrarCalçat['categoria_id'] ?>')" src="/TDIW_PLAB/imgs/producte<?php echo $mostrarCalçat['id'] ?>.webp" />
                <h2>CALÇAT</h2>
            </div>
            <div class="a-cat">
                <img onclick="return carregarCat('<?php echo $mostrarComplements['categoria_id'] ?>')" src="/TDIW_PLAB/imgs/producte<?php echo $mostrarComplements['id'] ?>.webp" />
                <h2>COMPLEMENTS</h2>
            </div>
        </div>
    </div>

</div>