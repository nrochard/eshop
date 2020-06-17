<?php

function addOrder($informations, $price)
{
    $db = dbConnect();

    $query = $db->prepare("INSERT INTO orders (user_id, firstname, lastname, billing_adress, billing_city, price) VALUES( :user_id, :firstname, :lastname, :billing_adress, :billing_city, :price)");
    $result = $query->execute([
        'user_id' => $informations['id'],
        'firstname' => $informations['firstname'],
        'lastname' => $informations['lastname'],
        'billing_adress' => $informations['adress'],
        'billing_city' => $informations['city'],
        'price' => $price,
    ]);

    return $result;
}

function getOrdersOfUser($id){
    $db = dbConnect();
    $query = $db->query('SELECT * FROM orders WHERE user_id = ' . $id);
    $selectedCategory = $query->fetchAll();

    return $selectedCategory;
}