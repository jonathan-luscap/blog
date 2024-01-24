<?php

$routerArray = [
        'homeController'
];

$page = filter_input(INPUT_GET, 'action',FILTER_SANITIZE_SPECIAL_CHARS);

foreach ($routerArray as $value) {
    if ($value === $page) {
        require_once '../app/controllers/'.$page;
    } else {
        require_once '../app/controllers/homeController.php';
    }
}
?>
