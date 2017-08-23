$( document ).ready(function() {
    var bLazy = new Blazy({ 
        offset: 50
    });
    $('.animation-fade-in').each(function(i,el) {
        var $this = $(this);
        setTimeout(function() {
            $this.addClass('fade-in');
        }, i*1000); // milliseconds
    });
    $('.animation-slide-up').each(function(i,el) {
        var $this = $(this);
        setTimeout(function() {
            $this.addClass('slide-up');
        }, i*200); // milliseconds
    });
    $('.animation-slide-right').each(function(i,el) {
        var $this = $(this);
        setTimeout(function() {
            $this.addClass('slide-right');
        }, i*200); // milliseconds
    });
});