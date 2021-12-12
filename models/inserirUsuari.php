<?php
function inserirUsuari($connexio) {
    try {
        $usuari = "INSERT INTO usuari(nom, correu, contrasenya, adreca, poblacio, codi_postal) VALUES (:nom, :correu, :contrasenya, :adreca, :poblacio, :codi_postal)";
        $inserta_usuari = $connexio->prepare($usuari);
        $inserta_usuari->bindParam(':nom', $_POST['nom']);
        $inserta_usuari->bindParam(':correu', $_POST['correu']);
        $password_hash = password_hash($_POST['contrasenya'], PASSWORD_BCRYPT);
        $inserta_usuari->bindParam(':contrasenya', $password_hash);
        $inserta_usuari->bindParam(':adreca', $_POST['adreca']);
        $inserta_usuari->bindParam(':poblacio', $_POST['poblacio']);
        $inserta_usuari->bindParam(':codi_postal', $_POST['codi_postal']);
        $usuaris = $inserta_usuari->fetch(PDO::FETCH_ASSOC);

        if ($inserta_usuari->execute()) {
            return true;
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return false;
}
?>