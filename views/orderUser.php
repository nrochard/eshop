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
                <th>Numéro de commande</th>
                <th>Date</th>
                <th>Montant total</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($orders as $order):?>
                <tr>
                    <td><?= htmlentities($order['id'])?></td>
                    <td><?= htmlentities($order['date'])?></td>
                    <td><?= htmlentities($order['price'])?>€</td>
                    <td><a href="index.php?p=order&action=view&orderId=<?= $order['id']?>" class="details_order">Voir le détail</a></td>
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

