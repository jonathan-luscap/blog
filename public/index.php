<?php
include_once '../config/database.php';
$routerArray = [
        '/' => 'homeController.php'
];

$action = filter_input(INPUT_GET, 'action',FILTER_SANITIZE_SPECIAL_CHARS);
$action= $action ??  '/' ;

foreach ($routerArray as $key => $value) {
    if ($key === $action) {
        require_once '../app/controllers/'.$value;
    } else {
        require_once '../resources/views/errors/404.php';


    }
}
?>
