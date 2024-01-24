<?php
include '../doc/variables.php';
$pdo = new PDO('mysql:host=blog.local;dbname=blog', $user, $pass);
$statement = $pdo->query("SELECT * FROM articles");
$row = $statement->fetch(PDO::FETCH_ASSOC);
echo htmlentities($row['title']);
