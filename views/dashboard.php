<!DOCTYPE html>

<html lang="fr">

<head>
    <title>Icône - Tableau de bord</title>
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <?php require 'partials/head_assets.php'; ?>
</head>

<body>

<header>

    <?php require 'partials/header.php'; ?>
    <hr>
</header>

<main>

    <h1 class="title">TABLEAU DE BORD</h1>
    <div class="container">
        <?php if(isset($_SESSION['messages'])): ?>
            <div class="message">
                <?php foreach($_SESSION['messages'] as $message): ?>
                    <?= $message ?><br>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <div class="main_dashoboard">
            <div class="menu">
                <div class="name">
                    <h4>Bonjour, <br>
                        <span><?= $_SESSION['user']['firstname'] ?> <?= $_SESSION['user']['lastname'] ?></span>
                    </h4>
                </div>
                <div class="link">

                    <a href="index.php?p=dashboard&action=list">Aperçu du compte</a> <br> <hr> <br>
                    <?php if($_SESSION['user']['is_admin'] == 1) :?>
                        <a href="index.php?p=admin">Administrer le site</a> <br> <hr> <br>
                    <?php endif;?>
                    <a href="index.php?p=dashboard&action=edit&id=<?= $_SESSION['user']['id'] ?>">Mes informations</a> <br> <hr> <br>
                    <!--                <a href="">Mes réseaux sociaux</a> <br> <hr> <br>-->
                    <a href="index.php?p=order&action=list">Mes commandes</a> <br> <hr> <br>
                    <a href="index.php?p=dashboard&action=disconnect">Déconnexion</a> <br> <hr>
                </div>
            </div>
            <div class="image">
                <h2>Bienvenue sur votre compte</h2>
            </div>
        </div>
    </div>



</main>
<footer>
    <?php require 'partials/footer.php'; ?>
</footer>

</body>

