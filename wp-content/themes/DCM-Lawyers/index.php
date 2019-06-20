<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<div class="grid-container">
    <div class="grid-x">
            <div class="cell medium-3">
                    <?php get_template_part('library/menu-featured-articles') ?>
            </div>
            <div class="cell medium-9 dcm-articles-list">
			<h1 class="articles-title">Articles</h1>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <a href="<?php the_permalink()?>"><?php the_title('<h1 class="dcm-title">', '</h1>'); ?> </a>
                
                <?php
                endwhile;
                else:
                    ?>
                    <p>NO POSTS BRO GET OUT</p>
                <?php
                endif;?>
            </div>
        </div>

</div>

<?php get_footer(); ?>