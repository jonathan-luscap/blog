<section class="container">
<?php
require_once '../resources/views/layouts/header.tpl.php';

if (!$lastArticles) :
    echo "Il n'y a pas d'articles à afficher !";
else :?>
    <div class="row">
    <?php foreach ($lastArticles as $key => $article): ?>
        <article class="col-12 col-lg-6 col-xl-3 my border bg-">
            <h3><a href="/index.php?action=blogpost&id=<?=$article["id"]?>"><?= $article["title"] ?></a></h3>
            <p class="articleAuthor" ><?= $article["pseudo"] ?></p>
            <p class="articlePubDate" ><?= $article['date'] ?></p>
        </article>
    <?php endforeach;?>
    </div>
<?php endif; ?>
</section>
<aside class="container">
    <a href="/?action=createArticle">Rédiger un nouvel article</a>
</aside>
<?php
require_once '../resources/views/layouts/footer.tpl.php';