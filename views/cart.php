<!DOCTYPE html>

<html lang="fr">

<head>
    <title>Icône - Panier</title>
    <link rel="stylesheet" href="assets/css/home_page.css">
    <?php require 'partials/head_assets.php'; ?>
</head>

<body>

<header>

    <?php require 'partials/header.php'; ?>

</header>

$total = 0

for each $cartProducts $product

echo $rowtotal = $product[price] * S_SESSION['cart'][$product['id']]['quantity']
$total += $rowtotal

endforeach

<!--<a href="index.php?p=cart&action=deleteProduct&productId=$product['id]"></a>-->
echo $total

if isset $_SESSIONS[user]
<!--    <a href="index.php?p=order&action=new">Commander</a>-->
else
    redigirer verts l'inscription et la connexion
<footer>
    <?php require 'partials/footer.php'; ?>
</footer>

</body>

