<!DOCTYPE html>

<html lang="fr">

<head>
    <title>Icône - Administration</title>
    <link rel="stylesheet" href="assets/css/admin.css">
    <?php require 'partials/head_assets_admin.php'; ?>
</head>

<body>

<header>

    <?php require 'partials/header_admin.php'; ?>
</header>

<main>
    <?php if(isset($_SESSION['messages'])): ?>
        <div class="message">
            <?php foreach($_SESSION['messages'] as $message): ?>
                <?= $message ?><br>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>


    <h2 class="p-3 text-center mt-5 mb-5">Formulaire d'édition des produits</h2>



    <div class="container-fluid">

        <form action="index.php?p=productAdmin&action=<?= isset($product) || (isset($_SESSION['old_inputs']) && $_GET['action'] == 'edit') ? 'edit&id='. $_GET['id'] : 'add' ?>"  method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Nom :</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['name'] : '' ?><?= isset($product) ? $product['name'] : ''?>">
                <small id="name" class="form-text text-muted">Champs obligatoire.</small>
            </div>

            <div class="form-group">
                <label for="category_id">Catégories</label>
                <select multiple class="form-control" id="category_id" name="category_id[]">
                    <?php foreach($categories as $category): ?>
                        <?php
                        $selected = false;
                        foreach ($productCategories as $productCategory){
                            if ($category['id'] == $productCategory['id']){
                                $selected = true;
                            }
                        }
                        ?><option value="<?= $category['id']; ?>" <?php if(isset($product) && $selected): ?>selected="selected"<?php endif; ?>><?= $category['name']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="description">Description :</label>
                <input type="text" id="description" name="description" class="form-control" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['description'] : '' ?><?= isset($product) ? $product['description'] : ''?>">
            </div>

            <div class="form-group">
                <label for="quantity">Quantité disponible :</label>
                <input type="text" id="quantity" name="quantity" class="form-control" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['quantity'] : '' ?><?= isset($product) ? $product['quantity'] : ''?>">
            </div>


            <div class="form-group">
                <label for="price">Prix :</label>
                <input type="text" id="price" name="price" class="form-control" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['price'] : '' ?><?= isset($product) ? $product['price'] : ''?>">
            </div>


            <div class="form-group">
                <label for="image">Image : </label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>

            <div class="form-group">
                <label for="is_activated">Mettre le produit en vente ?</label>
                <select class="form-control" id="is_activated" name="is_activated">
                    <option value="1">Oui</option>
                    <option value="0">Non</option>
                </select>
            </div>

            <div class="text-center mt-5">
                <button type="submit" class="btn btn-dark btn-lg">Enregistrer</button>
            </div>

        </form>

    </div>

</main>

<?php require 'partials/script_bootstrap.php'; ?>

</body>