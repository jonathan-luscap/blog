<?php
if (!$lastArticles) {
    echo "Il n'y a pas d'articles à afficher !";
} else {
    foreach ($lastArticles as $key => $article):?>
        <div class="box">
            <h3><?= $article["title"] ?></h3>
            <p class="articleText"><?= $article["text"] ?></p>
            <p class="articleAuthor" ><?= $article["pseudo"] ?></p>
            <p class="articlePubDate" ><?= $article["pub_date"] ?></p>
        </div>
    <?php endforeach;
}?>