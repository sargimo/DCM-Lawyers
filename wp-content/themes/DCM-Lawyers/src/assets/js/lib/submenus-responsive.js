import 'jquery';

// jQuery(function($) {
//     let burger = $('.menu-icon');
//     let mobileMenu = $('.mobile-menu');
//     let topBar = $('.top-bar');
//     let topBarUl = $('.top-bar ul');
//     let menuPrimary = $('#menu-primary-1');
//     burger.click(function(){
//         mobileMenu.toggleClass('active');
//         topBar.toggleClass('active');
//         topBarUl.toggleClass('active');
//         menuPrimary.toggleClass('dcmactive');
//     })
// });

// MotionUI.animateIn('#menu-primary-1', 'slide-in-right');

jQuery(function($) {
    let arrow = $('.pa-menu-title i');
    let button = $('.pa-menu-title');
    let menu = $('.practice-areas-menu');
    let menu2 = $('#menu-team');
    let menu3 = $('.team-menu');
    button.click(function() {
        arrow.toggleClass('is-active');
        menu.toggleClass('is-active');
        menu2.toggleClass('is-active');
        menu3.toggleClass('is-active');
    });
})