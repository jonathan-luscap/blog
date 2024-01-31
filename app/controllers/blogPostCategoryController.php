<?php
require_once '../app/persistences/blogPostData.php';
$category = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$articlesByCategory = blogPostsByCategory($pdo, $category);
require_once '../resources/views/category.tpl.php';