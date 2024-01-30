<?php
require_once '../app/persistences/blogPostData.php';
$chosenPostId  = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$selectedArticle = blogPostById($pdo, $chosenPostId);
$articleComments = commentsByBlogPost($pdo, $chosenPostId);
require_once '../resources/views/layouts/blogPost.tpl.php';