<html>
    <div class="layout-perfil">
        <h1>Editar perfil</h1>
        <div class="perfil-options">

            <form method="post" action="controladors/modificar_usuari.php">
            <div class="nom" style="grid-area: nom;">
                <p>Nom: </p> <input type="text" name="nom" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" placeholder="Nom complet" value="<?php echo $usuari['nom']; ?>">
            </div>
            <div class="correu" style="grid-area: correu;">
                <p>Correu electronic: </p> <input type="email" name="correu" placeholder="email" value="<?php echo $usuari['correu']; ?>">
            </div>
            <div class="contrassenya" style="grid-area: contra;">
                <p>Nova contrassenya: </p> <input type="Password" name="contrasenya" placeholder="Password">
            </div>
            <div class="adreça" style="grid-area: adreça;">
                <p>Adreça: </p> <input type="text" name="adreca" required maxlength="30" placeholder="Adreça" value="<?php echo $usuari['adreca']; ?>" >
            </div>
            <div class="poblacio" style="grid-area: poblacio;">
                <p>Població:</p> <input type="text" name="poblacio" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" required maxlength="30" placeholder="Població" value="<?php echo $usuari['poblacio']; ?>">
            </div>
            <div class="codi-postal" style="grid-area: codi-postal;">
                <p>Codi postal:</p> <input type="number" name="codi_postal" size="5" min="1" max="99999" placeholder="Codi Postal" value="<?php echo $usuari['codi_postal']; ?>" >
            </div>
            <br>
            <div class="actualitzar-perfil">
                <input type="submit" name="Actualitza" id="submit-btn">
            </div>
            </form>
        </div>
    </div>
</html>
