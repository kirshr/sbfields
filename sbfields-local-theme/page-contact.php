<?php
/**
 *
 * @package SBFields
 */

?>

<?php get_header();
?>

	<main id="primary" class="site-main">
		<div class="container">
			<div class="inner-container">
			<h2>Contact Information</h2>
				<p>Before contacting us please check on our <a href="<?php echo esc_url(__('http://localhost/wordpress-6.0.2/wordpress/faq/')); ?>">Fequently Asked Questions</a> page to see if your question is already answered there!</p>

				<p>If you have a questions thats not answered on our FAQ page, email us at: <a href="<?php echo esc_url(__('mailto:strawberryfieldsedm@gmail.com')); ?>">strawberryfieldsedm@gmail.com</a></p>


				<p>Follow us on our <a target="_blank" href="<?php echo esc_url(__('https://www.instagram.com/strawberryfieldsyeg/')); ?>">Instagram</a> to see our most up to date pictures and important updates or go to our <a href="<?php echo esc_url(__('http://localhost/wordpress-6.0.2/wordpress/updates/')); ?>"> Important Updates</a> section of our website.</p>

				<div>
					<?php echo do_shortcode('[contact-form-7 id="40" title="Contact Us Form"]') ?>
				</div>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
?>