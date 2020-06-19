<?php

require_once 'models/User.php';

if($_GET['action'] == 'list'){
    $users = getAllUsers();
    require('views/userList.php');
}

else if($_GET['action'] == 'delete'){
    $result = deleteUser($_GET['id']);
    if($result){
        $_SESSION['messages'][] = 'Utilisateur supprimé !';
    }
    else{
        $_SESSION['messages'][] = 'Erreur lors de la suppression. ';
    }
    header('Location:index.php?p=userAdmin&action=list');
    exit;
}

elseif($_GET['action'] == 'new'){
    require('views/userForm.php');
}

elseif($_GET['action'] == 'edit') {

    if(!empty($_POST)){
        if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['adress']) || empty($_POST['city']) || empty($_POST['email'])){
            if(empty($_POST['firstname'])){
                $_SESSION['messages'][] = 'Le champ prénom est obligatoire !';
            }
            else if(empty($_POST['lastname'])){
                $_SESSION['messages'][] = 'Le champ nom est obligatoire !';
            }
            else if(empty($_POST['adress'])){
                $_SESSION['messages'][] = 'Le champ adresse est obligatoire !';
            }
            else if(empty($_POST['city'])){
                $_SESSION['messages'][] = 'Le champ ville est obligatoire !';
            }
            else if(empty($_POST['email'])){
                $_SESSION['messages'][] = 'Le champ email est obligatoire !';
            }
            $_SESSION['old_inputs'] = $_POST;
            header('Location:index.php?p=userAdmin&action=edit&id='.$_GET['id']);
            exit;
        }
        else{
            $result = updateUser($_GET['id'], $_POST);
            $_SESSION['messages'][] = $result ? 'Utilisateur mis à jour' : 'Erreur lors de la mise à jour.';
            header('Location:index.php?p=userAdmin&action=list');
            exit;
        }
    }
    else{
        if(!isset($_SESSION['old_inputs'])){
            if(isset($_GET['id'])){
                $user = getUser($_GET['id']);
                if($user == false){
                    header('Location:index.php?p=userAdmin&action=list');
                    exit;
                }
            }
            else{
                header('Location:index.php?p=userAdmins&action=list');
                exit;
            }

        }
        require('views/userForm.php');
    }
}

elseif($_GET['action'] == 'add'){

    if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['adress']) || empty($_POST['city']) || empty($_POST['email']) || empty($_POST['password'])){
        if(empty($_POST['firstname'])){
            $_SESSION['messages'][] = 'Le champ prénom est obligatoire !';
        }
        else if(empty($_POST['lastname'])){
            $_SESSION['messages'][] = 'Le champ nom est obligatoire !';
        }
        else if(empty($_POST['adress'])){
            $_SESSION['messages'][] = 'Le champ adresse est obligatoire !';
        }
        else if(empty($_POST['city'])){
            $_SESSION['messages'][] = 'Le champ ville est obligatoire !';
        }
        else if(empty($_POST['email'])){
            $_SESSION['messages'][] = 'Le champ email est obligatoire !';
        }
        else if(empty($_POST['password'])){
            $_SESSION['messages'][] = 'Le champ mot de passe est obligatoire !';
        }
        $_SESSION['old_inputs'] = $_POST;
        header('Location:index.php?p=userAdmin&action=new');
        exit;
    }
    else{
        $resultAdd = addUser($_POST);

        $_SESSION['messages'][] = $resultAdd ? 'Utilisateur enregistré !' : "Erreur lors de l'enregistrement.";

        header('Location:index.php?p=userAdmin&action=list');
        exit;
    }
}

else{
    header('Location:index.php');
    exit;
}