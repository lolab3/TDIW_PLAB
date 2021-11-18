<?php

function comprovaUsuari($connexio) {
    try {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = $connexio->prepare('SELECT id, correu, contrasenya FROM usuari WHERE correu = :correu');
            $email->bindParam(':correu', $_POST['correu']);
            $email->execute();
            $resultat = $email->fetch(PDO::FETCH_ASSOC);

            if (count($resultat) > 0 && password_verify($_POST['password'], $resultat['password'])) {
                return true;
            }
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return false;
}
?>
