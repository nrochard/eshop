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
        <a href="index.php?p=dashboard&action=list">Retour au tableau de bord</a>
    </div>

    <h1 class="title">VOS COMMANDES </h1>
    <h3 class="subtitle">Retrouver ici la liste de vos commandes.</h3>

    <div class="container_table">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Numéro de commande</th>
                <th scope="col">Date</th>
                <th scope="col">Prix total</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($orders as $order):?>
                <tr>
                    <td><?= $order['id']?></td>
                    <td><?= $order['date']?></td>
                    <td><?= $order['price']?></td>
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

