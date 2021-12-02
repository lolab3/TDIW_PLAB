<body>
<div class="logo">
    <a href="/TDIW_PLAB/index.php?accio=home"><h1 id="main_title">eROBA</h1></a>
</div>
<section class="registre">
    <div class="imatge">
        <img src="imgs/register-img.jpg">
    </div>
    <form method="post" action="controladors/inserirUsuari.php" target="_blank">
        <h1>Crea el teu compte ara</h1>
        <div class="formulari">
            <div class="form-item" style="grid-area: nom;">
                <p>Nom: </p> <input type="text" name="nom" placeholder="Nom complet">
            </div>
            <div class="form-item" style="grid-area: correu;">
                <p>Correu electronic: </p> <input type="email" name="correu" placeholder="email">
            </div>
            <div class="form-item" style="grid-area: password;">
                <p>Password: </p> <input type="Password" name="contrasenya" placeholder="Password">
            </div>
            <div class="form-item" style="grid-area: adreça;">
                <p>Adreça: </p> <input type="text" name="adreca" required maxlength="30" placeholder="Adreça">
            </div>
            <div class="form-item" style="grid-area: poblacio">
                <p>Població:</p> <input type="text" name="poblacio" required maxlength="30" placeholder="Població">
            </div>
            <div class="form-item" style="grid-area: codi_postal;">
                <p>Codi postal:</p> <input type="number" name="codi_postal" size="5" maxlength="5" placeholder="Codi Postal">
            </div>
            <div class="form-item" style="grid-area: submit;">
                <p>Registrar-me</p><input type="submit" name="enviar" id="submit-btn">
            </div>
            <div class="inicia" style="grid-area: inicia;">
                <a href="/TDIW_PLAB/index.php?accio=llistar-iniciasessio"><p>Ja tens un compte? Inicia sessió aqui</p></a>
            </div>
        </div>
    </form>
</section>
</body>