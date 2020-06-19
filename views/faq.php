<!DOCTYPE html>

<html lang="fr">

<head>
    <title>Icône - Vos questions</title>
    <link rel="stylesheet" href="assets/css/faq.css">
    <?php require 'partials/head_assets.php'; ?>
</head>

<body>

<header>

    <?php require 'partials/header.php'; ?>
    <hr>
</header>

<main>

    <h1 class="title">VOS QUESTIONS </h1>
    <h3 class="subtitle">Tu trouveras toutes les réponses à tes questions ici !</h3>

    <?php foreach($questions as $question):?>
    <button class="accordion"><?= htmlentities($question['question'])?></button>
    <div class="panel">
        <p><?= htmlentities($question['answer'])?></p>
    </div>

    <?php endforeach; ?>


    <p class="others">Si toutefois tu en as d’autres, tu peux nous écrire à hello@icone.com, on se fera une joie de te répondre</p>
</main>
<footer>
    <?php require 'partials/footer.php'; ?>
</footer>

<script src="assets/js/faq.js"></script>

</body>



