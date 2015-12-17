<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div id="footer-container">
			<section class="footer-locations-wrapper">
				<p>
					Located in Fort Walton Beach, A to Z Appliance Repair is the area's solution for a nearly endless list of major appliance repair services. We'll travel directly to your location, whether you reside in <span class="locations-emphasized-text">Destin, Eglin AFB, Fort Walton Beach, Freeport, Miramar Beach, Navarre, Santa Rosa Beach, Valparaiso, Wright,</span> or another local community.
				</p>
			</section>
			<footer class="footer-primary" id="footer">
				<div class="row show-for-medium">
					<div class="small-12 columns">
						<span class="hdr-emergency-service-tagline">
							<span class="font-oswald-bold">24 / 7</span> Emergency Service Available!
						</span>
					</div>
				</div>
				<div class="row footer-row">
					<div class="medium-3 columns">
						<span class="logo-logo-mark">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons-svg/repair-icon.svg" alt="A to Z Appliance Repair" />
						</span>
						<span class="logo-logotype">A to Z Appliance Repair</span>
						<span class="footer-small-text">981 Highway 98 E Suite 3408 <br>
						Destin, FL 32541</span>
					</div>
					<div class="medium-3 columns">
						<h5 class="footer-hours">Hours</h5>
						<span class="footer-hours-small">Monday - Friday: 8AM - 6PM <br>
						Saturday: 10AM - 4PM</span>
					</div>
					<div class="medium-3 columns">
						<div class="footer-military-logo-wrapper">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Military-logo.jpg" alt="United States Veteran Owned Business logo" />
						</div>
					</div>
					<div class="medium-3 columns">
						<div class="logo-phone-box show-for-medium">Phone: 850-390-4400</div>
						<a href="tel:18503904400" class="logo-phone-box show-for-small-only">Phone: 850-390-4400</a>
					</div>
				</div>
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
