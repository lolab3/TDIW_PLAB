<?php
function inserirProd($connexio){
    try {
        $data=date("Y-m-d H:i:s");
        $quantitat_prods = $_SESSION['total_productes'];
        $preu_total = $_SESSION['preu_total'];
        $usuari_id = $_SESSION['ID'];

        $comanda = "INSERT INTO comanda(data, preu_total, total_productes, usuari_id) VALUES ('$data', '$preu_total', '$quantitat_prods', '$usuari_id')";
        $inserta_comanda = $connexio->prepare($comanda);
        $comandes = $inserta_comanda->execute();
        return $comandes;
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return false;
}

function getComandaID($connexio, $id_usuari){
    try {
        $id = $connexio->prepare("SELECT max(id) FROM comanda WHERE usuari_id = '" . $id_usuari . "'");
        $id->execute();
        $res = $id->fetch(PDO::FETCH_ASSOC);
        return($res);
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return false;
}

function inserirProdComandes($connexio,$llista_ids, $resultats, $quantitat_prod_indiv, $id_comanda) {
    try {
        for($i=0;$i<count($llista_ids);$i++) {
            $comanda_productes = "INSERT INTO comanda_productes(id, productes_id, preu_historic, unitat_productes, nom_producte) VALUES ('{$id_comanda['max(id)']}','{$llista_ids[$i]}', '{$resultats[$i]['preu_actual']}', '{$quantitat_prod_indiv[$llista_ids[$i]]}', '{$resultats[$i]['nom']}')";
            $inserta_comanda_productes = $connexio->prepare($comanda_productes);
            $comandes_productes = $inserta_comanda_productes->execute();
            return $comandes_productes;
        }
        $_SESSION['comanda_id'] = $_SESSION['comanda_id'] + 1;
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return false;
}
?>
