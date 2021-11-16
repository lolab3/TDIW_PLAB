<head>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<header>
    <div class="logo">
        <h1 id="main_title">eROBA</h1>
    </div>
</header>
<div class="navegador">
    <ul class="nav-menu">
        <?php foreach ($categories as $fila) { ?>
            <li> <a href="/recurs_llistar_<?php $fila['tipus'] ?>.php"><?php $fila['tipus'] ?></a> </li>
        <?php } ?>
    </ul>
    <div class="register">
        <a href="recurs_registrarte.php">Registra't</a>
        <a href="recurs_iniciasessio.php">Inicia sessió</a>
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