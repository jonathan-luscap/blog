<?php
require_once '../resources/views/layouts/header.tpl.php';

if (!$lastArticles) :
    echo "Il n'y a pas d'articles à afficher !";
else :
    foreach ($lastArticles as $key => $article):?>
        <div class="box">
            <h3><a href="/index.php?action=blogpost&id=<?=$article["id"]?>"><?= $article["title"] ?></a></h3>
            <p class="articleAuthor" ><?= $article["pseudo"] ?></p>
            <p class="articlePubDate" ><?= $article["DATE_FORMAT(articles.pub_date, '%d %c %Y')"] ?></p>
        </div>
    <?php endforeach;

require_once '../resources/views/layouts/footer.tpl.php';
endif?>

