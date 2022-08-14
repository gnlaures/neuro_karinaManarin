<div class="c-video <?php echo $cVideo["modifiers"] ?>">
    <a href="<?php echo $cVideo["link"] ?>" class="c-video__cover" data-fancybox="video-post">
        <figure class="u-aspectRatio --ratio-16-9">
            <img src="media/img/<?php echo $cVideo["cover"] ?>" alt="<?php echo $cVideo["title"] ?>">
        </figure>
        <i><?php include('media/img/icons/icon_play.svg'); ?></i>
    </a>
    <div class="c-video__infos">
        <?php $cArticleInfos = array('modifiers' => ''); include('parts/components/c-articleInfos.php'); ?>
    </div>
</div>

