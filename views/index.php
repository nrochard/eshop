<!DOCTYPE html>

<html lang="fr">

<head>
    <title>Icône - Page d'accueil</title>
    <link rel="stylesheet" href="assets/css/home_page.css">
    <?php require 'partials/head_assets.php'; ?>
</head>

<body>

<header>

    <?php require 'partials/header.php'; ?>

</header>

<div class="image_header">
    <h2>Devenez populaire<br> en achetant des
        <a href="" class="typewrite" data-period="2000" data-type='[ "abonnés", "likes", "commentaires", "vues", "retweets" ]'>
            <span class="wrap"></span>
        </a>
    </h2>
</div>



<main>

    <section class="about">
        <div class="card_questions">
            <div class="what">
                <h3>Icône, c'est quoi ?</h3>
                <p>
                    C’est l’opportunité pour vous
                    de booster vos réseaux sociaux
                    grâce à l’achat de likes, de vues,
                    d’abonnés ou de commentaires.<span id="dots">..</span>
                </p>

                <p id="cache" style="display: none">
                    Nous proposons nos services sur
                    les réseaux les plus utilisés
                    dans le monde. <br>

                    Alors, n’attendez plus et consacrez
                    votre activité à créer du contenu ;
                    nous nous occupons du reste !
                </p>
                <button id="bouton" onclick="affiche();">Lire plus</button>
            </div>
            <div class="who">
                <h3>Icône, c'est pour qui ?</h3>
                <p>
                    Que vous soyez un professionnel ou
                    simplement un adepte des
                    réseaux, vous trouverez votre
                    bonheur sur Icône.<span id="dots2">..</span>
                </p>
                <p id="cache2" style="display: none">
                    Développez votre activité pour
                    faire de la pub ou simplement augmenter
                    votre crédibilité.<br>

                    Propulsez vos comptes personnels et/ou
                    professionnels pour devenir un incontournable à follow.
                </p>
                <button id="bouton2" onclick="affiche2();">Lire plus</button>
            </div>
            <div class="how">
                <h3>Icône, ça marche comment ?</h3>
                <p>
                    Grâce à notre intelligence artificielle en quelques jours nous
                    pouvons accroître votre  visibilité sur votre réseau.<span id="dots3">..</span>

                </p>

                <button id="bouton3" onclick="affiche3();">Lire plus</button>
            </div>
        </div>
    </section>

    <section class="counter">
        <h2>
            Les chiffres parlent d'eux-mêmes
        </h2>
        <div class="number_counter">
            <div>
                <h4>109 847</h4>
                <img src="assets/flavicon/heart.png">
                <p>Nombre de likes vendues</p>
            </div>
            <div>
                <h4>241 392</h4>
                <img src="assets/flavicon/man.png">
                <p>Nombre d'abonnés vendues</p>
            </div>
            <div>
                <h4 class="count">80 983</h4>
                <img src="assets/flavicon/comment.png">
                <p>Nombre de commentaires vendues</p>
            </div>
        </div>
    </section>

    <section class="categories">
        <h2>Les réseaux sociaux que nous proposons</h2>
        <h4>Choisissez votre réseau social et découvrez l’ensemble des packs<br>
            que nous proposons pour booster votre profil.</h4>
        <div class="line_categories1">
            <div>
                <img src="assets/flavicon/instagram.png">
                <p>Instagram</p>
            </div>
            <div>
                <img src="assets/flavicon/youtube.png">
                <p>Youtube</p>
            </div>
        </div>
        <div class="line_categories2">
            <div>
                <img src="assets/flavicon/twitter.png">
                <p>Twitter</p>
            </div>
            <div>
                <img src="assets/flavicon/facebook%20copie.png">
                <p>Facebook</p>
            </div>
        </div>
    </section>

    <section class="opinion">

        <div class="slideshow-container">
            <h2>Ils nous font confiance</h2>

            <div class="mySlides">
                <img src="assets/images/people1.png"><br>
                <q>
                    Depuis que j’ai achetés des vues ma chaîne Youtube,<br>
                    ma communauté ne cesse de grandir tout les jours.
                </q>
                <p class="author">- Emma, youtubeuse  </p>
            </div>

            <div class="mySlides">
                <img src="assets/images/people2.png"><br>
                <q> Je recommande vivement le site Icône. En quelques jours, mon<br>
                    nombre d’abonnés à tripler ! </q>
                <p class="author">- Luc, freelance  </p>
            </div>

            <div class="mySlides">
                <img src="assets/images/people3.png"><br>
                <q> Mes ventes ont explosés depuis  que les stats de mon<br>
                    compte pro’ ont largement augmentés ... </q>
                <p class="author">- Sylvie, créatrice d’une marque
                    de produit bio</p>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

<!--        <div class="dot-container">-->
<!--            <span class="dot" onclick="currentSlide(1)"></span>-->
<!--            <span class="dot" onclick="currentSlide(2)"></span>-->
<!--            <span class="dot" onclick="currentSlide(3)"></span>-->
<!--        </div>-->

    </section>
</main>



<footer>
    <?php require 'partials/footer.php'; ?>
</footer>

<script src="assets/js/slogan.js"></script>
<script src="assets/js/carouselReview.js"></script>

<script>

    function affiche() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("cache");
        var btnText = document.getElementById("bouton");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Lire plus";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Lire moins";
            moreText.style.display = "inline";
        }
    }
    function affiche2() {
        var dots = document.getElementById("dots2");
        var moreText = document.getElementById("cache2");
        var btnText = document.getElementById("bouton2");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Lire plus";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Lire moins";
            moreText.style.display = "inline";
        }
    }
    function affiche3() {
        var dots = document.getElementById("dots3");
        var moreText = document.getElementById("cache3");
        var btnText = document.getElementById("bouton3");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Lire plus";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Lire moins";
            moreText.style.display = "inline";
        }
    }

</script>

</body>
