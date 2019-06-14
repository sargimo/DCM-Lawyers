<?php 
if ( !function_exists('dcm_create_post_types')) :
    function dcm_create_post_types(){
        register_post_type(
            'practice-areas',
            array('labels' => array(
                'name' => __('Practice Areas'),
                'singular_name' => __('Practice Area')
            ),
            'public' => true,
            // 'has_archive' => true,
            'menu_position' => 5,
            'supports' => array('thumbnail', 'title', 'editor'),
            // 'taxonomies' => array('categories', 'post_tag')
            // 'register_meta_box_cb' => 'wine_post_class_meta_box'
        ));

        register_post_type(
            'team',
            array('labels' => array(
                'name' => __('Lawyer Bios'),
                'singular_name' => __('Lawyer Bio')
            ),
            'public' => true,
            // 'has_archive' => true,
            'menu_position' => 5,
            'supports' => array('thumbnail', 'title', 'editor', 'excerpt'),
            // 'taxonomies' => array('categories', 'post_tag')
            // 'register_meta_box_cb' => 'dcm_post_class_meta_box'
        ));
    }
endif;

add_action('init', 'dcm_create_post_types');

?>