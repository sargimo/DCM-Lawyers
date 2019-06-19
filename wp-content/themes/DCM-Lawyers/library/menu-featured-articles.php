<div class="dcm-featured-articles-menu">
    <h3>Featured Articles</h3>
    <?php
    wp_nav_menu(
                array(
                    'container_class'     => 'featured-articles-menu',
                    'menu_class' => 'content-list',
                    'theme_location' => 'featured-articles-menu',
                    'fallback_cb'    => false,
                    // 'walker'         => new Foundationpress_Top_Bar_Walker(),
                )
            );
            ?>
</div>