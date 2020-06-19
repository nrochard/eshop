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


    <h2 class="p-3 text-center mt-5 mb-5">Formulaire d'édition des articles</h2>


    <div class="container-fluid">

        <form action="index.php?p=blogAdmin&action=<?= isset($article) || (isset($_SESSION['old_inputs']) && $_GET['action'] == 'edit') ? 'edit&id='. $_GET['id'] : 'add' ?>"  method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Nom :</label>
                <input type="text" class="form-control" id="title" name="title" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['title'] : '' ?><?= isset($article) ? $article['title'] : ''?>">
                <small id="name" class="form-text text-muted">Champs obligatoire.</small>
            </div>
            <div class="form-group">
                <label for="created_at">Date :</label>
                <input type="date" class="form-control" id="created_at" name="created_at" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['created_at'] : '' ?><?= isset($article) ? $article['created_at'] : ''?>">
                <small id="name" class="form-text text-muted">Champs obligatoire.</small>
            </div>

            <div class="form-group">
                <label for="summary">Résumé :</label>
                <input type="text" class="form-control" id="summary" name="summary" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['summary'] : '' ?><?= isset($article) ? $article['summary'] : ''?>">
                <small id="name" class="form-text text-muted">Champs obligatoire.</small>
            </div>
            <div class="form-group">
                <label for="content">Contenu :</label>
                <textarea type="text" class="form-control" id="content" name="content"><?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['content'] : '' ?><?= isset($article) ? $article['content'] : ''?></textarea>
                <small id="name" class="form-text text-muted">Champs obligatoire.</small>
            </div>

            <div class="form-group">
                <label for="is_published">Publié ?</label>
                <select class="form-control" id="is_published" name="is_published">
                    <option value="1">Oui</option>
                    <option value="0">Non</option>
                </select>
            </div>

            <div class="form-group">
                <label for="image">Image : </label>
                <p> Image existante pour cet article :
                    <?php if (isset($_GET['id']))
                        echo htmlentities($article['image']);
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
