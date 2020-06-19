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

    <h2 class="p-3 text-center mt-5 mb-5">Formulaire d'édition des catégories</h2>

    <?php if(isset($_SESSION['messages'])): ?>
        <div class="message">
            <?php foreach($_SESSION['messages'] as $message): ?>
                <?= $message ?><br>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <div class="container-fluid">

        <form action="index.php?p=categoryAdmin&action=<?= isset($category) || (isset($_SESSION['old_inputs']) && $_GET['action'] == 'edit') ? 'edit&id='. $_GET['id'] : 'add' ?>"  method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Nom :</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['name'] : '' ?><?= isset($category) ? $category['name'] : ''?>">
                <small id="name" class="form-text text-muted">Champs obligatoire.</small>
            </div>
            <div class="form-group">
                <label for="description">Description :</label>
                <input type="text" id="description" name="description" class="form-control" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['description'] : '' ?><?= isset($category) ? $category['description'] : ''?>">

            </div>

            <div class="form-group">
                <label for="image">Image : </label>
                <p> Image existante pour ce produit :
                    <?php if (isset($_GET['id']))
                        echo htmlentities($category['image']);
                    else
                        echo "aucune"
                    ?>
                </p>
                <input type="file" class="form-control-file" id="image" name="image">
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
