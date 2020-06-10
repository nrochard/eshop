<?php

function getAllArticles(){

    $db = dbConnect();

    $query = $db->query('SELECT * FROM articles');
    $allArticles = $query->fetchAll();

    return $allArticles;
}

function getArticle($articleId){
    $db = dbConnect();
    $query = $db->query('SELECT * FROM articles WHERE id = ' . $articleId);
    $selectedCategory = $query->fetch();

    return $selectedCategory;
}

function deleteArticle($id)
{
    $db = dbConnect();

    $query = $db->prepare('DELETE FROM articles WHERE id = ?');
    $result = $query->execute([$id]);

    return $result;
}

function updateArticle($id, $informations){

    $db = dbConnect();

    $query = $db->prepare('UPDATE articles SET title = ?, created_at = ?, summary = ?, content = ?, is_published = ? WHERE id = ?');

    $result = $query->execute(
        [
            $informations['title'],
            $informations['created_at'],
            $informations['summary'],
            $informations['content'],
            $informations['is_published'],
            $id,
        ]
    );

    if($result){
        $articleId = $db->lastInsertId();

        $allowed_extensions = array( 'jpg' , 'jpeg' , 'gif', 'png' );
        $my_file_extension = pathinfo( $_FILES['image']['name'] , PATHINFO_EXTENSION);
        if (in_array($my_file_extension , $allowed_extensions)){
            $new_file_name = $articleId . '.' . $my_file_extension ;
            $destination = '../assets/images/blog/' . $new_file_name;
            $result = move_uploaded_file( $_FILES['image']['tmp_name'], $destination);

            $db->query("UPDATE artists SET image = '$new_file_name' WHERE id = $articleId");
        }
    }

    return($result);

}

function addArticle($informations)
{
    $db = dbConnect();

    $query = $db->prepare("INSERT INTO articles (title, created_at, summary, content, is_published) VALUES(:title, :created_at, :summary, :content, :is_published)");
    $result = $query->execute([
        'title' => $informations['title'],
        'created_at' => $informations['created_at'],
        'summary' => $informations['summary'],
        'content' => $informations['content'],
        'is_published' => $informations['is_published'],
    ]);

    if($result)
    {
        $articleId = $db->lastInsertId();

        $allowed_extensions = array( 'jpg' , 'jpeg' , 'gif', 'png' );
        $my_file_extension = pathinfo( $_FILES['image']['name'] , PATHINFO_EXTENSION);
        if (in_array($my_file_extension , $allowed_extensions)){
            $new_file_name = $articleId . '.' . $my_file_extension ;
            $destination = '../assets/images/blog/' . $new_file_name;
            $result = move_uploaded_file( $_FILES['image']['tmp_name'], $destination);

            $db->query("UPDATE articles SET image = '$new_file_name' WHERE id = $articleId");
        }
    }

    return $result;
}