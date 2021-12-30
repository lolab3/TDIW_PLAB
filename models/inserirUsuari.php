<?php
function inserirUsuari($connexio) {
    $resultat[0] =false;
    $resultat[1] = null;
    try {
        $usuari = "INSERT INTO usuari(nom, correu, contrasenya, adreca, poblacio, codi_postal) VALUES (:nom, :correu, :contrasenya, :adreca, :poblacio, :codi_postal)";
        $inserta_usuari = $connexio->prepare($usuari);
        $nom = filter_var($_POST['nom'], FILTER_SANITIZE_STRING);
        $inserta_usuari->bindParam(':nom',$nom);
        $correu = filter_var($_POST['correu'], FILTER_VALIDATE_EMAIL);
        $inserta_usuari->bindParam(':correu',$correu);
        $constrasenya = filter_var( $_POST['contrasenya'], FILTER_SANITIZE_STRING);
        $password_hash = password_hash($constrasenya, PASSWORD_BCRYPT);
        $inserta_usuari->bindParam(':contrasenya', $password_hash);
        $adreca = filter_var( $_POST['adreca'], FILTER_SANITIZE_STRING);
        $inserta_usuari->bindParam(':adreca', $adreca);
        $poblacio = filter_var( $_POST['poblacio'], FILTER_SANITIZE_STRING);
        $inserta_usuari->bindParam(':poblacio', $poblacio);
        $codi_postal = filter_var($_POST['codi_postal'],FILTER_VALIDATE_INT);
        $inserta_usuari->bindParam(':codi_postal', $codi_postal);
        $usuaris = $inserta_usuari->fetch(PDO::FETCH_ASSOC);

        if ($inserta_usuari->execute()) {
            $_SESSION['user_id'] = $usuaris['id'];
            $resultat[0] =true;
            $resultat[1] = null;
            return $resultat;
        }
        else{
            $errorLogin= "Nom d'usuari i/o contrasenya incorrectes";
            $resultat[0] =false;
            $resultat[1] = $errorLogin;
            return $resultat;
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return $resultat;
}
?>