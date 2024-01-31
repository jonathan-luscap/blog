<div class="container">
<?php
require_once '../resources/views/layouts/header.tpl.php';
if ($_SERVER['REQUEST_METHOD']==='POST') :
    $newArticleTitle = filter_input(INPUT_POST,'title',FILTER_SANITIZE_SPECIAL_CHARS);
    $newArticleText = filter_input(INPUT_POST, 'articleText', FILTER_SANITIZE_SPECIAL_CHARS);
    $newArticleWeight = filter_input(INPUT_POST, 'weight', FILTER_SANITIZE_NUMBER_INT);

    blogPostCreate($pdo, $newArticleTitle, $newArticleWeight, $newArticleText, 2);
    echo 'Votre article a bien été enregistré.';

else : ?>

    <form method="post" action="/?action=createArticle">
        <fieldset>
            <legend>Ajouter un article :</legend>
            <label for="title">Titre (45 caractères max):</label>
            <input class="mb-3" type="text" name="title" id="title" size="30vw" maxlength="45" required><br>
            <label for="articleText">Texte (150 caractères max):</label><br>
            <textarea class="mb-3" name="articleText" id="articleText" style="width: 100%" rows="3"></textarea><br>
            <label for="author">Auteur :</label>
            <input class="mb-3" type="text" name="author" id="author" value="à definir" disabled>
            <label for="pubDate">Date :</label>
            <input class="mb-3" type="text" name="pubDate" id="pubDate" size="10vw" value="<?=date('Y-m-d')?>" disabled>
            <label for="weight">Niveau d'importance :</label>
            <select class="mb-3" name="weight" id="weight">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select><br>
        </fieldset>
        <fieldset class="d-flex justify-content-end">
            <input type="submit" value="Publier">
        </fieldset>

    </form>
</div>
<?php
endif;
require_once '../resources/views/layouts/footer.tpl.php';?>