<?php
function inserirProd($connexio) {
    try {
        $comanda_productes = "INSERT INTO comanda_productes(productes_id, preu_historic, unitats_demanades) VALUES (:productes_id, :preu_historic, :unitats_demanades)";
        $inserta_comanda_productes = $connexio->prepare($comanda_productes);
        $productes_id = filter_var($_POST['productes_id'], FILTER_VALIDATE_INT);
        $inserta_comanda_productes->bindParam(':productes_id',$productes_id);
        $preu_historic = filter_var($_POST['preu_historic'], FILTER_VALIDATE_INT);
        $inserta_comanda_productes->bindParam(':preu_historic',$preu_historic);
        $unitats_demanades = filter_var( $_POST['unitats_demanades'], FILTER_SANITIZE_INT);
        $inserta_comanda_productes->bindParam(':unitats_demanades', $unitats_demanades);
        $comandes_productes = $inserta_comanda_productes->fetch(PDO::FETCH_ASSOC);
        $comandes_productes = $inserta_comanda_productes->execute();
        return $comandes_productes;
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return false;
}
?>
