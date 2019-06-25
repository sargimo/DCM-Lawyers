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
		<a href="https://goo.gl/maps/h61CaaP79K1wV9vp9" target="_blank">0
			<div>
			<button class="dcm-footer-btn">12 COLLINS STREET, MELBOURNE</button>
			</div>
		</a>
	</div>
	<div class="grid-container fluid dcm-footer-middle">
		<div class="grid-container grid-x dcm-flex">
			<div class="cell medium-12 small-12 dcm-flex">
				<p class= "dcm-footer-item"><i class="fas fa-home"></i> <?php echo get_theme_mod('dcm-address-setting', 'Level 2, Suite 34, 12 Collins Street'); ?>, <br>Melbourne, VIC 3000</p>
			</div>
			<div class="cell medium-12 small-12 dcm-flex">
				<p class= "dcm-footer-item"><i class="fas fa-phone"></i></i> <?php echo get_theme_mod('dcm-phone-number-setting', '(03) 9670 0001'); ?></p>
			</div>
			<div class="cell medium-12 small-12 dcm-flex">
				<p class= "dcm-footer-item"><i class="fas fa-envelope-open"></i> <?php echo get_theme_mod('dcm-email-setting', 'admin@dcmlawyers.com'); ?></p>
			</div>
			<div class="cell medium-12 small-12 dcm-flex">
				<p class= "dcm-footer-item"><i class="fas fa-clock"></i> Monday - Friday <br>9:00am - 5:00pm</p>
			</div>
		</div>
	</div>
	<div class="grid-container fluid dcm-footer-bottom">
			<div class="grid-container dcm-footer-flex">
				<p>Liability limited by a scheme approved under Professional Standards Legislation.</p><p class="dcm-footer-author">Copyright © <?php echo date("Y"); ?></p>
			</div>
		</div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
