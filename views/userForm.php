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

    <h2 class="p-3 text-center mt-5 mb-5">Formulaire d'ajout / édition des utilisateurs</h2>

    <?php if(isset($_SESSION['messages'])): ?>
        <div class="message">
            <?php foreach($_SESSION['messages'] as $message): ?>
                <?= $message ?><br>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <div class="container-fluid">

        <form action="index.php?p=userAdmin&action=<?= isset($user) || (isset($_SESSION['old_inputs']) && $_GET['action'] == 'edit') ? 'edit&id='. $_GET['id'] : 'add' ?>"  method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="firstname">Prénom :</label>
                <input type="text" class="form-control" id="firstname" name="firstname" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['firstname'] : '' ?><?= isset($user) ? $user['firstname'] : ''?>">
                <small id="name" class="form-text text-muted">Champs obligatoire.</small>
            </div>

            <div class="form-group">
                <label for="lastname">Nom :</label>
                <input type="text" class="form-control" id="lastname" name="lastname" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['lastname'] : '' ?><?= isset($user) ? $user['lastname'] : ''?>">
                <small id="name" class="form-text text-muted">Champs obligatoire.</small>
            </div>

            <div class="form-group">
                <label for="adress">Adresse (numéro + rue) :</label>
                <textarea type="text" class="form-control" id="adress" name="adress"><?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['adress'] : '' ?><?= isset($user) ? $user['adress'] : ''?></textarea>
                <small id="name" class="form-text text-muted">Champs obligatoire.</small>
            </div>

            <div class="form-group">
                <label for="city">Ville :</label>
                <input type="text" class="form-control" id="city" name="city" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['city'] : '' ?><?= isset($user) ? $user['city'] : ''?>">
                <small id="name" class="form-text text-muted">Champs obligatoire.</small>
            </div>

            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['email'] : '' ?><?= isset($user) ? $user['email'] : ''?>">
                <small id="name" class="form-text text-muted">Champs obligatoire.</small>
            </div>

            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="text" class="form-control" id="password" name="password">
                <small id="name" class="form-text text-muted">Champs obligatoire à la création d'un utilisateur.</small>
                <small id="name" class="form-text text-muted">Si vous souhaitez réinitialiser le mot de passe d'un utilisateur, saisissez en un nouveau. Sinon, laissez le champ vide</small>
            </div>

            <div class="form-group">
                <label for="is_admin">Administrateur</label>
                <select class="form-control" id="is_admin" name="is_admin">
                    <option value="0">Non</option>
                    <option value="1">Oui</option>


                </select>
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