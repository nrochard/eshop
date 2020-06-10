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

    <h2 class="p-3 text-center mt-5 mb-5">Formulaire d'édition des questions / réponses</h2>

    <?php if(isset($_SESSION['messages'])): ?>
        <div class="message">
            <?php foreach($_SESSION['messages'] as $message): ?>
                <?= $message ?><br>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <div class="container-fluid">

        <form action="index.php?p=faqAdmin&action=<?= isset($question) || (isset($_SESSION['old_inputs']) && $_GET['action'] == 'edit') ? 'edit&id='. $_GET['id'] : 'add' ?>"  method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="question">Question :</label>
                <input type="text" class="form-control" id="question" name="question" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['question'] : '' ?><?= isset($question) ? $question['question'] : ''?>">
                <small id="question" class="form-text text-muted">Champs obligatoire.</small>
            </div>
            <div class="form-group">
                <label for="answer">Réponse :</label>
                <input type="text" id="answer" name="answer" class="form-control" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['answer'] : '' ?><?= isset($question) ? $question['answer'] : ''?>">
                <small id="answer" class="form-text text-muted">Champs obligatoire.</small>

            </div>
            <div class="text-center mt-5">
                <button type="submit" class="btn btn-dark btn-lg">Enregistrer</button>
            </div>

        </form>

    </div>

</main>

<?php require 'partials/script_bootstrap.php'; ?>

</body>
