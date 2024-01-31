<?php
require_once '../resources/views/layouts/header.tpl.php';?>
<div class="row">
    <section class="col">
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
    <aside class="col-2 border" id="control">
        <a href="/?action=updateArticle&id=<?=$selectedArticle['id']?>" class="col">Modifier</a>
        <a href="/?action=deleteArticle&id=<?=$selectedArticle['id']?>" class="col">Effacer</a>
    </aside>
</div>
<?php
require_once '../resources/views/layouts/footer.tpl.php';?>