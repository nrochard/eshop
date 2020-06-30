<?php

function getAllUsers(){

    $db = dbConnect();

    $query = $db->query('SELECT * FROM users');
    $allUsers = $query->fetchAll();

    return $allUsers;
}


function addUser($informations)
{

    $db = dbConnect();

    $query = $db->prepare('SELECT email FROM users WHERE email = ?');
    $query->execute([
        $informations['email']
    ]);
    $emailExists = $query->fetch();

    if (!$emailExists) {
        $query = $db->prepare('INSERT INTO users (email, password, firstname, lastname, city, adress) VALUES (?, ?, ?, ?, ?, ?)');
        $result = $query->execute(
            [
                $informations['email'],
                hash('md5', $informations['password']),
                $informations['firstname'],
                $informations['lastname'],
                $informations['city'],
                $informations['adress'],
            ]
        );
        return $result;
    }
}

function connectUser($informations)
{
    $db = dbConnect();

    $query = $db->prepare('SELECT * FROM users WHERE email = :email AND password = :password');
    $query->execute([
        'password' => md5($informations['password']),
        'email' => $informations['email'],
    ]);
    $user = $query->fetch();

    return $user;
}

function updateUser($id, $informations){
    $db = dbConnect();

    $queryString = 'UPDATE users SET firstname = :firstname, lastname = :lastname, city = :city, adress = :adress,' . (!empty($informations['password'])? 'password = :password,': '') . 'email = :email WHERE id = :id';
    $queryArray = [
        'firstname' => $informations['firstname'],
        'lastname' => $informations['lastname'],
        'adress' => $informations['adress'],
        'city' => $informations['city'],
        'email' => $informations['email'],
        'id' => $id
    ];
    if(!empty($informations['password'])){
        $queryArray['password'] = hash('md5', $informations['password']);
    }
    $query = $db->prepare($queryString);
    return $query->execute($queryArray);
}

function getUser($id){
    $db = dbConnect();

    $query = $db->prepare('SELECT * FROM users WHERE id = ?');
    $query->execute([$id]);

    $result = $query->fetch();

    return $result;

}

function deleteUser($id)
{
    $db = dbConnect();

    $query = $db->prepare('DELETE FROM users WHERE id = ?');
    $result = $query->execute([$id]);

    return $result;
}
