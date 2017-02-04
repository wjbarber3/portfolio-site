(function($){

    /*
    |--------------------------------------------------------------------------
    | Header Functionality
    |--------------------------------------------------------------------------
    | This object houses any functionality associated with the header
    |
    */
    Header = {
        navLink : 'nav li a',
        header: 'header',
        init: function() {
            $(window).scroll(this.animateHeader.bind(this));
        },
        animateHeader: function() {
            var scrollTop = $(window).scrollTop();
            if ( scrollTop > 0 && !$(this.header).hasClass("scrolled") ) {
                $(this.header).addClass("scrolled");
                console.log("one time");
            } else if ( scrollTop == 0 && $(this.header).hasClass("scrolled") ) {
                $(this.header).removeClass("scrolled");
            }
        }
    }

    ScrollEvents = {
        featured: '#featured',
        featuredDesc: '#featured .description',
        featuredImg: '#featured img',
        init: function() {
            $(window).scroll(this.fireEvents.bind(this));
        },
        fireEvents: function() {
            var scrollBottom = $(window).scrollTop() + $(window).height(),
                featuredTop = $(this.featured).offset().top + 300;
            if ( $(window).width() > 767 ) {
                if ( scrollBottom > featuredTop ) {
                    setTimeout(function() {
                        $("#featured .description").addClass("active");
                    }, 300);
                    $(this.featuredImg).addClass("slid");
                } else {
                    $(this.featuredDesc).removeClass("active");
                    $(this.featuredImg).removeClass("slid");
                }
            }
        }
    }

    $(document).ready(function() {
        Header.init();
        ScrollEvents.init();
    })

})(jQuery);

function customScroll(e, element) {
    event.preventDefault();
    jQuery('html, body').animate({
        scrollTop: jQuery(element).offset().top + 400
    }, 1000);
}