<?php
    function getProds($connexio,$cat){
        try {
            $consulta_productes = $connexio->prepare("SELECT id, nom, preu_actual, descripcio, unitats_stock FROM Productes WHERE categoria_id=" . $cat);
            $consulta_productes->execute();
            $productes = $consulta_productes->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return($productes);
    }

    function getAllProds($connexio){
        try {
            $consulta_productes = $connexio->prepare("SELECT categoria_id, id, nom, preu_actual, descripcio, unitats_stock FROM Productes");
            $consulta_productes->execute();
            $allProductes = $consulta_productes->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return($allProductes);
    }


    function getProd($connexio,$llista_ids){
        try {
            $resultat = array();
            foreach ($llista_ids as $ids){
                $id = $connexio->prepare("SELECT nom, preu_actual FROM Productes WHERE id = '" . $ids . "'");
                $id->execute();
                $res = $id->fetch(PDO::FETCH_ASSOC);
                array_push($resultat, $res);
            }
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return($resultat);
    }
?>


