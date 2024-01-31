<?php
require_once '../app/persistences/blogPostData.php';
$chosenPostId  = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
blogPostDelete($pdo, $chosenPostId);
header('Location: /');