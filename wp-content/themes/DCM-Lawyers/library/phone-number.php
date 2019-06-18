<?php

$wp_customize->add_section(
    'dcm-phone-number',
    array(
        'title'     => 'DCM Phone Number',
        'priority'  => 30
    )
);

$wp_customize->add_setting(
    'dcm-phone-number-setting',
    array(
        'default'      => '',
        'transport'    => 'postMessage'
    )
);

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'dcm-phone-number-control',
        array(
            'label'    => 'Phone Number',
            'settings' => 'dcm-phone-number-setting',
            'section'  => 'dcm-phone-number',
            'type' => 'text'
        )
    )
);
