<?php

include '../doc/variables.php';
function lastBlogPosts(PDO $pdoConnection, int $nbArticles){
    PDOStatement : $statement = $pdoConnection->query("SELECT articles.title, articles.text, authors.pseudo, articles.pub_date
                                FROM articles
                                INNER JOIN authors
                                ON articles.authors_id=authors.id
                                ORDER BY pub_date DESC
                                LIMIT $nbArticles;");
    $row = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $row;
}