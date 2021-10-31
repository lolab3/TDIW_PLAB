<?php
    $sql_cat = 'SELECT id, tipus FROM Categories';
    $sql_prod = 'SELECT id, nom, preu_actual, descripcio, u_stock FROM Productes';

// Pas 1: preparem la consulta.
    $stmt_1 = $connexio->prepare($sql_cat);
    $stmt_2 = $connexio->prepare($sql_prod);

// Pas 2: executem la consulta.
    $stmt1->execute();
    $stmt2->execute();

// Pas 3: agafem els resultats de la consulta.
    $roba = $stmt2->fetch(PDO::FETCH_NUM); #tipuscat=1
    $calçat = $stmt2->fetch(PDO::FETCH_NUM); #tipuscat=2
    $complements = $stmt2->fetch(PDO::FETCH_NUM); #tipuscat=3
?>