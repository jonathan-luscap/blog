<?php
include_once '../config/database.php';
$routerArray = [
    'blogpost' => '../app/controllers/blogPostController.php',
    '/' => '../app/controllers/homeController.php',
    '404' => '../resources/views/errors/404.php',
    'createArticle' => '../app/controllers/blogPostCreateController.php',
    'updateArticle' => '../app/controllers/blogPostModifyController.php'
];

$action = filter_input(INPUT_GET, 'action',FILTER_SANITIZE_SPECIAL_CHARS);
$action = $action ??  '/' ;
$action = isset($routerArray[$action]) ? $action : '404';
$page =  $routerArray[$action];
require_once $page;