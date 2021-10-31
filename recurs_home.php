#PHP,HTML,JS,CSS
<html lang="ca">
<head>
    <title>Home</title>
</head>

<body>
<header>
    <?php require __DIR__.'/controladors/menu_superior.php'; ?>
</header>

<div class="container">
    <?php require __DIR__.'/controladors/llistar_categories.php'; ?>
</div>

</body>
</html>