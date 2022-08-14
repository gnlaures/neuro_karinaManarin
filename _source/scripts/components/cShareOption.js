const copyLinkInput = $('.js-shareOptions__input');
const copyLinkBtn = $('.js-shareOptions__copyLink');
const copyLinkFeedback = $('.js-shareOptions__feedback');

$(window).on('load', function() {
    copyLinkInput.val(window.location.href);
})
copyLinkBtn.on('click', function(e) {
    e.preventDefault();
    copyLinkInput.select();
    document.execCommand("copy");
    copyLinkFeedback.addClass('is-active');
    setTimeout(function(){copyLinkFeedback.removeClass('is-active')}, 3000);
})