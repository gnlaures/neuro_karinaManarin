const cSearch = $('.c-search');

cSearch.find('input').on('focusin', function() {
    $(this).closest('form').addClass('is-active');
})
cSearch.find('input').on('focusout', function() {
    $(this).closest('form').removeClass('is-active');
})