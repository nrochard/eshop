<?php

require_once 'models/Category.php';
require_once 'models/Faq.php';

$categories = getCategories();
$questions = getAllQuestions();


include 'views/faq.php';