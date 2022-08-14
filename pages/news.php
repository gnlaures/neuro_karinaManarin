<?php
    $lHeader = array('modifiers' => '', 'title' => 'Categoria');
    include('parts/layout/l-header.php');
?>

<main class="l-page__main">
    <div class="l-page__main__group">
        <section class="s-defaultSection --gridPosts">
            <div class="s-defaultSection__content">
                <div class="u-container">
                    <ul class="c-responsiveGrid --start --pad10"
                        data-maxw-breaks="940"
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
    </div>
    <div class="l-page__main__group --withSidebar">
        <div class="u-container u-dflex u-aifs">
            <div class="l-page__main__content">
                <section class="s-defaultSection --gridPosts">
                    <div class="s-defaultSection__content">
                        <ul class="c-responsiveGrid --start --pad10"
                            data-maxw-breaks="940"
                            data-maxw-cols="1"
                            data-cols-init="2">
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
                            <li>
                                <?php $cCardArticle = array('modifiers' => '--small');
                                include('parts/components/c-cardArticle.php'); ?>
                            </li>
                        </ul>
                    </div>
                </section>
                <section class="s-defaultSection --ads">
                    <div class="s-defaultSection__content">
                        <ul class="c-responsiveGrid --start --pad10"
                            data-maxw-breaks="940"
                            data-maxw-cols="1"
                            data-cols-init="1">
                            <li>
                                <a href="#" class="c-adsBanner">
                                    <img src="https://fakeimg.pl/840x160" alt="Publicidade">
                                </a>
                            </li>
                        </ul>
                    </div>
                </section>
                <section class="s-defaultSection --listPosts">
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