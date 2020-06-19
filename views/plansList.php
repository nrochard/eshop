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

    <h2 class="p-3 text-center mt-5 mb-5">Liste des abonnements</h2>

    <?php if(isset($_SESSION['messages'])): ?>
        <div class="message">
            <?php foreach($_SESSION['messages'] as $message): ?>
                <?= $message ?><br>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <div class="container-fluid">

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Tag</th>
                <th scope="col">Prix</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($plans as $plan):?>
                <tr>
                    <th scope="row"><?= htmlentities($plan['id']) ?></th>
                    <td><?= htmlentities($plan['name']) ?>
                    <td><?= htmlentities($plan['tag']) ?> </td>
                    <td><?= htmlentities($plan['price']) ?> </td>
                    <td>
                        <a class="btn btn-primary btn-lg" href="index.php?p=planAdmin&action=edit&id=<?= $plan['id'] ?>" role="button">Modifier</a>
                        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#exampleModal<?= $plan['id'] ?>">
                            Supprimer
                        </button>
                        <div class="modal fade" id="exampleModal<?= $plan['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Suppression définitive</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Êtes-vous certain de vouloir supprimer définitivement cet élement ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                        <a class="btn btn-danger" href="index.php?p=planAdmin&action=delete&id=<?= $plan['id'] ?>" role="button">Supprimer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    <div class="text-center mt-5">
        <a class="btn btn-success center-block text-center btn-lg" href="index.php?p=planAdmin&action=new" role="button">Ajouter un abonnement</a>

    </div>

</main>

<?php require 'partials/script_bootstrap.php'; ?>

</body>