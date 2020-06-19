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

    <h2 class="p-3 text-center mt-5 mb-5">Liste des produits</h2>

    <div class="container-fluid">

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Catégorie</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($products as $product):?>
                <tr>
                    <th><?= htmlentities($product['id']) ?></th>
                    <td><?= htmlentities($product['name']) ?> </td>
                    <td><?= htmlentities($product['categories']) ?> </td>
                    <td>
                        <a class="btn btn-primary btn-lg" href="index.php?p=productAdmin&action=edit&id=<?= $product['id'] ?>" role="button">Modifier</a>

                        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#exampleModal<?= $product['id'] ?>">
                            Supprimer
                        </button>

                        <div class="modal fade" id="exampleModal<?= $product['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Suppression d'une catégorie</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Êtes-vous certain de vouloir supprimer définitivement cet élement ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                        <a class="btn btn-danger" href="index.php?p=productAdmin&action=delete&id=<?= $product['id'] ?>" role="button">Supprimer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        <div class="text-center mt-5">
            <a class="btn btn-success center-block text-center btn-lg" href="index.php?p=productAdmin&action=new" role="button">Ajouter un produit</a>

        </div>
    </div>

</main>

<?php require 'partials/script_bootstrap.php'; ?>

</body>