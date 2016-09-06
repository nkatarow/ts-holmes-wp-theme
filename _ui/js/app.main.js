/*

    FILE: app.main.js
    DESCRIPTION: Basic App functions and config
    AUTHOR(S): Nick Katarow

    DEPENDENCIES:
    - jQuery 1.9.1

    TO DO:

*/
var HO = window.HO || {};

$(document).ready(function(){
    HO.init();
});

window.HO = {
    init: function () {
        var self = this;

        self.events.parent = this;

        // Init Components
        self.nav.init();

        // EVENT DELEGATION
        $(window).bind('resize', function(event) {
            self.events.windowResize({width: self.getMediaWidth()});
        });

        $(window).triggerHandler('resize');

        $('.smooth').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    },
    events: {
        windowResize: function (event) {
            var self = this.parent,
                i,
                ii;

            if (event.width >= 1056 && self.nav.isMobile) {
                self.nav.mobileOff();
            } else if (event.width < 1056 && !self.nav.isMobile) {
                self.nav.mobileOn();
            }
        }
    },
    getMediaWidth: function () {
        var self = this,
            width;

        if (typeof matchMedia !== 'undefined') {
            width = self.bruteForceMediaWidth();
        } else {
            width = window.innerWidth || document.documentElement.clientWidth;
        }

        return width;
    },
    bruteForceMediaWidth: function () {
        var i = 0,
            found = false;

        while (!found) {
            if (matchMedia('(width: ' + i + 'px)').matches) {
                found = true;
            } else {
                i++;
            }

            // Prevent infinite loop if something goes horribly wrong
            if (i === 9999) {
                break;
            }
        }

        return i;
    }
};
