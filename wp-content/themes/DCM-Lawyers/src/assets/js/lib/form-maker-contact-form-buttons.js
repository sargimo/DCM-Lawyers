import 'jquery';

jQuery(function($) {
    let button_submit = $('.button-submit');
    let button_submit_parent = button_submit.parent();
    let button_reset = $('.button-reset');
    let button_reset_parent = $('.button-reset');
    button_submit_parent.addClass('dcm-btn-full');
    button_reset_parent.addClass('dcm-btn-full');
});

// jQuery(function($) {
//     let button_submit = $('.button-submit'),
//     button_reset = $('.button-reset');
//     button_submit.addClass('vets-button');
//     button_reset.addClass('vets-button');
//     button_submit.html('<svg><rect/></svg><span>Submit</span>');
//     button_reset.html('<svg><rect/></svg><span>Submit</span>');
// });
