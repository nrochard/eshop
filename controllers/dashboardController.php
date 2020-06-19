<?php

require_once 'models/Category.php';
require_once 'models/User.php';

$categories = getCategories();

if($_GET['action'] == 'list'){

    if(!isset($_SESSION['user']))
    {
        header('Location:index.php');
        exit;
    }
    include 'views/dashboard.php';

}

else if($_GET['action'] == 'disconnect'){
    unset($_SESSION['user']);
    header('Location:index.php');
    exit;
}

else if($_GET['action'] == 'edit'){

    if(!empty($_POST)){
        if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['city']) || empty($_POST['adress']) ){
            if(empty($_POST['firstname'])){
                $_SESSION['messages'][] = 'Le champ prénom est obligatoire !';
            }
            else if(empty($_POST['lastname'])){
                $_SESSION['messages'][] = 'Le champ nom est obligatoire !';
            }
            else if(empty($_POST['email'])){
                $_SESSION['messages'][] = 'Le champ email est obligatoire !';
            }
            else if(empty($_POST['city'])){
                $_SESSION['messages'][] = 'Le champ ville est obligatoire !';
            }
            else if(empty($_POST['password'])){
                $_SESSION['messages'][] = 'Le champ adresse est obligatoire !';
            }
            $_SESSION['old_inputs'] = $_POST;
            header('Location:index.php?p=dashboard&action=edit&id'.$_GET['id']);
            exit;
        }
        else{
            $result = updateUser($_GET['id'], $_POST);
            $_SESSION['messages'][] = $result ? 'Les informations de votre compte ont été mises à jour ' : 'Erreur lors de la mise à jour... ';
            $newInformation = getUser($_GET['id']);
            $_SESSION['user'] = [
                'firstname' => $newInformation['firstname'],
                'lastname' => $newInformation['lastname'],
                'email' => $newInformation['email'],
                'adress' => $newInformation['city'],
                'city' => $newInformation['adress'],
                'is_admin' => $newInformation['is_admin'],
                'id' => $newInformation['id'],
            ];
            header('Location:index.php?p=dashboard&action=list');
            exit;
        }
    }
    else{
        if(!isset($_SESSION['old_inputs'])){
            if(isset($_GET['id'])){
                $user = getUser($_GET['id']);
                if($user == false){
                    header('Location:index.php?p=dashboard&action=list');
                    exit;
                }
            }
            else{
                header('Location:index.php?controller=dashboard&action=list');
                exit;
            }

        }
        require('views/informations.php');
    }
}

else{
    header('Location:index.php');
    exit;
}