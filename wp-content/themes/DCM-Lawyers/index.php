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
    <div class="grid-x dcm-articles-list">
            <div class="cell medium-3">
                    <?php get_template_part('library/menu-featured-articles') ?>
            </div>
            <div class="grid-x grid-margin-x articles-item-bg">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                
                <div class="cell medium-4 articles-item">
                    <a href="<?php the_permalink()?>">
                    
                    <?php the_title('<h1 class="dcm-title">', '</h1>'); ?> 
                    <hr class="articles-hr">
                    <div class="author">
                        <?php echo get_avatar( get_the_author_email(), '60' ); ?> 
                        <h4 class="articles-author"><span class="written-by">written by</span><br><?php the_author(); ?></h4>
                    </div>
                    <div class="dcm-btn-underline">
                        <button>read more</button>
                    </div>
                    </a>
                </div>

                
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