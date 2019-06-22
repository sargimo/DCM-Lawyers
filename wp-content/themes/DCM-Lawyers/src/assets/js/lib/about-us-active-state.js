import 'jquery';

jQuery(function($) {
    if(window.location.pathname.indexOf('about-us') > 0) {
        $('#menu-primary .menu-item#menu-item-75').addClass('current-menu-parent');
    }
});