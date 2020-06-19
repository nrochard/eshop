<!DOCTYPE html>

<html lang="fr">

<head>
    <title>Icône - Administration</title>
    <link rel="stylesheet" href="assets/css/admin.css">
    <?php require 'partials/head_assets_admin.php'; ?>
</head>

<body>

<header>

    <?php require 'partials/header_admin.php'; ?>
</header>

<main>
    <?php if(isset($_SESSION['messages'])): ?>
        <div class="message">
            <?php foreach($_SESSION['messages'] as $message): ?>
                <?= $message ?><br>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <h2 class="p-3 text-center mt-5 mb-5">Page détaillée de la commande <?= $_GET['id']?></h2>

    <div class="container-fluid">

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Quantité</th>
                <th scope="col">Prix unitaire</th>
                <th scope="col">Total</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($DetailsOrder as $DetailOrder):?>
            <tr>
                <th><?= htmlentities($DetailOrder['name']) ?></th>
                <td><?= htmlentities($DetailOrder['quantity']) ?></td>
                <td><?= htmlentities($DetailOrder['price']) ?> €</td>
                <td><?= htmlentities($DetailOrder['quantity']) * htmlentities($DetailOrder['price']) ?>€</td>
            </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="text-center mt-5">
            <a class="btn btn-success center-block text-center btn-lg" href="index.php?p=orderAdmin&action=list" role="button">Revenir en arrière</a>

        </div>
    </div>

</main>

<?php require 'partials/script_bootstrap.php'; ?>

</body>