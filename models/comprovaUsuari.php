<?php

function comprovaUsuari($connexio) {
    $resultat[0] =false;
    $resultat[1] = null;
    try {
        if (!empty($_POST['correu']) && !empty($_POST['contrasenya'])) {
            $email = $connexio->prepare('SELECT id, correu, contrasenya FROM usuari WHERE correu = :correu');
            $email->bindParam(':correu', $_POST['correu']);
            $email->execute();
            $resultat = $email->fetch(PDO::FETCH_ASSOC);



            if (count($resultat) > 0 && password_verify($_POST['contrasenya'], $resultat['contrasenya'])) {
                $_SESSION['ID'] = $resultat['id'];
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
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return $resultat;
}
?>
