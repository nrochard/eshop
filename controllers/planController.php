<?php

require_once 'models/Category.php';
require_once 'models/Plan.php';

if($_GET['action'] == 'addProduct'){
    var_dump($_SESSION['plan']);
    if (empty($_SESSION['plan'])){
        $_SESSION['plan'] = $_GET['id'];
        $_SESSION['messages'][] = 'L\'abonnement à été ajouté à votre panier !';
    }
    else{
        $_SESSION['messages'][] = 'Un abonnement est déjà dans votre panier!';
    }
    $categories = getCategories();
    $plans = getAllPlans();
    include 'views/plans.php';
}

else if($_GET['action'] == 'list'){

    $categories = getCategories();
    $plans = getAllPlans();

    include 'views/plans.php';
}

