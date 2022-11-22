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
                <div class="flex-container">
                    <div>
                        <h2>Directions</h2>
                        <p>140 Grandisle Road NW, Edmotnon, AB</p>
                        <p>If you are coming from the City of Edmonton the best driving directions are here:</p>
                        <p>1. Take Anthony Henday Drive SW. Take the Cameron Heights exit and go south west along Maskekosihk Trail</p>
                        <p>2. *Consturuction update* Maskekosihk Trail now goes all the way to 199st through residential. Take Maskekosihk Trail to the 4 way stop on 199st and turn left (south) onto 199st.  Go left at the Y to stay on 199st.</p>
                        <p>3. Turn Left onto Grandisle Rd NW Destination will be on the left.</p>
                        <p>4. Feel free to park on the side of the road or by the gate.</p>
                        <p>Picking strawberries is by appointment only! Please make an appointment before making your way to our strawberry field.</p>
                        <div>
                            <?php echo do_shortcode('[wpgmza id="1"]') ?>
                        </div>
                    </div>
                    <div>
                        <img src="<?php bloginfo('template_directory'); ?>/img/bigbannerphototractorfield.webp" alt="<?php the_title (); ?>">
                    </div>
                </div>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
?>