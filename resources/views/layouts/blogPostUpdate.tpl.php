<div class="container">
<?php
require_once '../resources/views/layouts/header.tpl.php';
if ($_SERVER['REQUEST_METHOD']==='POST') :
    $articleId = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $articleModifiedTitle = filter_input(INPUT_POST,'title',FILTER_SANITIZE_SPECIAL_CHARS);
    $articleModifiedText = filter_input(INPUT_POST, 'articleText', FILTER_SANITIZE_SPECIAL_CHARS);
    $articleModifiedWeight = filter_input(INPUT_POST, 'weight', FILTER_SANITIZE_NUMBER_INT);

    blogPostUpdate($pdo, $articleId, $articleModifiedTitle, $articleModifiedWeight, $articleModifiedText);
else :?>
<form method="post" action="/?action=updateArticle&id=<?=$selectedArticle['id']?>">
    <fieldset>
        <legend>Modifier un article :</legend>
        <label for="title">Titre (45 caractères max):</label>
        <input class="mb-3" type="text" name="title" id="title" size="30vw" maxlength="45" value="<?=$selectedArticle['title']?>"><br>
        <label for="articleText">Texte (150 caractères max):</label><br>
        <textarea class="mb-3" name="articleText" id="articleText" style="width: 100%" rows="3" val><?=$selectedArticle['text']?></textarea><br>
        <label for="author">Auteur :</label>
        <input class="mb-3" type="text" name="author" id="author" value="<?=$selectedArticleAuthor['pseudo']?>" disabled>
        <label for="pubDate">Date :</label>
        <input class="mb-3" type="text" name="pubDate" id="pubDate" size="10vw" value="<?=$selectedArticle['date']?>" disabled>
        <label for="weight">Niveau d'importance :</label>
        <input class="mb-3" type="number" name="weight" id="weight" value="<?=$selectedArticle['weight']?>"><br>
    </fieldset>
    <fieldset class="d-flex justify-content-end">
        <input type="submit" value="Publier">
    </fieldset>

</form>

<?php endif;