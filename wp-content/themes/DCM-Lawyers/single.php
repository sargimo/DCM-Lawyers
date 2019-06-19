<?php
/**
 * The template for displaying all single posts and attachments
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
		<div class="cell medium-9 dcm-articles">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php the_title('<h1 class="dcm-title">', '</h1>'); ?>
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
        </div>
</div>
<?php get_footer();
