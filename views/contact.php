<!DOCTYPE html>

<html lang="fr">

<head>
    <title>Icône - CGV</title>
    <link rel="stylesheet" href="assets/css/contact.css">
    <?php require 'partials/head_assets.php'; ?>
</head>

<body>

<header>

    <?php require 'partials/header.php'; ?>

    <?php if(isset($_SESSION['messages'])): ?>
        <div class="message">
            <?php foreach($_SESSION['messages'] as $message): ?>
                <?= $message ?><br>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <?php if(!isset($_SESSION['messages'])): ?>
        <hr>
    <?php endif;?>
</header>


<main>

    <h1 class="title">CONTACT </h1>
    <h4 class="subtitle">N'hésitez pas à nous envoyer un message, notre équipe vous répondra au plus vite.</h4>

    <section class="form">
        <form action="index.php?p=contact&action=send" method="post">

            <label for="firstname">Prénom * :</label>
            <br>
            <input id="firstname" type="text" name="firstname" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['firstname'] : '' ?>"><br>

            <label for="lastname">Nom * :</label>
            <br>
            <input id="lastname" type="text" name="lastname" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['lastname'] : '' ?>"><br>

            <label for="email">Email c: </label>
            <br>
            <input id="email" type="email" name="email" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['email'] : '' ?>"><br>


            <label for="content">Message * : </label><br>
            <textarea name="content" id="content"><?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['content'] : '' ?></textarea>
            <br>
            <br>

            <small>* Champs obligatoires</small>

            <button type="submit">Envoyer !</button>



        </form>
    </section>
</main>

<footer>
    <?php require 'partials/footer.php'; ?>
</footer>

</body>
