<?php

require_once 'models/Product.php';
require_once 'models/Category.php';

if($_GET['action'] == 'list'){
    $products = getAllProducts();
    require('views/productsList.php');
}

elseif($_GET['action'] == 'new'){
    $categories = getCategories();
    require('views/productForm.php');
}

elseif($_GET['action'] == 'add'){

    if(empty($_POST['name']) || empty($_POST['price']) || empty($_POST['description']) || empty($_POST['quantity']) || empty($_POST['category_id']) || empty($_FILES['image'])){
        if(empty($_POST['name'])){
            $_SESSION['messages'][] = 'Le champ nom est obligatoire !';
        }
        else if(empty($_POST['price'])){
            $_SESSION['messages'][] = 'Le champ prix est obligatoire !';
        }

        else if(empty($_POST['description'])){
            $_SESSION['messages'][] = 'Le champ description est obligatoire !';
        }

        else if(empty($_POST['quantity'])){
            $_SESSION['messages'][] = 'Le champ quantité est obligatoire !';
        }
        else if(empty($_POST['category_id'])){
            $_SESSION['messages'][] = 'Le champ catégorie est obligatoire !';
        }
        else if(empty($_FILES['image'])){
            $_SESSION['messages'][] = 'Le champ image est obligatoire !';
        }

        $_SESSION['old_inputs'] = $_POST;
        header('Location:index.php?p=productAdmin&action=new');
        exit;
    }
    else{
        $resultAdd = addProduct($_POST);

        $_SESSION['messages'][] = $resultAdd ? 'Produit enregistré !' : "Erreur lors de l'enregistrement du produit...";

        header('Location:index.php?p=productAdmin&action=list');
        exit;
    }
}

elseif($_GET['action'] == 'edit') {

    if(!empty($_POST)){
        if(empty($_POST['name']) || empty($_POST['price']) || empty($_POST['description']) || empty($_POST['quantity']) || empty($_POST['category_id']) || empty($_FILES['image'])){
            if(empty($_POST['name'])){
                $_SESSION['messages'][] = 'Le champ nom est obligatoire !';
            }
            else if(empty($_POST['price'])){
                $_SESSION['messages'][] = 'Le champ prix est obligatoire !';
            }

            else if(empty($_POST['description'])){
                $_SESSION['messages'][] = 'Le champ description est obligatoire !';
            }

            else if(empty($_POST['quantity'])){
                $_SESSION['messages'][] = 'Le champ quantité est obligatoire !';
            }
            else if(empty($_POST['category_id'])){
                $_SESSION['messages'][] = 'Le champ catégorie est obligatoire !';
            }
            else if(empty($_FILES['image'])){
                $_SESSION['messages'][] = 'Le champ image est obligatoire !';
            }

            $_SESSION['old_inputs'] = $_POST;
            header('Location:index.php?p=productAdmin&action=edit&id='.$_GET['id']);
            exit;
        }
        else{
            $result = updateProduct($_GET['id'], $_POST);
            $_SESSION['messages'][] = $result ? 'Produit mis à jour' : 'Erreur lors de la mise à jour... :(';
            header('Location:index.php?p=productAdmin&action=list');
            exit;
        }
    }
    else{
        if(!isset($_SESSION['old_inputs'])){
            if(isset($_GET['id'])){
                $product = getProduct($_GET['id']);
                $productCategories = getProductCategories($_GET['id']);
                if($product == false){
                    header('Location:index.php?p=productAdmin&action=list');
                    exit;
                }
            }
            else{
                header('Location:index.php?p=productAdmin&action=list');
                exit;
            }

        }
        $categories = getCategories();
        require('views/productForm.php');
    }
}

else if($_GET['action'] == 'delete'){
    $result = deleteProduct($_GET['id']);
    if($result){
        $_SESSION['messages'][] = 'Produit supprimé !';
    }
    else{
        $_SESSION['messages'][] = 'Erreur lors de la suppression. ';
    }
    header('Location:index.php?p=productAdmin&action=list');
    exit;
}

else{
    header('Location:index.php');
    exit;
}
