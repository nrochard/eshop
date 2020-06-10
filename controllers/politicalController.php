<?php

require_once 'models/Category.php';

$categories = getCategories();

include 'views/political.php';