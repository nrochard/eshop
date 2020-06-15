<?php

require_once 'models/Plan.php';

if($_GET['action'] == 'list'){
    $plans = getAllPlans();
    require('views/plansList.php');
}

else if($_GET['action'] == 'delete'){
    $result = deletePlan($_GET['id']);
    if($result){
        $_SESSION['messages'][] = 'Abonnement supprimé !';
    }
    else{
        $_SESSION['messages'][] = 'Erreur lors de la suppression. ';
    }
    header('Location:index.php?p=plansAdmin&action=list');
    exit;
}

elseif($_GET['action'] == 'new'){
    require('views/plansForm.php');
}

elseif($_GET['action'] == 'add'){

    if(empty($_POST['name']) || empty($_POST['tag']) || empty($_POST['price']) || empty($_POST['feature1']) || empty($_POST['feature2']) || empty($_POST['feature3']) || empty($_POST['duration'])){
        if(empty($_POST['name'])){
            $_SESSION['messages'][] = 'Le champ nom est obligatoire !';
        }
        else if(empty($_POST['tag'])){
            $_SESSION['messages'][] = 'Le champ tag est obligatoire !';
        }
        else if(empty($_POST['price'])){
            $_SESSION['messages'][] = 'Le champ prix est obligatoire !';
        }
        else if(empty($_POST['feature1'])){
            $_SESSION['messages'][] = 'Le champ première caractéristique est obligatoire !';
        }
        else if(empty($_POST['feature2'])){
            $_SESSION['messages'][] = 'Le champ deuxième caractéristique est obligatoire !';
        }
        else if(empty($_POST['feature3'])){
            $_SESSION['messages'][] = 'Le champ troisième caractéristique est obligatoire !';
        }
        else if(empty($_POST['duration'])){
            $_SESSION['messages'][] = 'Le champ durée est obligatoire !';
        }
        $_SESSION['old_inputs'] = $_POST;
        header('Location:index.php?p=planAdmin&action=new');
        exit;
    }

    else{
        $resultAdd = addPlan($_POST);

        $_SESSION['messages'][] = $resultAdd ? 'Abonnement enregistrée !' : "Erreur lors de l'enregistrement.";

        header('Location:index.php?p=planAdmin&action=list');
        exit;
    }
}

elseif($_GET['action'] == 'edit') {

    if(!empty($_POST)){
        if(empty($_POST['name']) || empty($_POST['tag']) || empty($_POST['price']) || empty($_POST['feature1']) || empty($_POST['feature2']) || empty($_POST['feature3']) || empty($_POST['duration'])){
            if(empty($_POST['name'])){
                $_SESSION['messages'][] = 'Le champ nom est obligatoire !';
            }
            else if(empty($_POST['tag'])){
                $_SESSION['messages'][] = 'Le champ tag est obligatoire !';
            }
            else if(empty($_POST['price'])){
                $_SESSION['messages'][] = 'Le champ prix est obligatoire !';
            }
            else if(empty($_POST['feature1'])){
                $_SESSION['messages'][] = 'Le champ première caractéristique est obligatoire !';
            }
            else if(empty($_POST['feature2'])){
                $_SESSION['messages'][] = 'Le champ deuxième caractéristique est obligatoire !';
            }
            else if(empty($_POST['feature3'])){
                $_SESSION['messages'][] = 'Le champ troisième caractéristique est obligatoire !';
            }
            else if(empty($_POST['duration'])){
                $_SESSION['messages'][] = 'Le champ durée est obligatoire !';
            }
            $_SESSION['old_inputs'] = $_POST;
            header('Location:index.php?p=planAdmin&action=edit&id='.$_GET['id']);
            exit;
        }
        else{
            $result = updatePlan($_GET['id'], $_POST);
            $_SESSION['messages'][] = $result ? 'Abonnement mis à jour' : 'Erreur lors de la mise à jour... :(';
            header('Location:index.php?p=planAdmin&action=list');
            exit;
        }
    }
    else{
        if(!isset($_SESSION['old_inputs'])){
            if(isset($_GET['id'])){
                $plan = getPlan($_GET['id']);
                if($plan == false){
                    header('Location:index.php?p=planAdmin&action=list');
                    exit;
                }
            }
            else{
                header('Location:index.php?p=planAdmins&action=list');
                exit;
            }

        }
        require('views/plansForm.php');
    }
}