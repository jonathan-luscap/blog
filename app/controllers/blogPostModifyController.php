<?php
require_once '../app/persistences/blogPostData.php';
$selectedArticle = blogPostById($pdo, $chosenPostId);
$selectedArticleAuthor = authorsByBlogPost($pdo, $chosenPostId);
require_once '../resources/views/layouts/blogPostUpdate.tpl.php';
