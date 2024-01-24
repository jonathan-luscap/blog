<?php
session_start();
if (!isset($_SESSION["countViewPage"])){
    $sessionDate = new DateTime();
    $_SESSION['date'] = $sessionDate->format('Y-m-d-H-i-s');
}
require_once 'ressources/views/layouts/header.php'; ?>

<main class="container">

    <?php
    $page = filter_input(INPUT_GET, 'action',FILTER_SANITIZE_SPECIAL_CHARS);


</main>

<?php require_once 'ressources/views/layouts/footer.php' ?>
