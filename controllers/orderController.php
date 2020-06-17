<?php

//action = new

if ($_GET['action'] == 'validate'){
    if(!empty($_POST)){
        if(empty($_POST['card']) || empty($_POST['name']) || empty($_POST['number']) || empty($_POST['date']) || empty($_POST['code'])){
            if(empty($_POST['card'])){
                $_SESSION['messages'][] = 'Le champ type de carte est obligatoire !';
            }
            else if(empty($_POST['name'])){
                $_SESSION['messages'][] = 'Le champ titulaire est obligatoire !';
            }
            else if(empty($_POST['number'])){
                $_SESSION['messages'][] = 'Le champ numéro de la carte est obligatoire !';
            }
            else if(empty($_POST['date'])){
                $_SESSION['messages'][] = 'Le champ validité est obligatoire !';
            }
            else if(empty($_POST['code'])){
                $_SESSION['messages'][] = 'Le champ cryptogramme est obligatoire !';
            }
            $_SESSION['old_inputs'] = $_POST;
            header('Location:index.php?p=payment&action=form');
            exit;
        }
        else{
            header('Location:index.php?p=order&action=displayOrder');
            exit;
        }
    }
//    else{
//        if(!isset($_SESSION['old_inputs'])){
//            if(isset($_GET['id'])){
//                $question = getQuestion($_GET['id']);
//                if($question == false){
//                    header('Location:index.php?p=faqAdmin&action=list');
//                    exit;
//                }
//            }
//            else{
//                header('Location:index.php?p=faqAdmin&action=list');
//                exit;
//            }
//
//        }
//        require('views/faqForm.php');
//    }
}


if ($_GET['action'] == 'displayOrder') {
    include 'views/order.php';
}
//verifier si l'utilosateur est connecte
// if isset $_SESSISON['user']
//sinon redigirier vers les formulaires
//ici ajouter une commande

// ici recuperer les produits et quantites vec $_SESSIONS['cart']
//on creer la commande
// on confirme le tout avec un petit messge de cofimration

//action = list

//ici visualiser la commande