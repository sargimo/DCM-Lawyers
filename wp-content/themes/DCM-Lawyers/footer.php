<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>
<!-- closes div from main content padding -->
</div>
<footer>
	<div class="grid-container fluid dcm-footer-map">
	</div>
	<div class="grid-container fluid dcm-footer-middle">
		<div class="grid-container dcm-flex">
			<p class= "dcm-footer-item"><i class="fas fa-home"></i> Level 2, Suite 34, 12 Collins Street, <br>Melbourne, VIC 3000</p>
			<p class= "dcm-footer-item"><i class="fas fa-phone"></i></i> (03) 9670 0001</p>
			<p class= "dcm-footer-item"><i class="fas fa-envelope-open"></i> admin@dcmlawyers.com</p>
			<p class= "dcm-footer-item"><i class="fas fa-clock"></i> Monday - Friday <br>9:00am - 5:00pm</p>
		</div>
	</div>
	<div class="grid-container fluid dcm-footer-bottom">
			<div class="grid-container">
				<p>Liability limited by a scheme approved under Professional Standards Legislation.<span class="dcm-footer-author">Copyright © 2019 · Created by PUT SOMETHING HERE </p>
			</div>
		</div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
