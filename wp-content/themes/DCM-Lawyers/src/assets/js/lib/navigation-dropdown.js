import 'jquery';

jQuery(function($) {
    let burger = $('.menu-icon');
    let mobileMenu = $('.mobile-menu');
    let topBar = $('.top-bar');
    let topBarUl = $('.top-bar ul');
    let menuPrimary = $('#menu-primary-1');
    burger.click(function(){
        mobileMenu.toggleClass('active');
        topBar.toggleClass('active');
        topBarUl.toggleClass('active');
        menuPrimary.toggleClass('dcmactive');
    })
});
