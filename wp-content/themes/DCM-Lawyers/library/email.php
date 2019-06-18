<?php

$wp_customize->add_section(
    'dcm-email',
    array(
        'title'     => 'DCM Email',
        'priority'  => 30
    )
);

$wp_customize->add_setting(
    'dcm-email-setting',
    array(
        'default'      => '',
        'transport'    => 'postMessage'
    )
);

$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'dcm-email-control',
        array(
            'label'    => 'Email',
            'settings' => 'dcm-email-setting',
            'section'  => 'dcm-email',
            'type' => 'text'
        )
    )
);
