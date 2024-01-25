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
    PDOStatement : $statement = $pdoConnection->query("SELECT articles.title, articles.text, authors.pseudo, DATE_FORMAT(articles.pub_date, '%d %c %Y'), articles.id
                                FROM articles
                                INNER JOIN authors
                                ON articles.authors_id=authors.id
                                WHERE articles.id=$articleId");
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function commentsByBlogPost(PDO $pdoConnection, int $articleId){
    PDOStatement : $statement = $pdoConnection->query("SELECT comments.text, DATE_FORMAT(comments.date, '%d %c %Y'), authors.pseudo
                                FROM articles
                                INNER JOIN comments
                                ON articles.id=comments.articles_id
                                INNER JOIN authors
                                ON comments.author_id=authors.id
                                WHERE articles.id=$articleId");
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}