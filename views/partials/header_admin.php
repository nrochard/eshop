<nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand title" href="index.php?p=admin">ADMINISTRATION</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Boutique
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="index.php?p=productAdmin&action=list">Produits</a>
                    <a class="dropdown-item" href="index.php?p=categoryAdmin&action=list">Catégories</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?p=orderAdmin&action=list">Commandes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?p=userAdmin&action=list">Utilisateurs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?p=planAdmin&action=list">Abonnements</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="index.php?p=blogAdmin&action=list">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?p=faqAdmin&action=list">FAQ</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <button class="btn btn-warning  btn-lg my-2 my-sm-0" type="submit">Retour au site</button>
        </form>
    </div>
</nav>