<!DOCTYPE html>

<html lang="fr">

<head>
    <title>Icône - Formulaire d'inscription</title>
    <link rel="stylesheet" href="assets/css/registration.css">
    <?php require 'partials/head_assets.php'; ?>
</head>

<body>

<header>
    <?php require 'partials/header.php'; ?>
    <hr>
</header>

<main>
    <div class="container">
        <h2>Nouveau chez Icône ? </h2>
        <h4>Inscrivez-vous à l'aide de votre adresse e-mail</h4>


        <?php if(isset($_SESSION['messages'])): ?>
            <div>
                <?php foreach($_SESSION['messages'] as $message): ?>
                    <h3 class="message"><?= $message ?></h3><br>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <form action="index.php?p=registration&action=add" method="post">

            <label for="firstname">Prénom * :</label>
            <br>
            <input id="firstname" type="text" name="firstname" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['firstname'] : '' ?>"><br>

            <label for="lastname">Nom * :</label>
            <br>
            <input id="lastname" type="text" name="lastname" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['lastname'] : '' ?>"><br>

            <label for="adress">Adresse * :</label>
            <br>
            <input id="adress" type="text" name="adress" placeholder="Rue + numéro" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['adress'] : '' ?>"><br>

            <label for="city">Ville * :</label>
            <br>
            <input id="city" type="text" name="city" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['city'] : '' ?>"><br>

            <label for="email">Email * : </label>
            <br>
            <input id="email" type="email" name="email" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['email'] : '' ?>"><br>

            <label for="password">Mot de passe * : </label>
            <br>
            <input id="password" type="password" name="password"><br>

            <input type="checkbox" id="conditions" name="conditions" value="conditions">
            <label for="conditions">
                En créant un compte, j'accepte les <a href="index.php?p=cgv" target="_blank">CGV</a> & la <a href="index.php?p=political" target="_blank">politique de confidentialité</a></label><br>

            <small>* Champs obligatoires</small>

            <button type="submit">M'inscrire !</button>
        </form>

    </div>

</main>

<footer>
    <?php require 'partials/footer.php'; ?>
</footer>

</body>

