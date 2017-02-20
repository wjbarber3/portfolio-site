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
        $("#contact input, #contact select, #contact textarea").on("focus", function(){
            $(this).parent('.ginput_container').siblings('.gfield_label').css("color", "#ff1940");
            $(this).css("border-color", "#ff1940")
        })
        $("#contact input, #contact select, #contact textarea").on("focusout", function(){
            $(this).parent('.ginput_container').siblings('.gfield_label').css("color", "#93a185");
            $(this).css("border-color", "#93a185")
        })
    })

})(jQuery);

function customScroll(e, element) {
    event.preventDefault();
    jQuery('html, body').animate({
        scrollTop: jQuery(element).offset().top - 45
    }, 1000);
}

function aboutMe() {
    jQuery("h2.code").hide();
    jQuery("h2.about").fadeIn();
    jQuery(".interests3").typed({
        strings: ["love to push creative boundaries.", "want to build things that make people's lives easier/better.",  "think that Frank Ocean's 'Blonde' is best music ever made.", "am a devout Cinephile.", "want to work with you."],
        typeSpeed: 0,
        showCursor: true
    });
}

