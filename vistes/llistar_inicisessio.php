<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=yes"/>
    <link rel="stylesheet" type="text/css" href="css/inicia_sessio.css">
</head>
<body>
<div class="logo">
    <a href="/TDIW_PLAB/index.php?accio=home"><h1 id="main_title">eROBA</h1></a>
</div>
<section class="registre">
    <div class="imatge">
        <img src="imgs/register-img.jpg">
    </div>
    <form method="post" action="">
        <h1>Accedeix al teu compte des d'aquí</h1>
        <div class="formulari">
            <div class="form-item" style="grid-area: correu;">
                <p>Correu electronic: </p> <input type="email" name="email" placeholder="email">
            </div>
            <div class="form-item" style="grid-area: password;">
                <p>Password: </p> <input type="Password" name="contra" placeholder="Password">
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
