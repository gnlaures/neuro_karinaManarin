<?php
    $lHeader = array('modifiers' => '--noTitle', 'title' => 'Página Inicial');
    include('parts/layout/l-header.php');
?>

<main class="l-page__main">
    <div class="l-page__main__group">
        <section class="s-defaultSection --gridPosts">
            <div class="s-defaultSection__content">
                <div class="u-container">
                    <ul class="c-responsiveGrid --start --pad10"
                        data-maxw-breaks="780"
                        data-maxw-cols="1"
                        data-cols-init="2">
                        <li>
                            <?php $cCardArticle = array('modifiers' => '');
                            include('parts/components/c-cardArticle.php'); ?>
                        </li>
                        <li>
                            <?php $cCardArticle = array('modifiers' => '');
                            include('parts/components/c-cardArticle.php'); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="s-defaultSection --gridPosts">
            <div class="s-defaultSection__content">
                <div class="u-container">
                    <ul class="c-responsiveGrid --start --pad10"
                        data-maxw-breaks="780"
                        data-maxw-cols="1"
                        data-cols-init="3">
                        <li>
                            <?php $cCardArticle = array('modifiers' => '--small');
                            include('parts/components/c-cardArticle.php'); ?>
                        </li>
                        <li>
                            <?php $cCardArticle = array('modifiers' => '--small');
                            include('parts/components/c-cardArticle.php'); ?>
                        </li>
                        <li>
                            <?php $cCardArticle = array('modifiers' => '--small');
                            include('parts/components/c-cardArticle.php'); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="s-defaultSection --ads">
            <div class="s-defaultSection__content">
                <div class="u-container">
                <ul class="c-responsiveGrid --start --pad10"
                    data-maxw-breaks="540"
                    data-maxw-cols="1"
                    data-cols-init="2">
                    <li>
                        <a href="#" class="c-adsBanner">
                            <img src="https://fakeimg.pl/640x160" alt="Publicidade">
                        </a>
                    </li>
                    <li>
                        <a href="#" class="c-adsBanner">
                            <img src="https://fakeimg.pl/640x160" alt="Publicidade">
                        </a>
                    </li>
                </ul>
            </div>
            </div>
        </section>
        <section class="s-ndtvPanel">
            <div class="u-container u-dflex u-aifs u-jcsb">
                <div class="s-ndtvPanel__content">
                    <section class="s-defaultSection">
                        <div class="s-defaultSection__head">
                            <h2 class="s-defaultSection__head__title">
                                <i><?php include('media/img/icons/icon_ndtv.svg');?></i>
                                <span>Comentários NDTV</span>
                            </h2>
                            <div class="s-defaultSection__head__readmore">
                                <?php $cReadMore = array('modifiers' => '', 'link' => '');
                                include('parts/components/c-readMore.php'); ?>
                            </div>
                        </div>
                        <div class="s-defaultSection__content">
                            <?php $cTabVideos = array('modifiers' => ''); include('parts/components/c-tabVideos.php'); ?>
                        </div>
                    </section>
                </div>
                <div class="s-ndtvPanel__aside">
                    <?php $cCardKarina = array('modifiers' => ''); include('parts/components/c-cardKarina.php'); ?>
                    <a href="#" class="c-adsBanner">
                        <img src="https://fakeimg.pl/310x415" alt="Publicidade">
                    </a>
                </div>
            </div>
        </section>
    </div>
    <div class="l-page__main__group --withSidebar u-bg-white">
        <div class="u-container u-dflex u-aifs">
            <div class="l-page__main__content">
                <section class="s-defaultSection --listPosts">
                    <div class="s-defaultSection__head">
                        <h2 class="s-defaultSection__head__title">
                            <i><?php include('media/img/icons/icon_article.svg');?></i>
                            <span>Mais Notícias</span>
                        </h2>
                    </div>
                    <div class="s-defaultSection__content">
                        <ul class="c-responsiveGrid --start --pad10"
                            data-maxw-breaks="940"
                            data-maxw-cols="1"
                            data-cols-init="1">
                            <li>
                                <?php $cCardArticle = array('modifiers' => '--small --h'); include('parts/components/c-cardArticle.php'); ?>
                            </li>
                            <li>
                                <?php $cCardArticle = array('modifiers' => '--small --h'); include('parts/components/c-cardArticle.php'); ?>
                            </li>
                            <li>
                                <a href="#" class="c-adsBanner">
                                    <img src="https://fakeimg.pl/840x160" alt="Publicidade">
                                </a>
                            </li>
                            <li>
                                <?php $cCardArticle = array('modifiers' => '--small --h'); include('parts/components/c-cardArticle.php'); ?>
                            </li>
                            <li>
                                <?php $cCardArticle = array('modifiers' => '--small --h'); include('parts/components/c-cardArticle.php'); ?>
                            </li>
                        </ul>
                        <?php $cPagination = array('modifiers' => ''); include('parts/components/c-pagination.php'); ?>
                    </div>
                </section>
            </div>
            <div class="l-page__main__aside">
                <?php include('parts/layout/l-sidebar.php'); ?>
            </div>
        </div>
    </div>
</main>