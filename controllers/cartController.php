<?php

require_once 'models/Category.php';
require_once 'models/Plan.php';
require_once 'models/Product.php';

$categories = getCategories();

if($_GET['action'] == 'display'){
    $selectedPlan = [];
    if (!empty($_SESSION['plan'])) {
        $selectedPlan = getPlan($_SESSION['plan']);
    }
    foreach ($_SESSION['cart'] as $product_id => $quantity){
        $cartProducts[] = getProduct($product_id);
    }
    include 'views/cart.php';
}

else if($_GET['action'] == 'deletePlan'){
    $selectedPlan = [];
    $_SESSION['messages'][] = 'Votre abonnement à bien été supprimé !';
    unset($_SESSION['plan']);
    header('Location:index.php?p=cart&action=display');
    exit;
}

else if($_GET['action'] == 'deleteProduct'){
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