<?php
function ModificaUsuari($connexio){
    try{
    $usuari_id = $_SESSION['ID'];
    $nom = $_POST['nom'];
    $correu = $_POST['correu'];
    $password_hash = password_hash($_POST['contrasenya'], PASSWORD_BCRYPT);
    $contrasenya = $password_hash;
    $adreca = $_POST['adreca'];
    $poblacio = $_POST['poblacio'];
    $codi_postal = $_POST['codi_postal'];

    $Modusuari = "UPDATE usuari SET nom='$nom', correu='$correu', contrasenya='$contrasenya', 
                  adreca='$adreca', poblacio='$poblacio', codi_postal='$codi_postal'  WHERE id = '" . $usuari_id . "'";
    $modifica_usuari = $connexio->prepare($Modusuari);
    #$usuaris = $modifica_usuari->fetch(PDO::FETCH_ASSOC);
    $modifica_usuari->execute();

    }catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return false;
}
?>
