<?php
    function consultaMencions($connexio,$categoria){
        try {
            $consulta_productes = $connexio->prepare("SELECT id, nom, preu_actual, descripcio, u_stock FROM Productes WHERE categoria=" . categoria);
            $consulta_productes->execute();
            $productes = $consulta_productes->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return($productes);
    }
?>


