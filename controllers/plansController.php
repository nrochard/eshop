<?php

require_once 'models/Category.php';
require_once 'models/Plan.php';

$categories = getCategories();
$plans = getAllPlans();
include 'views/plans.php';