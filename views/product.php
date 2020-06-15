<!DOCTYPE html>

<html lang="fr">

<head>
    <title>Icône - Description du produit</title>
    <link rel="stylesheet" href="assets/css/product.css">
    <?php require 'partials/head_assets.php'; ?>
</head>

<body>

<header>

    <?php require 'partials/header.php'; ?>

    <hr>

</header>

<main>

    <h1 class="title"><?= $product['name'] ?> </h1>

    <div class="info_product">
        <div>
            <img src="assets/images/blog/<?=$product['image']?>">
        </div>
        <div>
            <h3>Description : </h3>
            <p><?=$product['description']?></p>

            <form action="index.php?p=cart&action=addProduct&product_id=1" method="post">
                <label for="quantity"></label>
                <input type="text" name="quantity" id="quantity" placeholder="Quantité">
                <br>
                <button type="submit">Ajouter au panier</button>
            </form>

        </div>
    </div>


</main>

<footer>
    <?php require 'partials/footer.php'; ?>
</footer>

</body>

