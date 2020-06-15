<div class="main_header">
    <div class="research">
        <img src="assets/flavicon/picto-search.svg">
        <input type="search" placeholder="Rechercher">
    </div>

    <div class="logo">
        <a href="index.php"><img src="assets/images/logo.png"></a>
    </div>

    <div class="icone">

        <?php if(!empty($_SESSION['user']['firstname'])) :?>
        <a href="index.php?p=dashboard&action=disconnect">
            <img src="assets/flavicon/arrow.svg">
        </a>
            <?php endif?>

        <a href="<?= isset($_SESSION['user']['firstname']) ? 'index.php?p=dashboard&action=list' : 'index.php?p=login&action=formLogin' ?>">
            <img src="<?= isset($_SESSION['user']['firstname']) ? 'assets/flavicon/picto-connect.svg' : 'assets/flavicon/picto-disconnect.svg' ?>"
        </a>

            <a href="index.php?p=cart&action=display"><img src="assets/flavicon/picto-basket.svg"></a>



    </div>
</div>

<hr>

<nav>
    <ul>
        <li class="under_menu"><a href="#">Réseaux sociaux &ensp;</a>
            <ul class="hover_menu">
                <?php foreach($categories as $category) : ?>
                <li><a href="index.php?p=category&category_id=<?= $category['id'] ?>"><?= $category['name'] ?></a></li>
                <?php endforeach; ?>

            </ul>
        </li>
        <li><a href="index.php?p=plans&action=list">Abonnements</a></li>
        <li><a href="index.php?p=blog">Nos conseils</a></li>
        <li><a href="index.php?p=faq">Vos questions</a></li>
    </ul>
</nav>


