<?php
    require_once __DIR__.'/../models/connectaBD.php';
    $connexio = connectaBD();
    try {
        $usuari = "INSERT INTO usuari(id, nom, correu, contrasenya, adreca, poblacio, codi_postal) VALUES (:id, :nom, :correu, :contrasenya, :adreca, :poblacio, :codi_postal)";
        $inserta_usuari = $connexio->prepare($usuari);
        $inserta_usuari->bindParam(':id', $_POST['id']);
        $inserta_usuari->bindParam(':nom', $_POST['nom']);
        $inserta_usuari->bindParam(':correu', $_POST['correu']);
        $password_hash = password_hash($_POST['contrasenya'], PASSWORD_BCRYPT);
        $inserta_usuari->bindParam(':contrasenya', $password_hash);
        $inserta_usuari->bindParam(':adreca', $_POST['adreca']);
        $inserta_usuari->bindParam(':poblacio', $_POST['poblacio']);
        $inserta_usuari->bindParam(':codi_postal', $_POST['codi_postal']);
        $inserta_usuari->execute();
        $usuaris = $inserta_usuari->fetch(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
}
?>