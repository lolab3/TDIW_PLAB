<header>
    <div class="logo">
        <a href="/TDIW_PLAB/index.php?accio=home"> <h1 id="main_title">eROBA</h1> </a>
    </div>
</header>
<div class="navegador">
    <ul class="nav-menu">
        <?php foreach ($categories as $fila) { ?>
            <li>
                <a id="<?php echo $fila['tipus']; ?>" onclick="return carregarCat('<?php echo $fila['id']; ?>');">
                    <?php echo $fila['tipus'] ?>
                </a>
            </li>
        <?php } ?>
    </ul>

    <div class="dropdown">
        <button class="perfil">Perfil</button>
        <div class="dropdown-content">
            <a href="/TDIW_PLAB/index.php?accio=llistar-registrarte">Registra't</a>
            <a href="/TDIW_PLAB/index.php?accio=llistar-iniciasessio">Inicia sessió</a>
            <a href="/TDIW_PLAB/index.php?accio=tancar-sessio">Tancar sessió</a>
            <a onclick="return llistarComandes();">Les meves comandes</a>
            <a onclick="return carregarCarro();"> Cistella de la compra</a>
            <a onclick="return editarPerfil();">Editar perfil</a>
        </div>
    </div>
</div>




