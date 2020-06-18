<!DOCTYPE html>

<html lang="fr">

<head>
    <title>Icône - Paiement</title>
    <link rel="stylesheet" href="assets/css/order.css">
    <?php require 'partials/head_assets.php'; ?>
</head>

<body>

<header>

    <?php require 'partials/header.php'; ?>
    <hr>

</header>

<main class="container">
    <h1 class="title">Votre commande à été validé, merci !</h1>
    <h3 class="subtitle">Retrouver ici le résumé de votre commande. Un mail vous à été envoyé !</h3>


    <div class="container_table">
        <table>
            <thead>
            <tr>
                <th>Nom du produit</th>
                <th>Prix du produit</th>
                <th>Quantité</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($detailsOrder as $detailOrder) : ?>
                <tr>
                    <?php if ($detailOrder['name'] != NULL) : ?>
                    <td><?= $detailOrder['name']?></td>
                    <td><?= $detailOrder['price']?></td>
                    <td><?= $detailOrder['quantity']?></td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        <p>Prix total de votre commande : <?= $_SESSION['total']?>€</p>
    </div>
    <?php unset($_SESSION['cart']);?>
    <?php unset($_SESSION['plan']);?>
    <div class="home_button">
        <button class="jump"><a href="index.php">Retourner à la page principale</a></button>
    </div>
</main>

<footer>
    <?php require 'partials/footer.php'; ?>
</footer>

</body>