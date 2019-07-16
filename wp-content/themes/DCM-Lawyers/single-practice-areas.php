<?php get_header(); 
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
echo '<div class="grid-container fluid practice-areas-hero" style="background-image: url('. $url.')">'; ?>
    <h1><?php the_title();?></h1>
</div>
<div class="grid-container">
    <div class="grid-x grid-margin-x">
            <div class="cell medium-4">
                    <?php get_template_part('library/menu-practice-areas') ?>
            </div>
            <div class="cell medium-8 dcm-practice-areas">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="dcm-content">
                    <?php the_content(); ?>
                    <div class="dcm-btn-full">
	        		    <a href="<?php echo get_page_link(24); ?>">
			        	<button>TALK TO US</button>
    			    </a>
    	        </div>

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