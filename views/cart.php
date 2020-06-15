<!DOCTYPE html>

<html lang="fr">

<head>
    <title>Icône - Panier</title>
    <link rel="stylesheet" href="assets/css/cart.css">
    <?php require 'partials/head_assets.php'; ?>
</head>

<body>

<header>

    <?php require 'partials/header.php'; ?>
    <hr>
</header>

<main>

    <h1 class="title">VOTRE PANIER </h1>

    <div class="cart">
        <div class="list_product">
            <table>
                <thead>
                <tr>
                    <td>Groupe</td>
                    <td>Année de formation</td>
                    <td>Nombre d'albums</td>
                    <td>Morceau le plus célèbre</td>
                </tr>
                </thead>
            </table>
        </div>
        <div class="recap_product">
            <h2 class="recap_name">Récapitulatif</h2>
            <hr>
            <p>Prix HT : </p>
            <p>Prix TVA : </p>
            <p>Total : </p>
            <button><a>Continuer mes achats</a></button> <br>
            <button><a>Payer mon panier</a></button>
        </div>
    </div>
</main>

<!--$total = 0-->
<!---->
<!--for each $cartProducts $product-->
<!---->
<!--echo $rowtotal = $product[price] * S_SESSION['cart'][$product['id']]['quantity']-->
<!--$total += $rowtotal-->
<!---->
<!--endforeach-->

<!--<a href="index.php?p=cart&action=deleteProduct&productId=$product['id]"></a>-->
<!--echo $total-->

<!--if isset $_SESSIONS[user]-->
<!--    <a href="index.php?p=order&action=new">Commander</a>-->
<!--else-->
<!--    redigirer verts l'inscription et la connexion-->
<footer>
    <?php require 'partials/footer.php'; ?>
</footer>

</body>

