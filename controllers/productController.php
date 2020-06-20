<?php

require_once 'models/Category.php';

require_once 'models/Product.php';

$categories = getCategories();



if($_GET['action'] == 'displayProduct'){
    $product = getProduct($_GET['id']);
    include 'views/product.php';
}



if($_GET['action'] == 'addProduct'){
    $product = getProduct($_GET['product_id']);
    if (empty($_POST['quantity'])){
        $_SESSION['messages'][] = 'Le champ quantité est obligatoire !';
        include 'views/product.php';
    }
    else{
        if ($_POST['quantity'] >= 0 && $_POST['quantity'] <= 1000000){
            $_SESSION['cart'][$_GET['product_id']] = $_POST['quantity'];
            $_SESSION['messages'][] = 'Le produit à été ajouté au panier !';
            include 'views/product.php';
        }
        else{
            $_SESSION['messages'][] = 'La valeur quantité doit être un nombre !';
            include 'views/product.php';
        }
    }

}

else{
    header('Location:index.php');
    exit;
}