<?php
require_once '../resources/views/layouts/header.tpl.php';?>
<section class="article">
    <article>
        <h3><?=$chosenArticle[title]?></h3>
        <p class="articleText"><?=$chosenArticle[text]?></p>
        <p>Par <?=$chosenArticle[pseudo]?>, le <?=$chosenArticle[DATE_FORMAT(articles.pub_date, '%d %c %Y')]?>.</p>
    </article>
    <aside>
        <?php if (!$articleComments):?>
            <p>Aucun commentaire</p>
        <?php else:
            foreach ($articleComments as $key => $comment) :?>
                <p><?=$comment[text]?></p>
                <p>Par <?=$comment[pseudo]?>, le <?=$comment[DATE_FORMAT(comments.date, '%d %c %Y')]?></p>
        <?php endif; ?>
    </aside>
</section>





require_once '../resources/views/layouts/footer.tpl.php';
endif?>
