<?php
function dcm_bio_meta_box_setup_name() {
    add_meta_box ('dcm_name_box', 'Content Text Box - Name', 'dcm_name_cb', 'team', 'normal', 'high');
} // function dcm_bio_meta_box_setup_name
add_action('add_meta_boxes', 'dcm_bio_meta_box_setup_name');

function dcm_name_cb($post) {
    wp_nonce_field(basename(__FILE__), 'dcm_name_content_nonce');

    //retrieve the metadata values if they exist
    $value = get_post_meta($post->ID, 'dcm_name_content', true);
    ?>
    <p>
        Testimonial Author
    </p>
    <textarea id="dcm_name_content" name="dcm_name_content" cols="100%" rows="10"><?php echo wp_kses_post($value); ?></textarea>
    <?php
} // function dcm_name_cb

function dcm_name_save($id, $post) {
    // check the autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $id; 

    if (
        'team' == $post->post_type
        && current_user_can('edit_page', $id)
        && wp_verify_nonce($_POST['dcm_name_content_nonce'], basename(__FILE__))
        && isset($_POST['dcm_name_content'])
    ) update_post_meta($id, 'dcm_name_content', strip_tags($_POST['dcm_name_content']));
} // function dcm_name_save
add_action('save_post', 'dcm_name_save', 1, 2);