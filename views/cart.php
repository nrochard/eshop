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

    <h1 class="title">VOTRE PANIER </h1>

    <?php if (!empty($_SESSION['cart'])) : ?>
    <div class="cart">
        <div class="list_product">
            <table>
                <thead>
                <?php if ($selectedPlan) :?>
                <tr>
                    <td><img src="assets/flavicon/instagram.png"></td>
                    <td>Abonnement <?= $selectedPlan['name']?></td>
                    <td>Quantité : 1</td>
                    <td><?= $selectedPlan['price']?>€ / <?= $selectedPlan['duration']?></td>
                    <td><button><a href="index.php?p=cart&action=deletePlan">Supprimer</a></button></td>
                </tr>
                <?php endif;?>
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
    <?php endif;?>

    <?php if (!isset($_SESSION['cart']['plan'])) : ?>
    <div class="empty_cart">
        <img src="assets/flavicon/shopping-bag.svg">
        <h3>Votre panier est actuellement vide.</h3>
        <button class="jump"><a href="index.php">Commencer mes achats</a></button>
    </div>

    <?php endif;?>
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

