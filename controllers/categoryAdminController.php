<?php

require_once 'models/Category.php';

if($_GET['action'] == 'list'){
    $categories = getCategories();
    require('views/categoryList.php');
}

else if($_GET['action'] == 'delete'){
    $result = deleteCategory($_GET['id']);
    if($result){
        $_SESSION['messages'][] = 'Catégorie supprimée !';
    }
    else{
        $_SESSION['messages'][] = 'Erreur lors de la suppression. ';
    }
    header('Location:index.php?p=categoryAdmin&action=list');
    exit;
}

elseif($_GET['action'] == 'edit') {

    if(!empty($_POST)){
        if(empty($_POST['name'])){
            if(empty($_POST['name'])){
                $_SESSION['messages'][] = 'Le champ nom est obligatoire !';
            }
            $_SESSION['old_inputs'] = $_POST;
            header('Location:index.php?p=categoryAdmin&action=edit&id='.$_GET['id']);
            exit;
        }
        else{
            $result = updateCategory($_GET['id'], $_POST);
            $_SESSION['messages'][] = $result ? 'Artiste mis à jour' : 'Erreur lors de la mise à jour... :(';
            header('Location:index.php?p=categoryAdmin&action=list');
            // On peut decider de rediriger vers action=edit&id=.$_GET[$id]'
            exit;
        }
    }
    else{
        if(!isset($_SESSION['old_inputs'])){
            if(isset($_GET['id'])){
                $category = getCategory($_GET['id']);
                if($category == false){
                    header('Location:index.php?controller=artists&action=list');
                    exit;
                }
            }
            else{
                header('Location:index.php?controller=artists&action=list');
                exit;
            }

        }
        require('views/categoryForm.php');
    }
}

elseif($_GET['action'] == 'new'){
    require('views/categoryForm.php');
}

elseif($_GET['action'] == 'add'){

    if(empty($_POST['name'])){
        if(empty($_POST['name'])){
            $_SESSION['messages'][] = 'Le champ nom est obligatoire !';
        }
        $_SESSION['old_inputs'] = $_POST;
        header('Location:index.php?p=categoryAdmin&action=new');
        exit;
    }
    else{
        $resultAdd = addCategory($_POST);

        $_SESSION['messages'][] = $resultAdd ? 'Catégorie enregistrée !' : "Erreur lors de l'enregistrement.";

        header('Location:index.php?p=categoryAdmin&action=list');
        exit;
    }
}