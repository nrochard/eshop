<?php

require_once 'models/Category.php';
require_once 'models/User.php';

$categories = getCategories();

if($_GET['action'] == 'connect') {

    if (!empty($_POST)) {
        if (empty($_POST['email']) || empty($_POST['password'])) {
            if(empty($_POST['email'])){
            $_SESSION['messages'][] = 'Le champ email est obligatoire !';
            }
            if(empty($_POST['password'])){
                $_SESSION['messages'][] = 'Le champ mot de passe est obligatoire !';
            }
            $_SESSION['old_inputs'] = $_POST;
            header('Location:index.php?p=registration&action=new');
            exit;

        } else {
            $resultConnectUser = connectUser($_POST);

            if ($resultConnectUser != false) {
                $_SESSION['user'] = [
                    'firstname' => $resultConnectUser['firstname'],
                    'lastname' => $resultConnectUser['lastname'],
                    'email' => $resultConnectUser['email'],
                    'city' => $resultConnectUser['city'],
                    'adress' => $resultConnectUser['adress'],
                    'is_admin' => $resultConnectUser['is_admin'],
                    'id' => $resultConnectUser['id'],
                ];
                $_SESSION['messages'][] = 'Connexion réussie, bon shopping chez Icône';

                header('Location:index.php?p=dashboard&action=list');
                exit;
            }
            else {
                $_SESSION['messages'][] = 'Il semble que votre adresse e-mail ou votre mot de passe soient incorrects. Veuillez essayer à nouveau, s\'il vous plaît!';
                header('Location:index.php?p=login&action=formLogin');
                exit;
            }
        }
    }
}

else if($_GET['action'] == 'formLogin'){
    include 'views/login.php';
}
