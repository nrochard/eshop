<?php

require_once 'models/Category.php';

$categories = getCategories();

if($_GET['action'] == 'form') {
    include 'views/contact.php';
}

if($_GET['action'] == 'send') {
    if(!empty($_POST)){
        if(empty($_POST['lastname']) || empty($_POST['firstname']) || empty($_POST['email']) || empty($_POST['content'])){
            if(empty($_POST['lastname'])){
                $_SESSION['messages'][] = 'Le champ nom est obligatoire !';
            }
            else if(empty($_POST['firstname'])){
                $_SESSION['messages'][] = 'Le champ prénom est obligatoire !';
            }
            if(empty($_POST['email'])){
                $_SESSION['messages'][] = 'Le champ email est obligatoire !';
            }
            if(empty($_POST['content'])){
                $_SESSION['messages'][] = 'Le champ message est obligatoire !';
            }
            $_SESSION['old_inputs'] = $_POST;
            header('Location:index.php?p=contact&action=form');
            exit;
        }
        else{
            $_SESSION['messages'][] =  'Message envoyé';
            header('Location:index.php?p=contact&action=form');
            exit;
        }
    }
    include 'views/contact.php';
}