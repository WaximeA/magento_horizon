var window = jQuery(window).width();
var cont = jQuery('.content-country');
jQuery('.level-1').find('ul').css('display', 'none');
if(window < 767) {
    jQuery('.level-1').css('display', 'none');
    cont.find('h2').on('click', function() {
        var current = jQuery(this);
        var level1 = current.parents('.level-0').find('.level-1');
        cont.find('h2').removeClass('active');
        cont.find('.level-1').slideUp('active');
        if(level1.is(':visible')) {
            return false;
        }
        level1.slideToggle('fast', function() {
            if(level1.is(':visible')) {
                current.addClass('active');
                return false;
            } else {
                current.removeClass('active');
            }
        });
    });
}
cont.find('h4').on('click', function() {
    var current = jQuery(this);
    var ul = current.parents('.level-1').find('ul');
    cont.find('h4').removeClass('active');
    jQuery('.level-1').find('ul').slideUp('active');
    if(ul.is(':visible')) {
        return false;
    }
    ul.slideToggle('fast', function() {
        if(ul.is(':visible')) {
            current.addClass('active');
            return false;
        } else {
            current.removeClass('active');
        }
    });
});
