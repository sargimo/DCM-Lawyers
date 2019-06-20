<?php get_header(); ?>
<div class="grid-container fluid home-hero">
    <div class="grid-container">
        <h1>PLAIN ENGLISH ADVICE, TAILORED JUST FOR YOU</h1>
        <hr class="hero-hr">
        <div class="hero-buttons">
        <div class="dcm-btn dcm-btn-one">
            <span>WHO ARE WE?</span>
        </div>
        <div class="dcm-btn-full">
            <button>TALK TO US</button>
        </div>
        </div>
    </div>
</div>
<div class="grid-container">
    <div class="grid-x dcm-home-about">
        <div class="cell medium-9">
            <h2 class="dcm-section-header">Clear Advice, Smart Strategies.</h2>
            <p>Our team works to ensure you’re never waiting for an answer. Speak to a lawyer, <span class="emphasis">every</span> time you call. We empower individuals and small organisations with clear advice and smart strategies. </p>
            <div class="dcm-btn-underline">
                <a href="#"><button>more about us</button></a>
            </div>
        </div>
        <div class="cell medium-3">
            <?php get_template_part('library/menu-practice-areas') ?>
        </div>
    </div>
</div>
<div class="grid-container fluid home-testimonials">
    <div class="grid-container">
    <h2 class="dcm-home-testimonials-header">"</h2>
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
                <a href="<?php echo get_permalink() ?>">
                    <?php print the_post_thumbnail(); ?>
                </a>
            </div>
            <div class="dcm-team-title">
                <a href="<?php echo get_permalink()?>">
                    <h3>
                        <?php print the_title(); ?>
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