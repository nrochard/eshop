<!DOCTYPE html>

<html lang="fr">

<head>
    <title>Icône - Tableau de bord</title>
    <link rel="stylesheet" href="assets/css/informations.css">
    <?php require 'partials/head_assets.php'; ?>
</head>

<body>

<header>

    <?php require 'partials/header.php'; ?>
    <hr>
</header>

<main>

    <div class="return">
        <img src="assets/flavicon/back.svg">
        <a href="index.php?p=dashboard&action=list">Retour au tableau de bord</a>
    </div>

    <h1 class="title">MES INFORMATIONS </h1>
    <h4 class="subtitle">N'hésitez pas à modifier vos informations ci-dessous pour que votre compte Icône soit parfaitement à jour.</h4>

    <?php if(isset($_SESSION['messages'])): ?>
        <div class="message">
            <?php foreach($_SESSION['messages'] as $message): ?>
                <?= $message ?><br>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <section class="form">
        <form action="index.php?p=dashboard&action=edit<?= '&id='. $user['id']?>" method="post">

            <label for="firstname">Prénom * :</label>
            <br>
            <input id="firstname" type="text" name="firstname" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['firstname'] : '' ?><?= isset($user) ? $user['firstname'] : ''?>"><br>

            <label for="lastname">Nom * :</label>
            <br>
            <input id="lastname" type="text" name="lastname" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['lastname'] : '' ?><?= isset($user) ? $user['lastname'] : ''?>"><br>

            <label for="adress">Adresse * :</label>
            <br>
            <input id="adress" type="text" name="adress" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['adress'] : '' ?><?= isset($user) ? $user['adress'] : ''?>"><br>

            <label for="city">Ville * :</label>
            <br>
            <input id="city" type="text" name="city" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['city'] : '' ?><?= isset($user) ? $user['city'] : ''?>"><br>

            <label for="email">Email * : </label>
            <br>
            <input id="email" type="email" name="email" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['email'] : '' ?><?= isset($user) ? $user['email'] : ''?>"><br>


            <label for="password">Mot de passe : </label><br>
            <small>Si vous souhaitez changer de mot de passe, veuillez en saisir un nouveau. Sinon, laissez le champ vide.</small>
            <br>
            <input id="password" type="text" name="password"><br>

            <br>

            <small>* Champs obligatoires</small>

            <button type="submit">Modifier !</button>



        </form>
    </section>
</main>
<footer>
    <?php require 'partials/footer.php'; ?>
</footer>

</body>

