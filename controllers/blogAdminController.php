<?php

require_once 'models/Article.php';

if($_GET['action'] == 'list'){
    $articles = getAllArticles();
    require('views/articlesList.php');
}

else if($_GET['action'] == 'delete'){
    $result = deleteArticle($_GET['id']);
    if($result){
        $_SESSION['messages'][] = 'Article supprimé !';
    }
    else{
        $_SESSION['messages'][] = 'Erreur lors de la suppression. ';
    }
    header('Location:index.php?p=blogAdmin&action=list');
    exit;
}

elseif($_GET['action'] == 'edit') {

    if(!empty($_POST)){
        if(empty($_POST['title']) || empty($_POST['created_at']) || empty($_POST['summary']) || empty($_POST['content']) || empty($_POST['image']) ){
            if(empty($_POST['title'])){
                $_SESSION['messages'][] = 'Le champ titre est obligatoire !';
            }
            else if(empty($_POST['created_at'])){
                $_SESSION['messages'][] = 'Le champ date est obligatoire !';
            }
            else if(empty($_POST['summary'])){
                $_SESSION['messages'][] = 'Le champ résumé est obligatoire !';
            }
            else if(empty($_POST['content'])){
                $_SESSION['messages'][] = 'Le champ contenu est obligatoire !';
            }
            else if(empty($_POST['image'])){
                $_SESSION['messages'][] = 'Le champ image est obligatoire !';
            }
            $_SESSION['old_inputs'] = $_POST;
            header('Location:index.php?p=blogAdmin&action=edit&id='.$_GET['id']);
            exit;
        }
        else{
            $result = updateArticle($_GET['id'], $_POST);
            $_SESSION['messages'][] = $result ? 'Article mis à jour' : 'Erreur lors de la mise à jour... :(';
            header('Location:index.php?p=blogAdmin&action=list');
            exit;
        }
    }
    else{
        if(!isset($_SESSION['old_inputs'])){
            if(isset($_GET['id'])){
                $article = getArticle($_GET['id']);
                if($article == false){
                    header('Location:index.php?p=blogAdmin&action=list');
                    exit;
                }
            }
            else{
                header('Location:index.php?p=blogAdmins&action=list');
                exit;
            }

        }
        require('views/articleForm.php');
    }
}

elseif($_GET['action'] == 'new'){
    require('views/articleForm.php');
}

elseif($_GET['action'] == 'add'){

    if(empty($_POST['title']) || empty($_POST['created_at']) || empty($_POST['summary']) || empty($_POST['content']) ){
        if(empty($_POST['title'])){
            $_SESSION['messages'][] = 'Le champ titre est obligatoire !';
        }
        else if(empty($_POST['created_at'])){
            $_SESSION['messages'][] = 'Le champ date est obligatoire !';
        }
        else if(empty($_POST['summary'])){
            $_SESSION['messages'][] = 'Le champ résumé est obligatoire !';
        }
        else if(empty($_POST['content'])){
            $_SESSION['messages'][] = 'Le champ contenu est obligatoire !';
        }
//        else if(empty($_POST['image'])){
//            $_SESSION['messages'][] = 'Le champ image est obligatoire !';
//        }
        $_SESSION['old_inputs'] = $_POST;
        header('Location:index.php?p=blogAdmin&action=new');
        exit;
    }
    else{
        $resultAdd = addArticle($_POST);

        $_SESSION['messages'][] = $resultAdd ? 'Article enregistrée !' : "Erreur lors de l'enregistrement.";

        header('Location:index.php?p=blogAdmin&action=list');
        exit;
    }
}