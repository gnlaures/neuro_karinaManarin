if ($('.c-tab').length) {
    console.log('aa')
    $('.c-tab__options li').on('click', function(e) {
        // select
        let selectedTab = $(this).children('span').attr('data-tab');

        // option active
        $('.c-tab__options span').removeClass('is-active');
        $('.c-tab__options span[data-tab="'+selectedTab+'"]').addClass('is-active');

        // content active
        $('.c-tab__hero__content').removeClass('is-active');
        $('.c-tab__hero__content[data-tab="'+selectedTab+'"]').addClass('is-active');

        // scroll
        goToSection__scroll('.c-tab', 100, 80, 700, 10);
    })
}