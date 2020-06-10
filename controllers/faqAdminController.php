<?php

require_once 'models/Faq.php';

if($_GET['action'] == 'list'){
    $questions = getAllQuestions();
    require('views/faqList.php');
}

elseif($_GET['action'] == 'edit') {

    if(!empty($_POST)){
        if(empty($_POST['question']) || empty($_POST['answer'])){
            if(empty($_POST['question'])){
                $_SESSION['messages'][] = 'Le champ question est obligatoire !';
            }
            else if(empty($_POST['answer'])){
                $_SESSION['messages'][] = 'Le champ réponse est obligatoire !';
            }
            $_SESSION['old_inputs'] = $_POST;
            header('Location:index.php?p=faqAdmin&action=edit&id='.$_GET['id']);
            exit;
        }
        else{
            $result = updateQuestion($_GET['id'], $_POST);
            $_SESSION['messages'][] = $result ? 'Artiste mis à jour' : 'Erreur lors de la mise à jour... :(';
            header('Location:index.php?p=faqAdmin&action=list');
            // On peut decider de rediriger vers action=edit&id=.$_GET[$id]'
            exit;
        }
    }
    else{
        if(!isset($_SESSION['old_inputs'])){
            if(isset($_GET['id'])){
                $question = getQuestion($_GET['id']);
                if($question == false){
                    header('Location:index.php?p=faqAdmin&action=list');
                    exit;
                }
            }
            else{
                header('Location:index.php?p=faqAdmin&action=list');
                exit;
            }

        }
        require('views/faqForm.php');
    }
}

else if($_GET['action'] == 'delete'){
    $result = deleteQuestion($_GET['id']);
    if($result){
        $_SESSION['messages'][] = 'Question supprimée !';
    }
    else{
        $_SESSION['messages'][] = 'Erreur lors de la suppression. ';
    }
    header('Location:index.php?p=faqAdmin&action=list');
    exit;
}

elseif($_GET['action'] == 'new'){
    require('views/faqForm.php');
}

elseif($_GET['action'] == 'add'){

    if(empty($_POST['question']) || empty($_POST['answer'])){
        if(empty($_POST['question'])){
            $_SESSION['messages'][] = 'Le champ question est obligatoire !';
        }
        else if(empty($_POST['answer'])){
            $_SESSION['messages'][] = 'Le champ réponse est obligatoire !';
        }
        $_SESSION['old_inputs'] = $_POST;
        header('Location:index.php?p=faqAdmin&action=new');
        exit;
    }

    else{
        $resultAdd = addQuestion($_POST);

        $_SESSION['messages'][] = $resultAdd ? 'Question enregistrée !' : "Erreur lors de l'enregistrement.";

        header('Location:index.php?p=faqAdmin&action=list');
        exit;
    }
}