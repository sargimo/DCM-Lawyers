<?php

function add_your_fields_meta_box() {
    	add_meta_box(
    		'your_fields_meta_box', // $id
    		'Testimonial', // $title
    		'show_your_fields_meta_box', // $callback
    		'team', // $screen
    		'normal', // $context
    		'high' // $priority
    	);
    }
    add_action( 'add_meta_boxes', 'add_your_fields_meta_box' );

    function show_your_fields_meta_box() {
    	global $post;
    	$meta = get_post_meta( $post->ID, 'your_fields', true ); ?>

    	<input type="hidden" name="your_meta_box_nonce" value="<?php echo wp_create_nonce( basename(_FILE_) ); ?>">

        <p>
            <label for="your_fields[testimonial]">Testimonial Quote</label>
            <br>
            <input type="text" name="your_fields[testimonial]" id="your_fields[testimonial]" class="regular-text" value="<?php if (is_array($meta) && isset($meta['testimonial'])){ echo $meta['testimonial']; }  ?>">
            <br>
            <label for="your_fields[testimonial]">Testimonial Author</label>
            <br>
            <input type="text" name="your_fields[author]" id="your_fields[author]" class="regular-text" value="<?php if (is_array($meta) && isset($meta['author'])){ echo $meta['author']; }  ?>">
        </p>

        <?php 
        
    }

    function save_your_fields_meta( $post_id ) {
    	// verify nonce
    	if ( !wp_verify_nonce( $_POST['your_meta_box_nonce'], basename(__FILE__) ) ) {
    		return $post_id;
    	}
    	// check autosave
    	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    		return $post_id;
    	}
    	// check permissions
    	if ( 'page' === $_POST['post_type'] ) {
    		if ( !current_user_can( 'edit_page', $post_id ) ) {
    			return $post_id;
    		} elseif ( !current_user_can( 'edit_post', $post_id ) ) {
    			return $post_id;
    		}
    	}

    	$old = get_post_meta( $post_id, 'your_fields', true );
    	$new = $_POST['your_fields'];

    	if ( $new && $new !== $old ) {
    		update_post_meta( $post_id, 'your_fields', $new );
    	} elseif ( '' === $new && $old ) {
    		delete_post_meta( $post_id, 'your_fields', $old );
    	}
    }
    add_action( 'save_post', 'save_your_fields_meta' );