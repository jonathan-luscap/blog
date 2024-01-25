<?php
require_once '../app/persistences/blogPostData.php';
$lastArticles = lastBlogPosts($pdo, 10);
var_dump($lastArticles);