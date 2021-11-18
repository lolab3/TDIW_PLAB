<body>
<div class="logo">
    <a href="/TDIW_PLAB/index.php?accio=home""><h1 id="main_title">eROBA</h1></a>
</div>
<section class="registre">
    <div class="imatge">
        <img src="imgs/register-img.jpg">
    </div>
    <form method="post" action="controladors/comprovarUsuari.php" target="_blank">
        <h1>Accedeix al teu compte des d'aquí</h1>
        <div class="formulari">
            <div class="form-item" style="grid-area: correu;">
                <p>Correu electronic: </p> <input type="email" name="correu" placeholder="email">
            </div>
            <div class="form-item" style="grid-area: password;">
                <p>Password: </p> <input type="Password" name="contrasenya" placeholder="Password">
            </div>
            <div class="form-item" style="grid-area: submit;">
                <p>Inicia sessió</p><input type="submit" name="enviar" id="submit-btn">
            </div>
            <div class="inicia-sessio" style="grid-area: register;">
                <a href="/TDIW_PLAB/index.php?accio=llistar-registrarte"><p>No tens cap compte creat? Registra't aquí</p></a>
            </div>
        </div>
    </form>
</section>
