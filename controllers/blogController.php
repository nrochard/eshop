<?php

require_once 'models/Category.php';

$categories = getCategories();

include 'views/blog.php';