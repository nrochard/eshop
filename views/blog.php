<!DOCTYPE html>

<html lang="fr">

<head>
    <title>Icône - Nos conseils</title>
    <link rel="stylesheet" href="assets/css/blog.css">
    <?php require 'partials/head_assets.php'; ?>
</head>

<body>

<header>

    <?php require 'partials/header.php'; ?>
    <hr>
</header>

<main>
    <h1 class="title">NOS CONSEILS </h1>
    <h3 class="subtitle">Tu trouveras toutes les réponses à tes questions ici !</h3>

    <div class="articles">
        <?php foreach($articles as $article):?>
        <div>
            <h2><?= $article['title']?></h2>
            <img src="assets/images/blog/<?=$article['image']?>">
            <p>
                <?= $article['summary']?>
            </p>
            <p><?= $article['created_at']?></p>
        </div>
        <?php endforeach;?>
    </div>

</main>

<footer>
    <?php require 'partials/footer.php'; ?>
</footer>

</body>

