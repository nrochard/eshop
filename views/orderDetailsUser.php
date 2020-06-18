<!DOCTYPE html>

<html lang="fr">

<head>
    <title>Icône - Article de blog</title>
    <link rel="stylesheet" href="assets/css/order.css">
    <?php require 'partials/head_assets.php'; ?>
</head>

<body>

<header>

    <?php require 'partials/header.php'; ?>
    <hr>
</header>

<main>
    <div class="return">
        <img src="assets/flavicon/back.svg">
        <a href="index.php?p=order&action=list">Retour à la liste des commandes</a>
    </div>

    <h1 class="title">DÉTAILS DE LA COMMANDE <?= $_GET['orderId'] ?> </h1>
    <h3 class="subtitle">Retrouver ici les produits achetés lors de cette commande.</h3>

    <div class="container_table">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nom du produit</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Prix total</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($detailsOrder as $detailOrder):?>
                <tr>
                    <td><?= $detailOrder['name']?></td>
                    <td><?= $detailOrder['price']?>€</td>
                    <td><?= $detailOrder['quantity']?></td>
                    <td><?= $detailOrder['price'] * $detailOrder['quantity']?>€</td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>




</main>
<footer>
    <?php require 'partials/footer.php'; ?>
</footer>

</body>

