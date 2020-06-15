<?php

require_once 'models/Category.php';
require_once 'models/Article.php';
$categories = getCategories();

$articles = getAllArticles();

include 'views/blog.php';