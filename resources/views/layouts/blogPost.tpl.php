<?php
require_once '../resources/views/layouts/header.tpl.php';?>
<section class="article">
    <article>
        <h3>Article : <?=$selectedArticle['title']?></h3>
        <p class="articleText"><?=$selectedArticle['text']?></p>
        <p>Par <?=$selectedArticle['pseudo']?>, le <?=$selectedArticle["date"]?>.</p>
    </article>
    <aside>
        <h4>Commentaires :</h4>
        <?php if (!$articleComments):?>
            <p>Aucun commentaire</p>
        <?php else:
            foreach ($articleComments as $key => $comment) :?>
                <p><?=$comment['text']?></p>
                <p>Par <?=$comment['pseudo']?>, le <?=$comment["date"]?>.</p>
            <?php endforeach; ?>
        <?php endif; ?>
    </aside>
</section>
<aside class="container">
    <a href="/?action=updateArticle&id=<?=$selectedArticle['id']?>">Modifier cet article</a>
</aside>
<?php
require_once '../resources/views/layouts/footer.tpl.php';?>