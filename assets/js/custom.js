
jQuery(document).ready(function($) {

    "use strict";

    // Home Slider

    $('#slider').flexslider({
        animation: "slide"
    });




    // Counter

    $(function() {
        var value;
        $('.counter span').appear();
        $(document.body).on('appear', '.counter span', function(e, $affected) {
            $affected.each(function() {
                value = $(this).data('fact');
                $(this).animateNumbers( value, false, 1000, "easeOutBounce" );
            });
        });
    });

    $('.animated').appear();

});