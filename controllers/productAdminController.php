<?php

require_once 'models/Product.php';

if($_GET['action'] == 'list'){
    $products = getAllProducts();
    require('views/productsList.php');
}