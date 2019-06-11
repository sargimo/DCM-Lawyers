<?php
wp_nav_menu(
			array(
                'container_class'     => 'practice-areas-menu',
                'menu_class' => 'content-list',
				'theme_location' => 'practice-areas-menu',
				'fallback_cb'    => false,
				// 'walker'         => new Foundationpress_Top_Bar_Walker(),
            )
        );