<?php
$lHeader = array('modifiers' => '--inner', 'title' => 'Contato');
include('parts/layout/l-header.php');
?>

<main class="l-page__main --inner">
    <div class="l-page__main__group --withSidebar">
        <div class="u-container u-dflex u-aifs">
            <div class="l-page__main__content">
                <section class="s-defaultSection --institucional">
                    <article class="c-plainText">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquam distinctio dolor dolorem ea earum est exercitationem explicabo impedit laudantium necessitati.</p>
                    </article>
                    <?php include('parts/components/c-formContact.php'); ?>
                </section>
            </div>
            <div class="l-page__main__aside">
                <?php include('parts/layout/l-sidebar.php'); ?>
            </div>
        </div>
    </div>
</main>