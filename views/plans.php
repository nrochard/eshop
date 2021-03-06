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



    <h1 class="title">NOS ABONNEMENTS - INSTAGRAM</h1>
    <h3 class="subtitle">Nous proposons 3 abonnements réservés pour Instagram afin d'accroître <br> progessivement ta popularité sur ce réseau !</h3>

    <div class="plans">
        <?php foreach($plans as $plan):?>
        <div>
            <h2><?= htmlentities($plan['name'])?></h2>
            <hr>
            <h4><?= htmlentities($plan['tag'])?></h4>
            <h3><?= htmlentities($plan['price'])?> € / <?= htmlentities($plan['duration'])?></h3>
            <p><?= htmlentities($plan['feature1'])?></p>
            <p><?= htmlentities($plan['feature2'])?></p>
            <p><?= htmlentities($plan['feature3'])?></p>
            </p>
            <br>
            <button><a href="index.php?p=plans&action=addProduct&id=<?= $plan['id'] ?>">Commencer</a></button>
        </div>
        <?php endforeach;?>
    </div>

</main>
<footer>
    <?php require 'partials/footer.php'; ?>
</footer>

</body>

