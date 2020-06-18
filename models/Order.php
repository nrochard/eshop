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

    $newOrderId = $db->lastInsertId();

    return $newOrderId;
}

function getAllOrders(){

    $db = dbConnect();

    $query = $db->query('SELECT * FROM orders');
    $allOrders = $query->fetchAll();

    return $allOrders;
}


function getOrdersOfUser($id){
    $db = dbConnect();
    $query = $db->query('SELECT * FROM orders WHERE user_id = ' . $id);
    $selectedOrders = $query->fetchAll();


    return $selectedOrders;
}

function fillOrder($product, $orderId, $quantityProduct){
    $db = dbConnect();

    $query = $db->prepare("INSERT INTO order_details (order_id, name, price, quantity) VALUES( :order_id, :name, :price, :quantity)");
    $result = $query->execute([
        'order_id' => $orderId,
        'name' => $product['name'],
        'price' => $product['price'],
        'quantity' => $quantityProduct,
    ]);

    return $result;
}

function getDetailsOrder($orderId){
    $db = dbConnect();
    $query = $db->query('SELECT * FROM order_details WHERE order_id = ' . $orderId);
    $detailsOrder = $query->fetchAll();

//    var_dump($detailsOrder);

    return $detailsOrder;
}

function addPlan($orderId, $planId){
    $db = dbConnect();

    $query = $db->prepare("INSERT INTO order_details (order_id, plan_id) VALUES(:order_id, :plan_id)");
    $result = $query->execute([
        'order_id' => $orderId,
        'plan_id' => $planId,

    ]);

    return $result;
}