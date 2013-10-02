$(function() {
	$(document).foundation('', {
        bullets: false,
        navigation_arrows: true
    });

    /* Tabs */
    $('.tab').hide();
    $('#tab1').show();

    $('ul#tabs-list li a').click(function(e){
        e.preventDefault();
        $('.tab').hide();
        $('ul#tabs-list li').removeClass();
        $(this).parents('li').addClass('active');

        $($(this).attr('href')).show();
    });

    /* Sexy animatie aan contact formulier toevoegen */
    $('.contact-form-submit').click(function() {
        $(this).addClass('animated lightSpeedOut');
    });

    $('.contact-form-submit').hover(
        function() {
            $(this).addClass('animated pulse');
        }, function() {
            $(this).removeClass('animated pulse');
        }
    );

    /* Animatie in topbar */
    $('.top-bar-section ul li a').click(function() {
        $(this).addClass('animated bounceOut')
    });
});
