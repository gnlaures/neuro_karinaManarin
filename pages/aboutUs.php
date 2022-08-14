<?php
$lHeader = array('modifiers' => '--inner', 'title' => 'Karina Manarin');
include('parts/layout/l-header.php');
?>

<main class="l-page__main --inner">
    <div class="l-page__main__group --withSidebar">
        <div class="u-container u-dflex u-aifs">
            <div class="l-page__main__content">
                <section class="s-defaultSection --institucional">
                    <article class="c-plainText">
                        <figure>
                            <a href="media/img/post_1.jpeg" class="figureCover" data-fancybox="post-images">
                                <img src="media/img/post_1.jpeg" alt="De fusca, Governador Moisés será confirmado candidato à reeleição">
                                <figcaption>De fusca, Governador Moisés será confirmado candidato à reeleição</figcaption>
                            </a>
                        </figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquam distinctio dolor dolorem ea earum est exercitationem explicabo impedit laudantium necessitatibus obcaecati quaerat quod, sint, totam, ut voluptatum? A ad consequuntur, cumque dolore doloremque dolorum ducimus enim esse ex facere facilis id illum iure, iusto laudantium magnam nemo nesciunt nobis odit perferendis placeat possimus quam quasi recusandae, rem repellat reprehenderit rerum sit tempora temporibus veniam voluptas voluptates voluptatibus? Accusamus assumenda blanditiis, cupiditate distinctio fuga obcaecati ratione tempora voluptatem voluptatum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquam distinctio dolor dolorem ea earum est exercitationem explicabo impedit laudantium necessitatibus obcaecati quaerat quod, sint, totam, ut voluptatum? A ad consequuntur, cumque dolore doloremque dolorum ducimus enim esse ex facere facilis id illum iure, iusto laudantium magnam nemo nesciunt nobis odit perferendis placeat possimus quam quasi recusandae, rem repellat reprehenderit rerum sit tempora temporibus veniam voluptas voluptates voluptatibus? Accusamus assumenda blanditiis, cupiditate distinctio fuga obcaecati ratione tempora voluptatem voluptatum.</p>
                        <span class="u-spacer"></span>
                        <h5>Redes Sociais</h5>
                        <?php $cMenu__social = array('modifiers' => '--gray'); include('parts/components/c-menu__social.php'); ?>
                    </article>
                </section>
            </div>
            <div class="l-page__main__aside">
                <?php include('parts/layout/l-sidebar.php'); ?>
            </div>
        </div>
    </div>
</main>