
<?php
    $accio= $_GET['accio'];

        switch ($accio) {
            case 'llistar-roba':
                include __DIR__ . '/recurs_llistar_roba.php';
                break;
            case 'llistar-calçat':
                include __DIR__ . '/recurs_llistar_calçat.php';
                break;
            case 'llistar-complements':
                include __DIR__ . '/recurs_llistar_complements.php';
                break;
            case 'llistar-iniciasessio':
                include __DIR__ . '/recurs_iniciasessio.php';
                break;
            case 'llistar-registarte':
                include __DIR__ . '/recurs_registrarte.php';
                break;
            default:
                include __DIR__ . '/recurs_home.php';
                break;
        }
?>





<!--<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=yes"/>
	<title>eRoba</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>

<body>
    <div id="layout">


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
            </nav>

    </div>
        <section class="main">
            <div class="diferencia">
            <h2> Roba </h2>
            <div class= "apartat-roba" id="roba">
                <div class="a-roba">
                    <img src="imgs/producte1-1.jpg" />
                    <h2> 15€ </h2>
                    <button class="boto-afegir"> Afegir </button>
                </div>
                <div class="a-roba">
                    <img src="imgs/producte2.webp" />
                    <h2> 40€ </h2>
                    <button class="boto-afegir"> Afegir </button>
                </div>
                <div class="a-roba">
                    <img src="imgs/producte3.webp" />
                    <h2> 25€ </h2>
                    <button class="boto-afegir"> Afegir </button>
                </div>
                <div class="a-roba">
                    <img src="imgs/producte4.webp" />
                    <h2> 20€ </h2>
                    <button class="boto-afegir"> Afegir </button>
                </div>
            </div>


            <h2> Calçat </h2>
            <div class= "apartat-calçat" id="calçat">
                <div class="a-calçat">
                    <img src="imgs/productez1.webp" />
                    <h2> 40€ </h2>
                    <button class="boto-afegir"> Afegir </button>
                </div>
                <div class="a-calçat">
                    <img src="imgs/productez2.webp" />
                    <h2> 50€ </h2>
                    <button class="boto-afegir"> Afegir </button>
                </div>
                <div class="a-calçat">
                    <img src="imgs/productez3.webp" />
                    <h2> 30€ </h2>
                    <button class="boto-afegir"> Afegir </button>
                </div>
                <div class="a-calçat">
                    <img src="imgs/productez4.webp" />
                    <h2> 60€ </h2>
                    <button class="boto-afegir"> Afegir </button>
                </div>
            </div>

            <h2> Complements </h2>
            <div class= "apartat-complements" id="complements">
                <div class="a-complements">
                    <img src="imgs/productec1.webp" />
                    <h2> 10€ </h2>
                    <button class="boto-afegir"> Afegir </button>
                </div>
                <div class="a-complements">
                    <img src="imgs/productec2.webp" />
                    <h2> 40€ </h2>
                    <button class="boto-afegir"> Afegir </button>
                </div>
                <div class="a-complements">
                    <img src="imgs/productec3.webp" />
                    <h2> 20€ </h2>
                    <button class="boto-afegir"> Afegir </button>
                </div>
                <div class="a-complements">
                    <img src="imgs/productec4.webp" />
                    <h2> 25€ </h2>
                    <button class="boto-afegir"> Afegir </button>
                </div>
            </div>
            </div>

        </section>


            <footer style="grid-area: footer;">
                <h2 id="footer_title">eROBA</h2>
                <p>About us</p>
            </footer>

        
</body>
</html>
-->