<?php
function dcm_bio_meta_box_setup() {
    add_meta_box ('dcm_bio_box', 'Content Text Box', 'dcm_bio_cb', 'team', 'normal', 'high');
} // function dcm_bio_meta_box_setup
add_action('add_meta_boxes', 'dcm_bio_meta_box_setup');

function dcm_bio_cb($post) {
    wp_nonce_field(basename(__FILE__), 'dcm_bio_content_nonce');

    //retrieve the metadata values if they exist
    $value = get_post_meta($post->ID, 'dcm_bio_content', true);
    ?>
    <p>
        Testimonial Quote
    </p>
    <textarea id="dcm_bio_content" name="dcm_bio_content" cols="100%" rows="10"><?php echo wp_kses_post($value); ?></textarea>
    <?php
} // function dcm_bio_cb

function dcm_bio_save($id, $post) {
    // check the autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $id; 

    if (
        'team' == $post->post_type
        && current_user_can('edit_page', $id)
        && wp_verify_nonce($_POST['dcm_bio_content_nonce'], basename(__FILE__))
        && isset($_POST['dcm_bio_content'])
    ) update_post_meta($id, 'dcm_bio_content', strip_tags($_POST['dcm_bio_content']));
} // function dcm_bio_save
add_action('save_post', 'dcm_bio_save', 1, 2);