/**
 * Title:
 *    Main Javascript
 * Description:
 *    The main Javascript file where you will write the bulk
 *    of your scripts. Make sure to include this just before
 *    the closing </body> tag.
 * Sections:
 *    $. Your Scripts
 *    $. Grunticon Loader
 */



/* $. Your Scripts - To go within the SIAF (Self invoking annonymous function)
\*----------------------------------------------------------------*/

(function($) {

    /**
     * Setup 'CustomSelect' plugin on all Select elements
     */
    if(!$('html').hasClass('ie')) {
        $("select").each(function() {
            new CustomSelect($(this));
        });
    }

    /**
     * Set variable to pool DOM only once.
     */
    var html = $('html');
    var body = $('body');
    var toggleNav = $('.toggle__icon--nav');

    /**
     * Toggle the navigation
     */
    $('.js-toggle-nav').on('click', function() {
        // 1. Toggle the Nav
        body.toggleClass('is-active-nav');

        // 2. Toggle Icons to show whether Nav is active or not
        toggleNav.toggleClass('icon--menu-open').toggleClass('icon--menu-close');
    });

    /**
     * Testimonial
     */
    $('.js-testimonial').slick({
        dots: true,
        infinite: true,
        speed: 2000,
        arrows: true,
        autoplay: true,
        fade: true,
        swipeToSlide: true,
        mobileFirst: true,
        prevArrow: '<div class="slick-prev"></div>',
        nextArrow: '<div class="slick-next"></div>'
    });

    /**
    * Accordion - BROKE
    */

    function close_accordion_section() {
        $('.accordion-section').removeClass('active');
        $('.accordion-section-content').slideUp(300);
        $('.accordion__icon').removeClass('icon--close').addClass('icon--open');
    }

    function open_accordion_section() {
        $('.accordion-section').addClass('active');
        $('.accordion-section-content').slideDown(300);
        $('.accordion__icon').removeClass('icon--open').addClass('icon--close');
    }

    $('.js-toggle-accordion').on('click', function(e){
        if($('.accordion-section').is('.active')) {
            close_accordion_section();
        }
        else {
            open_accordion_section();
        }
    });

})(jQuery);



/* $. Grunticon Load
\*----------------------------------------------------------------*/

grunticon([
    stylesheet.dir + "/assets/dist/grunticon/icons.data.svg.css",
    stylesheet.dir + "/assets/dist/grunticon/icons.data.png.css",
    stylesheet.dir + "/assets/dist/grunticon/icons.fallback.css"
]);
