#PHP, MySQL
<?php
    $sql = 'SELECT id FROM categories';

// Pas 1: preparem la consulta.
    $stmt = $connexio->prepare($sql);

// Pas 2: executem la consulta.
    $stmt->execute();

// Pas 3: agafem els resultats de la consulta.
    $categories = $stmt->fetchAll();
    #si volguessim solament una = $category = $stmt->fetch(PDO::FETCH_NUM);
?>