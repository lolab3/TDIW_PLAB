<header>
    <div class="logo">
        <a href="/TDIW_PLAB/index.php?accio=home"> <h1 id="main_title">eROBA</h1> </a>
    </div>
</header>
<div class="navegador">
    <ul class="nav-menu">
        <?php foreach ($categories as $fila) { ?>
            <li>
                <a id="<?php echo $fila['tipus']; ?>">
                    <?php echo $fila['tipus'] ?>
                </a>
            </li>
        <?php } ?>
    </ul>
    <div class="register">
        <a href="/TDIW_PLAB/index.php?accio=llistar-registrarte">Registra't</a>
        <a href="/TDIW_PLAB/index.php?accio=llistar-iniciasessio">Inicia sessió</a>
    </div>
</div>


<!--
<header>
    <div class="logo">
        <h1 id="main_title">eROBA</h1>
    </div>
</header>

<nav class="navegador">
    <ul class="nav-menu">
        <li>
            <a href="#roba">Roba</a>
        </li>
        <li>
            <a href="#calçat">Calçat</a>
        </li>
        <li>
            <a href="#complements">Complements</a>
        </li>
    </ul>
    <div class="register">
        <a href="registre.html">Registra't</a>
        <a href="inicia_sessio.html">Inicia sessió</a>
    </div>
</nav>-->