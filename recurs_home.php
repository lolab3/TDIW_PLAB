<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=yes"/>
	<title>eRoba</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/funcions.js"></script>
</head>

<body>
    <div id="layout">

        <?php include __DIR__ .'/controladors/menu_superior.php';?>

        <div class="main">
            <div class="diferencia">
                <h2> Marques </h2>
                <div class= "apartat-roba" id="roba">
                    <div class="a-roba">
                        <img src="imgs/logo1.png" />
                    </div>
                    <div class="a-roba">
                        <img src="imgs/logo2.png" />
                    </div>
                    <div class="a-roba">
                        <img src="imgs/logo3.png" />
                    </div>
                    <div class="a-roba">
                        <img src="imgs/logo4.png" />
                    </div>
                </div>
        </div>

    </div>
</body>
</html>

<!--
<section class="main">
            <div class="diferencia">
            <h2> Roba </h2>
            <div class= "apartat-roba" id="roba">
                <div class="a-roba">
                    <img src="imgs/producte1.webp" />
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
                    <img src="imgs/productez9.webp" />
                    <h2> 40€ </h2>
                    <button class="boto-afegir"> Afegir </button>
                </div>
                <div class="a-calçat">
                    <img src="imgs/productez10.webp" />
                    <h2> 50€ </h2>
                    <button class="boto-afegir"> Afegir </button>
                </div>
                <div class="a-calçat">
                    <img src="imgs/productez11.webp" />
                    <h2> 30€ </h2>
                    <button class="boto-afegir"> Afegir </button>
                </div>
                <div class="a-calçat">
                    <img src="imgs/productez12.webp" />
                    <h2> 60€ </h2>
                    <button class="boto-afegir"> Afegir </button>
                </div>
            </div>

            <h2> Complements </h2>
            <div class= "apartat-complements" id="complements">
                <div class="a-complements">
                    <img src="imgs/productec5.webp" />
                    <h2> 10€ </h2>
                    <button class="boto-afegir"> Afegir </button>
                </div>
                <div class="a-complements">
                    <img src="imgs/productec6.webp" />
                    <h2> 40€ </h2>
                    <button class="boto-afegir"> Afegir </button>
                </div>
                <div class="a-complements">
                    <img src="imgs/productec7.webp" />
                    <h2> 20€ </h2>
                    <button class="boto-afegir"> Afegir </button>
                </div>
                <div class="a-complements">
                    <img src="imgs/productec8.webp" />
                    <h2> 25€ </h2>
                    <button class="boto-afegir"> Afegir </button>
                </div>
            </div>
            </div>

        </section>