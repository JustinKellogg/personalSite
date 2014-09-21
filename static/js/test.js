(function($) {
    $.fn.sideNotes = function(options) {
 
    // build main options before element iteration by extending the default ones
    var opts = $.extend({}, $.fn.sideNotes.defaults, options);
 
    // for each side note, do the magic.
    return $(this)
        .hide()
        .wrap('<div class="dynamic-side-note"></div>')
        .before('<h3 class="toggler"><a href="#">' + opts.sideNoteToggleText +'</a></h3>')
        .parent(0).find('> h3.toggler > a').click(function() {
            $(this).parents('.dynamic-side-note').eq(0).find('> .side-note').slideToggle();
            return false;
        });
    };
 
    // plugin defaults
    $.fn.sideNotes.defaults = {
        sideNoteToggleText : 'Side note:'
    };

})(jQuery);

jQuery(function() {
    $('.side-note').sideNotes({ sideNoteToggleText : 'As an aside:' });
    $('#date').datepicker();
});
