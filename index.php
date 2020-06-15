<?php

session_start();

if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}

require('helpers.php');

if(isset($_GET['p'])):
    switch ($_GET['p']):
        case 'product' :
            require 'controllers/productController.php';
            break;
        case 'category' :
            require 'controllers/categoryController.php';
            break;
        case 'userAdmin' :
            require 'controllers/userAdminController.php';
            break;
        case 'categoryAdmin' :
            require 'controllers/categoryAdminController.php';
            break;
        case 'login' :
            require 'controllers/loginController.php';
            break;
        case 'registration' :
            require 'controllers/registrationController.php';
            break;
        case 'dashboard' :
            require 'controllers/dashboardController.php';
            break;
        case 'mentions' :
            require 'controllers/mentionsController.php';
            break;
        case 'cgv' :
            require 'controllers/cgvController.php';
            break;
        case 'political' :
            require 'controllers/politicalController.php';
            break;
        case 'plans' :
            require 'controllers/planController.php';
            break;
        case 'planAdmin' :
            require 'controllers/planAdminController.php';
            break;
        case 'blog' :
            require 'controllers/blogController.php';
            break;
        case 'blogAdmin' :
            require 'controllers/blogAdminController.php';
            break;
        case 'faq' :
            require 'controllers/faqController.php';
            break;
        case 'faqAdmin' :
            require 'controllers/faqAdminController.php';
            break;
        case 'admin' :
            require 'controllers/adminController.php';
            break;
        case 'productAdmin' :
            require 'controllers/productAdminController.php';
            break;
        case 'cart' :
            require 'controllers/cartController.php';
            break;
        default :
            require 'controllers/indexController.php';
    endswitch;
else:
    require 'controllers/indexController.php';
endif;

if(isset($_SESSION['messages'])){
    unset($_SESSION['messages']);
}
if(isset($_SESSION['old_inputs'])){
    unset($_SESSION['old_inputs']);
}