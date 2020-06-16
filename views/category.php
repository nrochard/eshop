<!DOCTYPE html>

<html lang="fr">

<head>
    <title>Icône - Catégorie</title>
    <link rel="stylesheet" href="assets/css/category.css">
    <?php require 'partials/head_assets.php'; ?>
</head>

<body>

<header>

    <?php require 'partials/header.php'; ?>
    <hr>
</header>

<main>

    <h1 class="category_name"><?= $categorySelected['name'] ?></h1>

    <h3 class="subtitle"><?= $categorySelected['description'] ?></h3>

    <section>
        <?php foreach($products as $product):?>
        <figure>
            <a href="index.php?p=product&action=displayProduct&id=<?=$product['id']?>"><img src="assets/images/products/<?= $product['image']?>"></a>

            <h2><?= $product['name']?></h2>
            <figcaption><?= $product['price']?> euros</figcaption>
        </figure>
        <?php endforeach;?>
<!--        <figure>-->
<!--            <img src="assets/images/products/Pack_Coeur1.png">-->
<!--            <h2>100 likes</h2>-->
<!--            <figcaption>10 euros</figcaption>-->
<!--        </figure>-->
<!--        <figure>-->
<!--            <img src="assets/images/products/Pack_Coeur2.png">-->
<!--            <h2>100 likes</h2>-->
<!--            <figcaption>10 euros</figcaption>-->
<!--        </figure>-->
<!--        <figure>-->
<!--            <img src="assets/images/products/Pack_Coeur3.png">-->
<!--            <h2>100 likes</h2>-->
<!--            <figcaption>10 euros</figcaption>-->
<!--        </figure>-->
<!--        <figure>-->
<!--            <img src="assets/images/products/Pack_Coeur1.png">-->
<!--            <h2>100 likes</h2>-->
<!--            <figcaption>10 euros</figcaption>-->
<!--        </figure>-->
<!--        <figure>-->
<!--            <img src="assets/images/products/Pack_Coeur1.png">-->
<!--            <h2>100 likes</h2>-->
<!--            <figcaption>10 euros</figcaption>-->
<!--        </figure>-->
    </section>
</main>


<footer>
    <?php require 'partials/footer.php'; ?>
</footer>

</body>

