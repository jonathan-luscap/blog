<?php

include '../doc/variables.php';
function lastBlogPosts(PDO $pdoConnection, int $nbArticles){
    $statement = $pdoConnection->query("SELECT articles.title, articles.text, authors.pseudo, DATE_FORMAT(articles.pub_date, '%d %c %Y') AS date, articles.id
                                FROM articles
                                INNER JOIN authors
                                ON articles.authors_id=authors.id
                                ORDER BY pub_date DESC
                                LIMIT $nbArticles;");
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function blogPostById(PDO $pdoConnection, int $articleId){
    $statement = $pdoConnection->query("SELECT articles.title, articles.text, authors.pseudo, DATE_FORMAT(articles.pub_date, '%d %c %Y') AS date, articles.id, articles.weight
                                FROM articles
                                INNER JOIN authors
                                ON articles.authors_id=authors.id
                                WHERE articles.id=$articleId");
    return $statement->fetch(PDO::FETCH_ASSOC);
}

function commentsByBlogPost(PDO $pdoConnection, int $articleId){
    $statement = $pdoConnection->query("SELECT c.text, DATE_FORMAT(c.date, '%d %c %Y') AS date, au.pseudo
                                FROM articles a
                                INNER JOIN comments c
                                ON a.id=c.articles_id
                                INNER JOIN authors au
                                ON c.authors_id=au.id
                                WHERE a.id=$articleId");
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function blogPostCreate(PDO $pdoConnection, String $title, int $weight, String $text, int $author_id){
    $pdoConnection->query("INSERT INTO articles (title, weight, pub_date, text, authors_id)
                                VALUES ('$title', $weight, CURDATE(), '$text', $author_id)");
}

function blogPostUpdate(PDO $pdoConnection, int $id, String $title, int $weight, String $text){
    $request = $pdoConnection->prepare("UPDATE articles
                                SET title = ?, weight = ?, text = ? WHERE id = ?");
    $request->execute([
        $title, $weight, $text, $id
    ]);
}

function authorsByBlogPost(PDO $pdoConnection, int $articleId){
    $statement = $pdoConnection->query("SELECT au.pseudo
                                FROM articles a
                                INNER JOIN authors au
                                ON au.id=a.authors_id
                                WHERE $articleId=a.id");
    return $statement->fetch(PDO::FETCH_ASSOC);
}

function blogPostDelete(PDO $pdoConnection, int $articleId){
    $request = $pdoConnection->prepare("DELETE FROM articles
                                WHERE articles.id = ?");
    $request->execute([$articleId]);
}

function blogPostsByCategory(PDO $pdoConnection, String $category){
    $statement = $pdoConnection->query("SELECT a.title, a.text, DATE_FORMAT(a.pub_date, '%d %c %Y') AS date, a.weight, au.pseudo
                                FROM articles a
                                INNER JOIN authors au ON a.authors_id = au.id
                                INNER JOIN articles_has_categories ac ON a.id = ac.articles_id
                                INNER JOIN categories c ON ac.categories_id = c.id
                                WHERE c.name = '$category'");
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}