<?php

function getAllProducts(){

    $db = dbConnect();

    $query = $db->query('SELECT * FROM products');
    $products = $query->fetchAll();

    return $products;
}

function getProduct($productId){
    $db = dbConnect();
    $query = $db->query('SELECT * FROM products WHERE id = ' . $productId);
    $selectedProduct = $query->fetch();

    return $selectedProduct;
}

function addProduct($informations)
{
    $db = dbConnect();

    $query = $db->prepare("INSERT INTO products (name, price, description) VALUES( :name, :price, :description)");
    $result = $query->execute([
        'name' => $informations['name'],
        'price' => $informations['price'],
        'description' => $informations['description'],
    ]);

    if ($result) {
        $productId = $db->lastInsertId();
        if(isset($informations)){

            $queryString = "INSERT INTO product_categories (product_id, category_id) VALUES ";
            $queryValues = array();

            foreach ($informations['category_id'] as $key => $categoryId) {

                //génération dynamique de $queryString
                $queryString .= '(?, ?)';
                if ($key != array_key_last($informations['category_id'])) {
                    $queryString .= ',';
                } else {
                    $queryString .= ';';
                }

                // génération dynamique de $queryValues
                // à chaque boucle, on ajoute au tableau les valeurs correspondantes à
                $queryValues[] = $productId;
                $queryValues[] = $categoryId;
            }

            $query = $db->prepare($queryString);
            $result = $query->execute($queryValues);
        }

        if (!empty($_FILES['image']['tmp_name'])) {

            $allowed_extensions = array('jpg', 'jpeg', 'gif', 'png');
            $my_file_extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            if (in_array($my_file_extension, $allowed_extensions)) {
                $new_file_name = $productId . '.' . $my_file_extension;
                $destination = '../assets/images/artist/' . $new_file_name;
                $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

                $db->query("UPDATE artists SET image = '$new_file_name' WHERE id = $productId");
            }
        }

    }
    return $result;
}

function getProductCategories($productId){

    $db = dbConnect();

    $query = $db-> prepare("
        SELECT c.*
        FROM categories c 
        INNER JOIN product_categories pc ON c.id = pc.category_id
        WHERE pc.product_id = ?
    ");

    $query->execute([
        $productId,
    ]);

    return $query->fetchAll();

}

function updateProduct($id, $informations){

    $db = dbConnect();

    $query = $db->prepare('UPDATE products SET name = ?, price = ?, description = ? WHERE id = ?');

    $result = $query->execute(
        [
            $informations['name'],
            $informations['price'],
            $informations['description'],
            $id,
        ]
    );

    // supprimer les anciennes liaisons
    $query = $db->prepare('DELETE FROM product_categories WHERE product_id = ?');
    $result = $query->execute([
        $id,
    ]);


    if (isset($informations)) {

        $queryString = "INSERT INTO product_categories (product_id, category_id) VALUES ";
        $queryValues = array();

        foreach ($informations['category_id'] as $key => $categoryId) {

            //génération dynamique de $queryString
            $queryString .= '(?, ?)';
            if ($key != array_key_last($informations['category_id'])) {
                $queryString .= ',';
            } else {
                $queryString .= ';';
            }

            // génération dynamique de $queryValues
            // à chaque boucle, on ajoute au tableau les valeurs correspondantes à
            $queryValues[] = $id;
            $queryValues[] = $categoryId;
        }

        $query = $db->prepare($queryString);
        $result = $query->execute($queryValues);
    }

    if($result && isset($_FILES['image']['tmp_name'])){
        $articleId = $db->lastInsertId();

        $allowed_extensions = array( 'jpg' , 'jpeg' , 'gif', 'png' );
        $my_file_extension = pathinfo( $_FILES['image']['name'] , PATHINFO_EXTENSION);
        if (in_array($my_file_extension , $allowed_extensions)){
            $new_file_name = $articleId . '.' . $my_file_extension ;
            $destination = '../assets/images/article/' . $new_file_name;
            $result = move_uploaded_file( $_FILES['image']['tmp_name'], $destination);

            $db->query("UPDATE products SET image = '$new_file_name' WHERE id = $articleId");
        }
    }
    return($result);

}

function deleteProduct($id)
{
    $db = dbConnect();

    $product = getProduct($id);
    unlink('../assets/images/product/'.$product['image']);

    $query = $db->prepare('DELETE FROM products WHERE id = ?');
    $result = $query->execute([$id]);

    return $result;
}