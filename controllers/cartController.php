<?php

require_once 'models/Category.php';
require_once 'models/Plan.php';
require_once 'models/Product.php';

$categories = getCategories();

if($_GET['action'] == 'display'){
//    var_dump($_SESSION['plan']);
//    var_dump($_SESSION['cart']);
    $selectedPlan = [];
    if (!empty($_SESSION['plan'])) {
        $selectedPlan = getPlan($_SESSION['plan']);
    }
    foreach ($_SESSION['cart'] as $product_id => $quantity){
//        var_dump($_SESSION['cart'][$product_id]);
        $cartProducts[] = getProduct($product_id);
    }
//    var_dump($cartProducts);
    include 'views/cart.php';
}

else if($_GET['action'] == 'deletePlan'){
//    var_dump($_SESSION['plan']);

    $selectedPlan = [];
    $_SESSION['messages'][] = 'Votre abonnement à bien été supprimé !';
    unset($_SESSION['plan']);

    header('Location:index.php?p=cart&action=display');
    exit;
}

else if($_GET['action'] == 'deleteProduct'){
    var_dump($_SESSION['cart']);
    unset($_SESSION['cart'][$_GET['id']]);
    $selectedPlan = [];
    $_SESSION['messages'][] = 'Votre produit à bien été supprimé !';

    header('Location:index.php?p=cart&action=display');
    exit;
}

else{
    header('Location:index.php');
    exit;
}