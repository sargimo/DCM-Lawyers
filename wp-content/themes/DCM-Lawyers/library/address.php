<?php

$wp_customize->add_section(
    'dcm-address',
    array(
        'title'     => 'DCM Address',
        'priority'  => 30
    )
);

$wp_customize->add_setting(
    'dcm-address-setting',
    array(
        'default'      => '',
        'transport'    => 'postMessage'
    )
);

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'dcm-address-control',
        array(
            'label'    => 'Address',
            'settings' => 'dcm-address-setting',
            'section'  => 'dcm-address',
            'type' => 'text'
        )
    )
);
