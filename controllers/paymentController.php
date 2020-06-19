<?php

require_once 'models/Category.php';

$categories = getCategories();

if($_GET['action'] == 'form'){
    require('views/payment.php');
}

else{
    header('Location:index.php');
    exit;
}