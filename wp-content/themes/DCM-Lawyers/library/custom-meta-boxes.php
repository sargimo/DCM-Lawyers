<?php /* Meta box setup function. */
function dcm_post_meta_boxes_setup() {

    /* Add meta boxes on the 'add_meta_boxes' hook. */
    add_action( 'add_meta_boxes', 'dcm_add_post_meta_boxes' );
    /* Save post meta on the 'save_post' hook. */
    add_action( 'save_post', 'dcm_save_post_class_meta', 10, 2 );
  }

//   add_meta_box( $id, $title, $callback, $page, $context = 'advanced', $priority = 'default', $callback_args = null );
  
/* Create one or more meta boxes to be displayed on the post editor screen. */
function dcm_add_post_meta_boxes() {

  add_meta_box(
    'dcm-post-class',      // Unique ID
    esc_html__( 'Post Class', 'example' ),    // Title
    'dcm_post_class_meta_box',   // Callback function
    'post',         // Post type in which box appears
    'side',         // Context (position)
    'default'         // Priority
  );
}


/* Display the post meta box. */
function dcm_post_class_meta_box( $post ) { ?>

    <?php wp_nonce_field( basename( __FILE__ ), 'dcm_post_class_nonce' ); ?>
  
    <p>
      <label for="dcm-post-class"><?php _e( "Add a custom CSS class, which will be applied to WordPress' post class.", 'example' ); ?></label>
      <br />
      <input class="widefat" type="text" name="dcm-post-class" id="dcm-post-class" value="<?php echo esc_attr( get_post_meta( $post->ID, 'dcm_post_class', true ) ); ?>" size="30" />
    </p>
  <?php }
    
    /* Save the meta box's post metadata. */
function dcm_save_post_class_meta( $post_id, $post ) {

    /* Verify the nonce before proceeding. */
    if ( !isset( $_POST['dcm_post_class_nonce'] ) || !wp_verify_nonce( $_POST['dcm_post_class_nonce'], basename( __FILE__ ) ) )
      return $post_id;
  
    /* Get the post type object. */
    $post_type = get_post_type_object( $post->post_type );
  
    /* Check if the current user has permission to edit the post. */
    if ( !current_user_can( $post_type->cap->edit_post, $post_id ) )
      return $post_id;
  
    /* Get the posted data and sanitize it for use as an HTML class. */
    $new_meta_value = ( isset( $_POST['dcm-post-class'] ) ? sanitize_html_class( $_POST['dcm-post-class'] ) : ’ );
  
    /* Get the meta key. */
    $meta_key = 'dcm_post_class';
  
    /* Get the meta value of the custom field key. */
    $meta_value = get_post_meta( $post_id, $meta_key, true );
  
    /* If a new meta value was added and there was no previous value, add it. */
    if ( $new_meta_value && ’ == $meta_value )
      add_post_meta( $post_id, $meta_key, $new_meta_value, true );
  
    /* If the new meta value does not match the old value, update it. */
    elseif ( $new_meta_value && $new_meta_value != $meta_value )
      update_post_meta( $post_id, $meta_key, $new_meta_value );
  
    /* If there is no new meta value but an old value exists, delete it. */
    elseif ( ’ == $new_meta_value && $meta_value )
      delete_post_meta( $post_id, $meta_key, $meta_value );
  }
  

add_action( 'load-post.php', 'dcm_post_meta_boxes_setup' );
add_action( 'load-post-new.php', 'dcm_post_meta_boxes_setup' );
