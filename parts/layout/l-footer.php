<?php include('parts/sections/s-wppNewsletter.php');?>

<footer class="l-footer">
    <div class="u-container u-dflex">
        <div class="l-footer__brand">
            <?php $cBrand = array('file' => 'brand_1.png');
            include('parts/components/c-brand.php'); ?>
        </div>
        <div class="l-footer__content">
            <div class="l-footer__colGroup">
                <div class="l-footer__col">
                    <div class="l-footer__item">
                        <div class="l-footer__item__title"><h3>Redes Sociais</h3></div>
                        <div class="l-footer__item__content">
                            <?php $cMenu__social = array('modifiers' => '--white');
                            include('parts/components/c-menu__social.php'); ?>
                        </div>
                    </div>
                </div>
                <div class="l-footer__col">
                    <div class="l-footer__item">
                        <div class="l-footer__item__title"><h3>Notícias</h3></div>
                        <div class="l-footer__item__content">
                            <?php $cMenu__categories = array('modifiers' => '');
                            include('parts/components/c-menu__categories.php'); ?>
                        </div>
                    </div>
                </div>
                <div class="l-footer__col">
                    <div class="l-footer__item">
                        <div class="l-footer__item__title"><h3>Institucional</h3></div>
                        <div class="l-footer__item__content">
                            <?php $cMenu__institucional = array('modifiers' => '');
                            include('parts/components/c-menu__institucional.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="l-footer__colGroup">
                <div class="l-footer__col u-fw100">
                    <div class="l-footer__item">
                        <div class="l-footer__item__content">
                            <div class="c-copyright">
                                <span>© Copyright 2000 - 2022</span>
                                <span>by <a href="#">Neurodigital</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>