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

    <h1 class="title"><?=htmlentities($categorySelected['name'])  ?></h1>

    <h3 class="subtitle"><?= htmlentities($categorySelected['description']) ?></h3>

    <section>
        <?php foreach($products as $product):?>
        <figure>
            <a href="index.php?p=product&action=displayProduct&id=<?=$product['id']?>"><img src="assets/images/products/<?= $product['image']?>"></a>

            <h2><?= htmlentities($product['name'])?></h2>
            <figcaption><?= htmlentities($product['price'])?> euros</figcaption>
        </figure>
        <?php endforeach;?>
    </section>
</main>


<footer>
    <?php require 'partials/footer.php'; ?>
</footer>

</body>

