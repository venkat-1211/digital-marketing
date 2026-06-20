var action = 'click';
var speed = "500";

$(document).ready(function() {

    $('li.q').on(action, function() {
        var isOpen = $(this).hasClass('rotate');

        $('li.q').removeClass('rotate');
        $('li.a').slideUp(speed);


        if (!isOpen) {
            $(this).addClass('rotate');
            $(this).next().slideDown(speed);
        }
    });
});