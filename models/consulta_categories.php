#PHP, MySQL
<?php
    function getCategories($connexio){
        try {
            $consulta_categories = $connexio->prepare("SELECT id, tipus FROM categories");
            $consulta_categories->execute();
            $categories = $consulta_categories->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return($categories);
}
?>