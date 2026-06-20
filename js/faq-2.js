var action = 'click';

$('.faq-2-content h4').on(action, function() {
    $(this).next().slideToggle()
        .siblings('.faq-2-content div').slideUp();
    //toggle sign
    $(this).toggleClass('sign')
        .siblings('.faq-2-content h4').removeClass();
});