<?php

require_once 'models/User.php';
require_once 'models/Order.php';
require_once 'models/Category.php';
require_once 'models/Product.php';

$categories = getCategories();

if ($_GET['action'] == 'list') {
//    var_dump($_SESSION['user']['id']);
    $orders = getAllOrders();
//    var_dump($orders);
    include 'views/orderList.php';
}


else if ($_GET['action'] == 'view') {
//    var_dump($_SESSION['user']['id']);
    $DetailsOrder = getDetailsOrder($_GET['id']);
//    var_dump($orders);
    include 'views/orderView.php';
}

