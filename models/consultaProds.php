<?php
    function getProds($connexio,$cat){
        try {
            $consulta_productes = $connexio->prepare("SELECT id, nom, preu_actual, descripció, unitats_stock FROM Productes WHERE categoria_id=" . $cat);
            $consulta_productes->execute();
            $productes = $consulta_productes->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return($productes);
    }
?>


