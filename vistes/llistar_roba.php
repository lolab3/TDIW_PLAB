
    <h2> Roba </h2>
    <div class="diferencia">
        <div class= "apartat-roba" id="roba">
            <?php foreach ($roba as $producteRoba): ?>
                <div class="a-roba">
                    <img onclick="return carregarProd('<?php echo $producteRoba["id"]; ?>');" src=<?php echo $producteRoba["img"]; ?> />
                    <h2> <?php echo $producteRoba["preu_actual"] ?>€ </h2>
                    <form method="post" action="controladors/inserirProd.php">
                        <input type="hidden" name="productes_id" value="<?php echo $producteRoba['id']; ?>">
                        <input type="hidden" name="preu_historic" value="<?php echo $producteRoba['preu_actual']; ?>">
                        <input type="hidden" name="unitats_demanades" value="1"></p>
                        <button class="boto-afegir" name="enviarProd">Afegir</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </div>







<!--<section class="main">
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
-->