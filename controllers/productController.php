<?php

require_once 'models/Category.php';

require_once 'models/Product.php';

$categories = getCategories();

$product = getProduct($_GET['id']);

include 'views/product.php';