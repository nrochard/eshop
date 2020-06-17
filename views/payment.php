<!DOCTYPE html>

<html lang="fr">

<head>
    <title>Icône - Paiement</title>
    <link rel="stylesheet" href="assets/css/payment.css">
    <?php require 'partials/head_assets.php'; ?>
</head>

<body>

<header>

    <?php require 'partials/header.php'; ?>
    <hr>

</header>

<main>
    <div class="container">

        <h1 class="title">PAIEMENT 100% SÉCURISÉE </h1>
        <h3 class="subtitle">Effectuer votre paiement avec votre carte bancaire sur notre plateforme sécurisée !</h3>


        <?php if(isset($_SESSION['messages'])): ?>
            <div>
                <?php foreach($_SESSION['messages'] as $message): ?>
                    <h3 class="message"><?= $message ?></h3><br>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <form action="index.php?p=order&action=validate" method="post">

            <label for="card">
                <span>Type de carte :</span>
            </label>
            <br>   <br>
            <select id="card" name="card">
                <option value="visa">Visa</option>
                <option value="mc">Mastercard</option>
                <option value="cb">CB</option>
            </select>
            <br>

            <label for="name">Titulaire de la carte * :</label>
            <br>
            <input id="name" type="text" name="name" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['name'] : '' ?>"><br>

            <label for="number">Numéro de la carte * :</label>
            <br>
            <input id="number" type="number" name="number" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['number'] : '' ?>"><br>

            <label for="date">Validité * :</label>
            <br>
            <input id="date" type="text" name="date" placeholder="Format mm/aaaa" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['date'] : '' ?>"><br>

            <label for="code">Cryptogramme * :</label>
            <br>
            <input id="code" type="text" name="code" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['code'] : '' ?>"><br>

            <small>* Champs obligatoires</small>

            <button type="submit">Valider le paiement !</button>
        </form>

    </div>

</main>

<footer>
    <?php require 'partials/footer.php'; ?>
</footer>

</body>

