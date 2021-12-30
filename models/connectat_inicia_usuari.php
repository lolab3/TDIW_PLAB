<?php
function sessioUser($connexio)
{
    try {
        if (isset($_SESSION['user_id'])) {
            $id = $connexio->prepare('SELECT id, nom, correu FROM usuari WHERE id = :id');
            $id->bindParam(':id', $_SESSION['user_id']);
            $id->execute();
            $resultat = $id->fetch(PDO::FETCH_ASSOC);

            if (count($resultat) > 0) {
                $user = $resultat;
                return $user;
            }
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return null;
}
?>
