<?php

function comprovaUsuari($connexio) {
    try {
        if (!empty($_POST['correu']) && !empty($_POST['contrasenya'])) {
            $email = $connexio->prepare('SELECT id, correu, contrasenya FROM usuari WHERE correu = :correu');
            $email->bindParam(':correu', $_POST['correu']);
            $email->execute();
            $resultat = $email->fetch(PDO::FETCH_ASSOC);

            if (count($resultat) > 0 && password_verify($_POST['contrasenya'], $resultat['contrasenya'])) {
                return true;
            }
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return false;
}
?>
