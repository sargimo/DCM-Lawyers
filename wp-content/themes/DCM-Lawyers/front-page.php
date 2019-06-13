<?php get_header(); ?>
<div class="grid-container fluid home-hero">
    <div class="grid-container">
        <h1>PLAIN ENGLISH ADVICE, TAILORED JUST FOR YOU</h1>
    </div>
</div>
<div class="grid-container">
    <div class="grid-x dcm-home-about">
        <div class="cell medium-9">
            <h2>Insert Title</h2>
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

<?php
get_footer();
?>