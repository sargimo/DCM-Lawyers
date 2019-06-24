<?php get_header(); ?>
<div class="grid-container">
    <div class="grid-x grid-margin-x">
            <div class="cell medium-3">
                    <?php get_template_part('library/menu-team') ?>
            </div>
            <div class="cell auto dcm-team">
                <?php if (have_posts()) : while (have_posts()) : the_post(); 
                    $meta = get_post_meta( $post->ID, 'your_fields', true );
                ?>

                <!-- < ?php the_title('<h1 class="dcm-title">', '</h1>'); ?> -->
                <div class="dcm-specialties">
                    <h3>Specialises in</h3>
                    <p><?php the_excerpt(); ?></p>
                </div>
                <div class="dcm-content">
                    <?php the_content(); ?> 
                </div>
                
                <?php
                endwhile;
                else:
                    ?>
                    <p>NO POSTS BRO GET OUT</p>
                <?php
                endif;?>
            </div>
            <div class="cell medium-3 dcm-team-quote ">
                <h3 class="quotation-mark">"</h3>
                <p><?php if (is_array($meta) && isset($meta['testimonial'])){ echo $meta['testimonial']; } ?></p>
                <h4 class="name"><?php if (is_array($meta) && isset($meta['author'])){ echo $meta['author']; } ?></h4>
            </div>
            <div class="cell medium-12 dcm-team-quote-mobile ">
                <h3 class="quotation-mark">"</h3>
                <p><?php if (is_array($meta) && isset($meta['testimonial'])){ echo $meta['testimonial']; } ?></p>
                <h4 class="name"><?php if (is_array($meta) && isset($meta['author'])){ echo $meta['author']; } ?></h4>
            </div>
        </div>

</div>
<?php get_footer(); ?>