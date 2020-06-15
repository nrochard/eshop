<?php

//if(!isset($_GET['category_id']) || !ctype_digit($_GET['category_id'])) {
//    header('Location:index.php');
//    exit;
//}

require_once 'models/Category.php';

require_once 'models/Product.php';

$categories = getCategories();

$categorySelected = getCategory($_GET['category_id']);

$products = getAllProducts();

include 'views/category.php';