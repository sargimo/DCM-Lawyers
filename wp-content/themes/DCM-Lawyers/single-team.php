<?php get_header(); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php the_title('<h2 class="post-title">', '</h2>'); ?>
    <div class="post-content">
        <?php the_content(); ?> 
    </div>
    
    <?php
    endwhile;
    else:
        ?>
        <p>NO POSTS BRO GET OUT</p>
    <?php
    endif;?>

<?php get_footer(); ?>