<?php

function getCategories(){

    $db = dbConnect();

    $query = $db->query('SELECT * FROM categories');
    $categories = $query->fetchAll();

    return $categories;
}

function getCategory($categoryId){
    $db = dbConnect();
    $query = $db->query('SELECT * FROM categories WHERE id = ' . $categoryId);
    $selectedCategory = $query->fetch();

    return $selectedCategory;
}


function deleteCategory($id)
{
    $db = dbConnect();

    $category = getCategory($id);
    if($category['image'] != null){
        unlink("./assets/images/categories/".$category['image']);
    }

    $query = $db->prepare('DELETE FROM categories WHERE id = ?');
    $result = $query->execute([$id]);


    return $result;
}

function updateCategory($id, $informations){

    $db = dbConnect();

    $query = $db->prepare('UPDATE categories SET name = ?, description = ? WHERE id = ?');

    $result = $query->execute(
        [
            $informations['name'],
            $informations['description'],
            $id,
        ]
    );

    if($result && !empty($_FILES['image']['tmp_name'])){

        $allowed_extensions = array( 'jpg' , 'jpeg' , 'gif', 'png');
        $my_file_extension = pathinfo( $_FILES['image']['name'] , PATHINFO_EXTENSION);
        if (in_array($my_file_extension , $allowed_extensions)){

            $category = getCategory($id);
            if($category['image'] != null){
                unlink("./assets/images/categories/".$category['image']);
            }

            $new_file_name = $id . '.' . $my_file_extension ;
            $destination = './assets/images/categories/' . $new_file_name;
            $result = move_uploaded_file( $_FILES['image']['tmp_name'], $destination);

            $db->query("UPDATE categories SET image = '$new_file_name' WHERE id = $id");
        }
    }

    return($result);

}

function addCategory($informations)
{
    $db = dbConnect();

    $query = $db->prepare("INSERT INTO categories (name, description) VALUES( :name, :description)");
    $result = $query->execute([
        'name' => $informations['name'],
        'description' => $informations['description'],
    ]);

    if($result)
    {
        $categoryId = $db->lastInsertId();

        $allowed_extensions = array( 'jpg' , 'jpeg' , 'gif', 'png' );
        $my_file_extension = pathinfo( $_FILES['image']['name'] , PATHINFO_EXTENSION);
        if (in_array($my_file_extension , $allowed_extensions)){
            $new_file_name = $categoryId . '.' . $my_file_extension ;
            $destination = './assets/images/categories/' . $new_file_name;
            $result = move_uploaded_file( $_FILES['image']['tmp_name'], $destination);

            $db->query("UPDATE categories SET image = '$new_file_name' WHERE id = $categoryId");
        }
    }

    return $result;
}

function checkCategory($id){
    $db = dbConnect();
    $query = $db->query('SELECT * FROM categories WHERE id = ' . $id);
    $selectedCategory = $query->fetch();

    return $selectedCategory;
}