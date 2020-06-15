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

    <h2 class="p-3 text-center mt-5 mb-5">Formulaire d'édition des abonnements</h2>

    <?php if(isset($_SESSION['messages'])): ?>
        <div class="message">
            <?php foreach($_SESSION['messages'] as $message): ?>
                <?= $message ?><br>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <div class="container-fluid">

        <form action="index.php?p=planAdmin&action=<?= isset($plan) || (isset($_SESSION['old_inputs']) && $_GET['action'] == 'edit') ? 'edit&id='. $_GET['id'] : 'add' ?>"  method="post" enctype="multipart/form-data">
            <div class="form-group">

                <label for="name">Nom :</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['name'] : '' ?><?= isset($plan) ? $plan['name'] : ''?>">
                <small id="name" class="form-text text-muted">Champs obligatoire.</small>
            </div>
            <div class="form-group">
                <label for="tag">Tag :</label>
                <input type="text" class="form-control" id="tag" name="tag" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['tag'] : '' ?><?= isset($plan) ? $plan['tag'] : ''?>">
                <small id="name" class="form-text text-muted">Champs obligatoire.</small>
            </div>

            <div class="form-group">
                <label for="feature1">Première caractéristique :</label>
                <input type="text" class="form-control" id="feature1" name="feature1" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['feature1'] : '' ?><?= isset($plan) ? $plan['feature1'] : ''?>">
                <small id="name" class="form-text text-muted">Champs obligatoire.</small>
            </div>

            <div class="form-group">
                <label for="feature2">Deuxième caractéristique :</label>
                <input type="text" class="form-control" id="feature2" name="feature2" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['feature2'] : '' ?><?= isset($plan) ? $plan['feature2'] : ''?>">
                <small id="name" class="form-text text-muted">Champs obligatoire.</small>
            </div>

            <div class="form-group">
                <label for="feature3">Troisième caractéristique :</label>
                <input type="text" class="form-control" id="feature3" name="feature3" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['feature3'] : '' ?><?= isset($plan) ? $plan['feature3'] : ''?>">
                <small id="name" class="form-text text-muted">Champs obligatoire.</small>
            </div>

            <div class="form-group">
                <label for="duration">Durée :</label>
                <input type="text" class="form-control" id="duration" name="duration" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['duration'] : '' ?><?= isset($plan) ? $plan['duration'] : ''?>">
                <small id="name" class="form-text text-muted">Champs obligatoire.</small>
            </div>

            <div class="form-group">
                <label for="price">Prix :</label>
                <input type="text" class="form-control" id="price" name="price" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['price'] : '' ?><?= isset($plan) ? $plan['price'] : ''?>">
                <small id="name" class="form-text text-muted">Champs obligatoire.</small>
            </div>


            <div class="text-center mt-5">
                <button type="submit" class="btn btn-dark btn-lg">Enregistrer</button>
            </div>

        </form>

    </div>

</main>

<?php require 'partials/script_bootstrap.php'; ?>

</body>
