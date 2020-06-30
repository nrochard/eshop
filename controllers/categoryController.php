<?php

require_once 'models/Category.php';

require_once 'models/Product.php';

if(isset($_GET['category_id']) || !ctype_digit($_GET['category_id'])){
    $checkCategory = checkCategory($_GET['category_id']);
    if (!$checkCategory){
        header('Location:index.php');
        exit;
    }
}

$categories = getCategories();

$categorySelected = getCategory($_GET['category_id']);

$products = getProductsCategory($_GET['category_id']);

include 'views/category.php';