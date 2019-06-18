<?php

function dcm_customize_register($wp_customize) {
    require_once get_template_directory() . '/library/phone-number.php';
    require_once get_template_directory() . '/library/address.php';
    require_once get_template_directory() . '/library/email.php';

}

add_action('customize_register', 'dcm_customize_register');
