<section class="container d-flex">
    <?php
    require_once '../resources/views/layouts/header.tpl.php';

    if (!$articlesByCategory) :
        echo "Il n'y a pas d'articles à afficher !";
    else :
        foreach ($articlesByCategory as $key => $article): ?>
            <article class="box ">
                <h3><a href="/index.php?action=blogpost&id=<?=$article["id"]?>"><?= $article["title"] ?></a></h3>
                <p class="articleAuthor" ><?= $article["pseudo"] ?></p>
                <p class="articlePubDate" ><?= $article["date"] ?></p>
            </article>
        <?php endforeach;
    endif; ?>
</section>
<aside class="container">
    <a href="/?action=createArticle">Rédiger un nouvel article</a>
</aside>
<?php
require_once '../resources/views/layouts/footer.tpl.php';
