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

    <h2 class="p-3 text-center mt-5 mb-5">Liste des commandes</h2>

    <div class="container-fluid">

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Prénom et nom</th>
                <th scope="col">Prix total</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($orders as $order):?>
                <tr>
                    <th><?= $order['id'] ?></th>
                    <td><?= $order['firstname'] ?> <?= $order['lastname'] ?></td>
                    <td><?= $order['price'] ?> €</td>
                    <td>
                        <a class="btn btn-primary btn-lg" href="index.php?p=orderAdmin&action=view&id=<?= $order['id'] ?>" role="button">Voir</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</main>

<?php require 'partials/script_bootstrap.php'; ?>

</body>