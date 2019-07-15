import 'jquery';

jQuery(function($) {
    let button_submit = $('.button-submit');
    let button_submit_parent = button_submit.parent();
    let button_reset = $('.button-reset');
    let button_reset_parent = $('.button-reset');
    button_submit_parent.addClass('dcm-btn-full');
    button_reset_parent.addClass('dcm-btn-full');
});
