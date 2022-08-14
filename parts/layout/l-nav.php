<nav class="l-nav">
    <div class="l-nav__main">
        <div class="u-container --big">
            <div class="l-nav__main__col">
                <?php $cHamburguer = array('modifiers' => '--m --gray'); include('parts/components/c-hamburguer.php'); ?>
                <?php $cSearch = array('modifiers' => '--min'); include('parts/components/c-search.php'); ?>
            </div>
            <div class="l-nav__main__col --center">
                <?php $cBrand = array('file' => 'brand_3__primary.png'); include('parts/components/c-brand.php'); ?>
            </div>
            <div class="l-nav__main__col">
                <?php $cMenu__social = array('modifiers' => '--noLabels --h --gray'); include('parts/components/c-menu__social.php'); ?>
            </div>
        </div>
    </div>
    <div class="l-nav__menu">
        <div class="u-container --big u-dflex u-jcc">
            <?php $cMenu__categories = array('modifiers' => '--h --primary --forceMainLinkColorGray --click'); include('parts/components/c-menu__categories.php'); ?>
        </div>
    </div>
</nav>



<div class="l-navMobile">
    <div class="l-navMobile__mask js-closeNavMobile"></div>
    <div class="l-navMobile__content --left">
        <div class="l-navMobile__content__hero">
            <div class="l-navMobile__content__group">
                <div class="l-navMobile__content__item u-fw100 u-jcfe">
                    <?php $cHamburguer = array('modifiers' => '--m --white is-active js-closeNavMobile'); include('parts/components/c-hamburguer.php'); ?>
                </div>
                <div class="l-navMobile__content__item u-fw100">
                    <?php $cSearch = array('modifiers' => ''); include('parts/components/c-search.php'); ?>
                </div>
            </div>

            <div class="l-navMobile__content__group">
                <div class="l-navMobile__content__item u-fw100">
                    <h3>Categorias</h3>
                    <?php $cMenu__categories = array('modifiers' => '');
                    include('parts/components/c-menu__categories.php'); ?>
                </div>
            </div>

            <div class="l-navMobile__content__group">
                <div class="l-navMobile__content__item u-fw50">
                    <h3>Institucional</h3>
                    <?php $cMenu__institucional = array('modifiers' => '');
                    include('parts/components/c-menu__institucional.php'); ?>
                </div>
                <div class="l-navMobile__content__item u-fw50">
                    <h3>Redes Sociais</h3>
                    <?php $cMenu__social = array('modifiers' => '--white');
                    include('parts/components/c-menu__social.php'); ?>
                </div>
            </div>

        </div>
    </div>
</div>