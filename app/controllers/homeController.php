<?php
require_once '../app/persistences/blogPostData.php';
$lastArticles = lastBlogPosts($pdo, 9);
//$lastArticles=null;
require_once '../resources/views/home.tpl.php';
//var_dump($lastArticles);