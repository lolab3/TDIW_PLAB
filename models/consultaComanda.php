<?php
function getProds($connexio,$id_usuari){
    try {
        $comanda = $connexio->prepare("SELECT data, preu_total, total_productes, id FROM comanda WHERE usuari_id = '" . $id_usuari . "'");
        $comanda->execute();
        $resultat = $comanda->fetchAll(PDO::FETCH_ASSOC);
        return $resultat;
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return false;
}

function getComandaProds($connexio, $id_comanda){
    try {
        $arrayProds = array();
        foreach ($id_comanda as $id_comandes){
            $comandaprods = $connexio->prepare("SELECT productes_id, preu_historic,unitat_productes, nom_producte FROM comanda_productes WHERE id_comanda = '" . $id_comandes . "'");
            $comandaprods->execute();
            $res = $comandaprods->fetchAll(PDO::FETCH_ASSOC);
            array_push($arrayProds, $res);
        }
        return($arrayProds);
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return false;
}
?>


