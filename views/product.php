<!DOCTYPE html>

<html lang="fr">

<head>
    <title>Icône - Description du produit</title>
    <link rel="stylesheet" href="assets/css/home_page.css">
    <?php require 'partials/head_assets.php'; ?>
</head>

<body>

<header>

    <?php require 'partials/header.php'; ?>

</header>

<main>


    <form action="index.php?p=cart&action=addProduct&product_id=1" method="post">

        <input type="text" name="quantity">
    </form>
</main>

<footer>
    <?php require 'partials/footer.php'; ?>
</footer>

</body>

