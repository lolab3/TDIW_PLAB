
<?php
function getUsuaris($connexio){
    try {
        $consulta_usuaris = $connexio->prepare("SELECT id, correu, contrasenya, nom, població, codi_postal FROM usuari");
        $consulta_usuaris->execute();
        $usuaris = $consulta_usuaris->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return($usuaris);
}
?>