<!DOCTYPE html>

<html lang="fr">

<head>
    <title>Icône - Abonnements</title>
    <link rel="stylesheet" href="assets/css/plans.css">
    <?php require 'partials/head_assets.php'; ?>
</head>

<body>

<header>

    <?php require 'partials/header.php'; ?>
    <hr>
</header>

<main>

    <h1 class="title">NOS ABONNEMENTS - INSTAGRAM</h1>
    <h3 class="subtitle">Nous proposons 3 abonnements réservés pour Instagram afin d'accroître <br> progessivement ta popularité sur ce réseau !</h3>

    <div class="plans">
        <?php foreach($plans as $plan):?>
        <div>
            <h2><?= $plan['name']?></h2>
            <hr>
            <h4><?= $plan['tag']?></h4>
            <h3><?= $plan['price']?> € / semaine</h3>
            <p><?= $plan['feature1']?></p>
            <p><?= $plan['feature2']?></p>
            <p><?= $plan['feature3']?></p>
            </p>
            <br>
            <button><a href="">Commencer</a></button>
        </div>
        <?php endforeach;?>
    </div>

</main>
<footer>
    <?php require 'partials/footer.php'; ?>
</footer>

</body>

