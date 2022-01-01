<div class="main">
    <div class="diferencia">
        <h2> Categories </h2>
        <div class= "apartat-roba" id="roba">
            <div class="a-cat">
                <img onclick="return carregarCat('<?php echo $mostrarRoba['categoria_id'] ?>')" src="/TDIW_PLAB/<?php echo $mostrarRoba['img'] ?>" />
                <h2>ROBA</h2>
            </div>
            <div class="a-cat">
                <img onclick="return carregarCat('<?php echo $mostrarCalçat['categoria_id'] ?>')" src="/TDIW_PLAB/<?php echo $mostrarCalçat['img'] ?>" />
                <h2>CALÇAT</h2>
            </div>
            <div class="a-cat">
                <img onclick="return carregarCat('<?php echo $mostrarComplements['categoria_id'] ?>')" src="/TDIW_PLAB/<?php echo $mostrarComplements['img'] ?>" />
                <h2>COMPLEMENTS</h2>
            </div>
        </div>
    </div>

</div>