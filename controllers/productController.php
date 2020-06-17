<?php

require_once 'models/Category.php';

require_once 'models/Product.php';

$categories = getCategories();



if($_GET['action'] == 'displayProduct'){
    $categories = getCategories();
    $product = getProduct($_GET['id']);

    include 'views/product.php';
}



if($_GET['action'] == 'addProduct'){
//    unset($_SESSION['cart']);
    $product = getProduct($_GET['product_id']);
    var_dump($_POST['quantity']);
    if (empty($_POST['quantity'])){
        $_SESSION['messages'][] = 'Le champ quantité est obligatoire !';
    }
    else{
        if ($_POST['quantity'] >= 0 && $_POST['quantity'] <= 1000000){
            $_SESSION['cart'][$_GET['product_id']] = $_POST['quantity'];
            var_dump($_SESSION['cart']);
        }
        else{
            $_SESSION['messages'][] = 'La valeur quantité doit être un nombre !';
        }
    }

}

include 'views/product.php';