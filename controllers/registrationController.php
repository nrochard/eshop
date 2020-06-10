<?php

require_once 'models/Category.php';
require_once 'models/User.php';

$categories = getCategories();

if($_GET['action'] == 'add') {
    if (!empty($_POST)) {
        if (empty($_POST['email']) || empty($_POST['password']) || empty($_POST['firstname']) ||
            empty($_POST['lastname']) || empty($_POST['city']) || empty($_POST['adress']) || empty($_POST['conditions'])) {
            if(empty($_POST['firstname'])){
                $_SESSION['messages'][] = 'Le champ nom est obligatoire !';
            }
            else if(empty($_POST['lastname'])){
                $_SESSION['messages'][] = 'Le champ prénom est obligatoire !';
            }
            else if(empty($_POST['email'])){
                $_SESSION['messages'][] = 'Le champ email est obligatoire !';
            }
            else if(empty($_POST['password'])){
                $_SESSION['messages'][] = 'Le champ mot de passe est obligatoire !';
            }
            else if(empty($_POST['city'])){
                $_SESSION['messages'][] = 'Le champ ville est obligatoire !';
            }
            else if(empty($_POST['password'])){
                $_SESSION['messages'][] = 'Le champ adresse est obligatoire !';
            }
            else if(empty($_POST['conditions'])){
                $_SESSION['messages'][] = 'Accepter nos CGV et notre politique de confidentalité est obligatoire  !';
            }

            $_SESSION['old_inputs'] = $_POST;
            header('Location:index.php?p=registration&action=new');
            exit;
        }
        else {
            $resultAddUser = addUser($_POST);

            if (!$resultAddUser){
                $_SESSION['messages'][] = 'Email déjà utilisé';
                header('Location:index.php?p=registration&action=new');
                exit;
            }
            else{
                $_SESSION['messages'][] = 'Vous êtes bien inscrit, merci de vous connecter';
                header('Location:index.php?p=login&action=formLogin');
                exit;
            }
        }
    }
}

else if ($_GET['action'] == 'new'){
    include 'views/registration.php';
}
