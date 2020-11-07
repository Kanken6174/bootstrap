$(document).ready(function() {
    $('body').on('click', '.navbar-nav li a', function(e) {
        $('li.active').removeClass('active');
        var link = $(this);
        link.closest('li').addClass('active');
        // Scroll animation
        $('html, body').animate({ scrollTop: $(link.attr('href')).offset().top }, 750);
        return false;
    });

    //Scrollspy édité pour mon site
    //{ target: '#menu' } retiré
    $('#tospy').scrollspy();
});