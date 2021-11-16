<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=yes"/>
    <title>eRoba</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>

<body>
<div id="layout">

    <?php include __DIR__ .'/controladors/menu_superior.php';?>

    <?php include __DIR__ .'/controladors/llistar_complements.php';?>

    <footer style="grid-area: footer;">
        <h2 id="footer_title">eROBA</h2>
        <p>About us</p>
    </footer>

</div>

</body>
</html>