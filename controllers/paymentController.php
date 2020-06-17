<?php


require_once 'models/Category.php';

if($_GET['action'] == 'form'){
    require('views/payment.php');
}