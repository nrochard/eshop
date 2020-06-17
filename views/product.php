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

    <?php if(isset($_SESSION['messages'])): ?>
        <div class="message">
            <?php foreach($_SESSION['messages'] as $message): ?>
                <?= $message ?><br>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <?php if(!isset($_SESSION['messages'])): ?>
        <hr>
    <?php endif;?>
</header>

<main>

    <h1 class="title"><?= $product['name'] ?> </h1>

    <div class="info_product">
        <div>
            <img src="assets/images/products/<?=$product['image']?>">
        </div>
        <div>
            <h3 class="description">Description : </h3>
            <p><?=$product['description']?></p>
            <p><?=$product['price']?>€ </p>
            <form action="index.php?p=product&action=addProduct&product_id=<?=$product['id']?>" method="post">
                <label for="quantity"></label>
                <input type="number" name="quantity" id="quantity" placeholder="Quantité">
                <br>
                <button class="slide" type="submit">Ajouter au panier</button>
            </form>

        </div>
    </div>


</main>

<footer>
    <?php require 'partials/footer.php'; ?>
</footer>

</body>

