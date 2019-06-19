<div class="dcm-team-menu">
    <h3>Team</h3>
    <?php
    wp_nav_menu(
                array(
                    'container_class'     => 'team-menu',
                    'menu_class' => 'content-list',
                    'theme_location' => 'team-menu',
                    'fallback_cb'    => false,
                    // 'walker'         => new Foundationpress_Top_Bar_Walker(),
                )
            );
            ?>
</div>