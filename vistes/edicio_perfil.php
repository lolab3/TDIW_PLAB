<html>
    <div class="layout-perfil">
        <div class="perfil-options">
            <div class="nom" style="grid-area: nom;">
                <p>Nom: </p> <input type="text" name="nom" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" placeholder="Nom complet">
            </div>
            <div class="correu" style="grid-area: correu;">
                <p>Correu electronic: </p> <input type="email" name="correu" placeholder="email">
            </div>
            <div class="contrassenya" style="grid-area: contra;">
                <p>Nova contrassenya: </p> <input type="Password" name="contrasenya" placeholder="Password">
            </div>
            <div class="confirmar-contrassenya" style="grid-area: conf-contra;">
                <p>Confirma la nova contrassenya: </p> <input type="Password" name="contrasenya" placeholder="Password">
            </div>
            <div class="adreça" style="grid-area: adreça;">
                <p>Adreça: </p> <input type="text" name="adreca" required maxlength="30" placeholder="Adreça">
            </div>
            <div class="poblacio" style="grid-area: poblacio;">
                <p>Població:</p> <input type="text" name="poblacio" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" required maxlength="30" placeholder="Població">
            </div>
            <div class="codi-postal" style="grid-area: codi-postal;">
                <p>Codi postal:</p> <input type="number" name="codi_postal" size="5" min="1" max="99999" placeholder="Codi Postal">
            </div>
            <br>
            <div class="actualitzar-perfil">
                <input type="submit" name="Actualitza les dades" id="submit-btn">
            </div>
        </div>
    </div>
</html>
