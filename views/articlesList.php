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

    <h2 class="p-3 text-center mt-5 mb-5">Liste des articles du blog</h2>



    <div class="container-fluid">

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Résumé</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($articles as $article):?>
                <tr>
                    <th scope="row"><?= htmlentities($article['id']) ?></th>
                    <td><?= htmlentities($article['title']) ?> </td>
                    <td><?= htmlentities($article['summary']) ?> </td>
                    <td><?= htmlentities($article['created_at']) ?> </td>
                    <td>
                        <a class="btn btn-primary btn-lg" href="index.php?p=blogAdmin&action=edit&id=<?= $article['id'] ?>" role="button">Modifier</a>

                        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#exampleModal<?= $article['id'] ?>">
                            Supprimer
                        </button>
                        <div class="modal fade" id="exampleModal<?= $article['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <a class="btn btn-danger" href="index.php?p=blogAdmin&action=delete&id=<?= $article['id'] ?>" role="button">Supprimer</a>
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
            <a class="btn btn-success center-block text-center btn-lg" href="index.php?p=blogAdmin&action=new" role="button">Ajouter un article</a>

        </div>
    </div>

</main>

<?php require 'partials/script_bootstrap.php'; ?>

</body>

