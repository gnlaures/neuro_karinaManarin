<div class="c-cardArticle <?php echo $cCardArticle["modifiers"] ?>">

    <div class="c-cardArticle__figure">
        <div class="c-cardArticle__figure__infos">
            <?php $cArticleInfos = array('modifiers' => '');
            include('parts/components/c-articleInfos.php'); ?>
        </div>
        <a href="noticia-open" class="c-cardArticle__figure__cover">
            <figure class="u-aspectRatio --ratio-3-2">
                <img src="media/img/post_1.jpeg" alt="De fusca, Governador Moisés será confirmado candidato à reeleição">
            </figure>
        </a>
    </div>

    <div class="c-cardArticle__content">
        <div class="c-cardArticle__content__hero">
            <a href="noticia-open" class="c-cardArticle__content__resume">
                <h2>De fusca, Governador Moisés será confirmado candidato à reeleição</h2>
                <p>Senador Esperidião Amin foi proclamado candidato ao Governo neste sábado em convenção do PP. O senador Esperidião Amin...</p>
            </a>
            <div class="c-cardArticle__content__readMore">
                <?php $cReadMore = array('modifiers' => '', 'link' => 'noticia-open');
                include('parts/components/c-readMore.php'); ?>
            </div>
        </div>
    </div>
</div>

<!--
--small
--horizontal
-->