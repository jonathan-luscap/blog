<?php

include '../doc/variables.php';
function lastBlogPosts(PDO $pdoConnection, int $nbArticles){
    PDOStatement : $statement = $pdoConnection->query("SELECT articles.title, articles.text, authors.pseudo, DATE_FORMAT(articles.pub_date, '%d %c %Y'), articles.id
                                FROM articles
                                INNER JOIN authors
                                ON articles.authors_id=authors.id
                                ORDER BY pub_date DESC
                                LIMIT $nbArticles;");
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function blogPostById(PDO $pdoConnection, int $articleId){
    PDOStatement : $statement = $pdoConnection->query("SELECT articles.title, articles.text, authors.pseudo, DATE_FORMAT(articles.pub_date, '%d %c %Y') as date, articles.id
                                FROM articles
                                INNER JOIN authors
                                ON articles.authors_id=authors.id
                                WHERE articles.id=$articleId");
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function commentsByBlogPost(PDO $pdoConnection, int $articleId){
    PDOStatement : $statement = $pdoConnection->query("SELECT c.text, DATE_FORMAT(c.date, '%d %c %Y') as date, au.pseudo
                                FROM articles a
                                INNER JOIN comments c
                                ON a.id=c.articles_id
                                INNER JOIN authors au
                                ON c.authors_id=au.id
                                WHERE au.id=$articleId");
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}