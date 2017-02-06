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

    Quotes = {
        quote: '.quote',
        leftButton: '.control-left',
        rightButton: '.control-right',
        nameControl: '.name-controls li',
        init: function() {
            $(this.leftButton).click(this.moveLeft.bind(this));
            $(this.rightButton).click(this.moveRight.bind(this));
        },
        moveRight: function(e) {
            e.preventDefault();
            var activeQuote = $('.quote.active'),
                nextUp = activeQuote.next(),
                activeName = $('.name-controls li.active'),
                nextName = activeName.next(),
                lastQuote = $(this.quote).last();
            activeQuote.removeClass("active");
            nextUp.addClass("active");
            activeName.removeClass("active");
            nextName.addClass("active");
            $(this.leftButton).removeClass("disabled");
            if ( lastQuote.hasClass("active") ) {
                $(this.rightButton).addClass("disabled");
            }
        },
        moveLeft: function(e) {
            e.preventDefault();
            var activeQuote = $('.quote.active'),
                nextUp = activeQuote.prev(),
                activeName = $('.name-controls li.active'),
                nextName = activeName.prev(),
                firstQuote = $(this.quote).first();
            activeQuote.removeClass("active");
            nextUp.addClass("active");
            activeName.removeClass("active");
            nextName.addClass("active");
            console.log(firstQuote);
            $(this.rightButton).removeClass("disabled");
            if ( firstQuote.hasClass("active") ) {
                $(this.leftButton).addClass("disabled");
            }
        }
    }

    $(document).ready(function() {
        Header.init();
        ScrollEvents.init();
        Quotes.init();
        $(".interests").typed({
            strings: ["Cinephile.", "<strike>Marathon</strike> Runner.", "Avid Hiker/Cyclist.", "Wannabe Yogi.", "Passionate Developer."],
            typeSpeed: 50,
            // loop: true,
            showCursor: true
        });
    })

})(jQuery);

function customScroll(e, element) {
    event.preventDefault();
    jQuery('html, body').animate({
        scrollTop: jQuery(element).offset().top + 400
    }, 1000);
}

