<?php

//action = deleteProduct
    // ici supprime un panier du panier

//unset($_SESSION['cart'][$_GET['product_id']])




// action = addProduct

// ici ajouter un produit au panier

    //recoit 2 infos : product_id et quantity

    //s'assurer qu'on recoit bien un int pour la quantity
    //s'assurer que la valeur demandé n'est pas supérieur au stock
    //sinon rediriger vers fiche produit avec message
    // s'assurer que l'id produit existe bien

    //$_SESSION['cart'][$_GET['product_id']] = $_POST['quantity']

    //puis rediriger



// action UpdateQuantityProduct
    // ici mettre à jour la quantité d'un produit du panier



// action displayProduct
    // aller chercher en BDD tout les produits du panier


//FONCTION DU MODELE
//for each $_SESSION['cart'] as $product_id => quantity
$cartProducts[] = getProduct //SELECT FROM products WHHERE ID = $product_id

    // appeler la view pour afficher tout le pamnier