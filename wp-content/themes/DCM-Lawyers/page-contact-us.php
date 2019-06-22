<?php get_header(); ?>
<div class="grid-container">
    <div class="grid-x dcm-contact-us">
        <div class="cell">
            <h1>Contact Us</h1>
        </div>
        <div class="cell medium-6">
            <p class= "contact-item"><i class="fas fa-home"></i> <?php echo get_theme_mod('dcm-address-setting', 'Level 2, Suite 34, 12 Collins Street'); ?>, <br>Melbourne, VIC 3000</p>
			<p class= "contact-item"><i class="fas fa-phone"></i></i> <?php echo get_theme_mod('dcm-phone-number-setting', '(03) 9670 0001'); ?></p>
			<p class= "contact-item"><i class="fas fa-envelope-open"></i> <?php echo get_theme_mod('dcm-email-setting', 'admin@dcmlawyers.com'); ?></p>
			<p class= "contact-item"><i class="fas fa-clock"></i> Monday - Friday <br>9:00am - 5:00pm</p>
        </div>
        <div class="cell medium-6">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.0078274385874!2d144.97103611582918!3d-37.81328564179009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642c630c663ef%3A0xb9566708c052a432!2sDCM+Lawyers!5e0!3m2!1sen!2snz!4v1561168182037!5m2!1sen!2snz"allowfullscreen></iframe>
        </div>
    </div>
</div>
<div class="grid-container dcm-form-bg fluid">
<div class="dcm-form">
        <?php if( function_exists("wd_form_maker") ) { wd_form_maker(1, "embedded"); } ?>
    </div>
</div>
<?php
get_footer();
?>