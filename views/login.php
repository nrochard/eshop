<!DOCTYPE html>

<html lang="fr">

<head>
    <title>Icône - Inscription ou Connexion</title>
    <link rel="stylesheet" href="assets/css/login.css">
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

    <div class="container">


        <div class="connexion">
            <h2>CONNEXION</h2>
            <form action="index.php?p=login&action=connect" method="post">

                <label for="email"></label>
                <input id="email" type="email" name="email" required placeholder="Email" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['email'] : '' ?>"><br>

                <label for="password"></label>
                <input id="password" type="password" name="password" required placeholder="Mot de passe"><br>

                <button type="submit">Me connecter</button>

            </form>
        </div>

        <div class="inscription">
            <h2>INSCRIPTION</h2>
            <p>Créer votre compte Icône, c’est rapide.<br>
                Vous pourrez suivre vos commandes plus facilement.</p>
            <button><a href="index.php?p=registration&action=new">M'inscrire</a></button>
        </div>
    </div>


</main>


<footer>
    <?php require 'partials/footer.php'; ?>
</footer>

</body>

