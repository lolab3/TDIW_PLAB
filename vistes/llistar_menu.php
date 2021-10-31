#PHP,HTML,JS,CSS
<ul>
    <?php foreach ($categories as $categoria): ?>
        <li>
            <a> <?php echo $categoria["nom"] ?></a>
        </li>
    <?php endforeach; ?>
</ul>

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