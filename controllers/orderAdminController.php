<?php

require_once 'models/User.php';
require_once 'models/Order.php';
require_once 'models/Category.php';
require_once 'models/Product.php';

$categories = getCategories();

if ($_GET['action'] == 'list') {
    $orders = getAllOrders();
    include 'views/orderList.php';
}


else if ($_GET['action'] == 'view') {
    $infoOrder = getInfoOrder($_GET['id']);
    $DetailsOrder = getDetailsOrder($_GET['id']);
    include 'views/orderView.php';
}

else{
    header('Location:index.php');
    exit;
}