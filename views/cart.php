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

    <?php if (!empty($_SESSION['plan']) || !empty($_SESSION['cart'])) : ?>
    <div class="cart">
        <div class="list_product">
            <table>
                <thead>
                <?php if ($selectedPlan) :
                    $total = 0?>
                <tr>
                    <td><img src="assets/flavicon/instagram.png"></td>
                    <td>Abonnement <?= $selectedPlan['name']?></td>
                    <td>Quantité : 1</td>
                    <td><?= $selectedPlan['price']?>€ / <?= $selectedPlan['duration']?></td>
                    <td><button class="delete"><a href="index.php?p=cart&action=deletePlan">Supprimer</a></button></td>
                </tr>
                <?php endif;?>
                </thead>
                <thead>
                <?php if (!empty($_SESSION['cart'])) :?>
                <?php $total = 0;
                    foreach($cartProducts as $cartProduct):?>
                    <tr>
                        <td><img src="assets/images/products/<?= $cartProduct['image']?>"></td>
                        <td> <?= $cartProduct['name']?></td>
                        <td>Quantité : <?= $_SESSION['cart'][$cartProduct['id']] ?></td>
                        <td><?= $cartProduct['price']?>€
                            <?php $total += $cartProduct['price'] * $_SESSION['cart'][$cartProduct['id']]?>
                        </td>
                        <td><button class="delete"><a href="index.php?p=cart&action=deleteProduct&id=<?=$cartProduct['id']?>">Supprimer</a></button></td>
                    </tr>
                    <?php endforeach;?>
                <?php endif;?>
                </thead>

            </table>
        </div>
        <div class="recap_product">
            <h2 class="recap_name">Récapitulatif</h2>
            <hr>
            <p>Total :<span class="total"> <?= $total ?> €</span></p>
            <?php $_SESSION['total'] = $total ?>
            <button class="jump2"><a>Continuer mes achats</a></button> <br>
            <button class="jump3"><a href="index.php?p=<?= isset($_SESSION['user']['firstname']) ? 'payment&action=form' : 'login&action=formLogin' ?>">Payer mon panier</a></button>
            <div>
                <img src="assets/images/card.jpg">
            </div>

        </div>
    </div>
    <?php endif;?>

    <?php if (empty($_SESSION['plan']) && empty($_SESSION['cart'])) : ?>
    <div class="empty_cart">
        <img src="assets/flavicon/shopping-bag.svg">
        <h3>Votre panier est actuellement vide.</h3>
        <button class="jump"><a href="index.php">Commencer mes achats</a></button>
    </div>

    <?php endif;?>
</main>

<!--if isset $_SESSIONS[user]-->
<!--    <a href="index.php?p=order&action=new">Commander</a>-->
<!--else-->
<!--    redigirer verts l'inscription et la connexion-->
<footer>
    <?php require 'partials/footer.php'; ?>
</footer>

</body>

