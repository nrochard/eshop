<?php

require_once 'models/User.php';
require_once 'models/Order.php';
require_once 'models/Category.php';
require_once 'models/Product.php';

$categories = getCategories();

if ($_GET['action'] == 'validate'){
    if(!empty($_POST)){
        if(empty($_POST['card']) || empty($_POST['name']) || empty($_POST['number']) || empty($_POST['date']) || empty($_POST['code'])){
            if(empty($_POST['card'])){
                $_SESSION['messages'][] = 'Le champ type de carte est obligatoire !';
            }
            else if(empty($_POST['name'])){
                $_SESSION['messages'][] = 'Le champ titulaire est obligatoire !';
            }
            else if(empty($_POST['number'])){
                $_SESSION['messages'][] = 'Le champ numéro de la carte est obligatoire !';
            }
            else if(empty($_POST['date'])){
                $_SESSION['messages'][] = 'Le champ validité est obligatoire !';
            }
            else if(empty($_POST['code'])){
                $_SESSION['messages'][] = 'Le champ cryptogramme est obligatoire !';
            }
            $_SESSION['old_inputs'] = $_POST;
            header('Location:index.php?p=payment&action=form');
            exit;
        }
        else{
            header('Location:index.php?p=order&action=new');
            exit;
        }
    }
}

else if ($_GET['action'] == 'new') {
    $userInformations = getUser($_SESSION['user']['id']);
    $newOrderId = addOrder($userInformations, $_SESSION['total']);
    foreach ($_SESSION['cart'] as $product_id => $quantity){
        $product = getProduct($product_id);
        $order = fillOrder($product, $newOrderId, $_SESSION['cart'][$product_id]);
    }
    $detailsOrder = getDetailsOrder($newOrderId);
    include 'views/order.php';
}

else if ($_GET['action'] == 'list') {
    $orders = getOrdersOfUser($_SESSION['user']['id']);
    include 'views/orderUser.php';
}


else if ($_GET['action'] == 'view') {
    $detailsOrder = getDetailsOrder($_GET['orderId']);
    $infoOrder = getInfoOrder($_GET['orderId']);
    include 'views/orderDetailsUser.php';
}

else{
    header('Location:index.php');
    exit;
}