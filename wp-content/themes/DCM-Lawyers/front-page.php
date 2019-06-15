<?php get_header(); ?>
<div class="grid-container fluid home-hero">
    <div class="grid-container">
        <h1>PLAIN ENGLISH ADVICE, TAILORED JUST FOR YOU</h1>
    </div>
</div>
<div class="grid-container">
    <div class="grid-x dcm-home-about">
        <div class="cell medium-9">
            <h2 class="dcm-section-header">Insert Title</h2>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ligula est, pellentesque a enim vel, sagittis pharetra lacus. Praesent a sapien lectus. Morbi at nisl nec nisi laoreet consequat ut et urna. Quisque at quam magna. Aliquam eu velit massa.
            <span class="dcm-more-text">more about us</span>
            </p>
        </div>
        <div class="cell medium-3">
            <?php get_template_part('library/menu-practice-areas') ?>
        </div>
    </div>
</div>
<div class="grid-container fluid home-testimonials">
    <div class="grid-container">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-testimonials') ) : 
        endif; ?>
    </div>
</div>
<div class="grid-container dcm-home-team">
    <h2 class="dcm-section-header">THE TEAM</h2>
    <div class="grid-x">
        <?php
        /**
        * Setup query to show the ‘services’ post type with ‘8’ posts.
        * Output is title with excerpt.
        */
        $args = array(  
            'post_type' => 'team',
            'post_status' => 'publish',
            'posts_per_page' => 8,
        );

        $loop = new WP_Query( $args );
            
        while ( $loop->have_posts() ) : $loop->the_post();
        // $link = get_permalink();
        ?>
        <div class="dcm-home-team-item cell medium-4 small-12">
            <div class="dcm-team-thumbnail">
                <a href="<?php echo get_permalink()?>">
                <?php
                print the_post_thumbnail();
                ?>
                </a>
            </div>
            <div class="dcm-team-title">
            <a href="<?php echo get_permalink()?>">
            <h3>
            <?php
                print the_title();
            ?>
            </h3>
            </a>
            </div>
        </div>
    <?php
   endwhile;

   wp_reset_postdata();
?></div></div>

<?php
get_footer();
?>