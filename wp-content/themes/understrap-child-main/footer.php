<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<div class="wrapper bg-light" id="wrapper-footer">

	<div class=" <?php echo esc_attr($container); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer py-5" id="colophon">

					<div class="site-info">

						<div class="container">
							<div class="row">

								<!-- Contact Information -->
								<div class="col-md-4 mb-4">
									<h5 class="text-primary">Contact Information</h5>
									<p class="fw-semibold">BoticaPlus</p>
									<p>123 Main Street, City, State, ZIP</p>
									<p>Phone: (123) 456-7890</p>
									<p>Email: boticaplus.com</p>
								</div>

								<!-- Operating Hours -->
								<div class="col-md-4 mb-4">
									<h5 class="text-primary">Operating Hours</h5>
									<ul class="list-unstyled">

										<li>Monday
											8:30 AM - 5:00 PM</li>
										<li>Tuesday
											8:30 AM - 5:00 PM</li>
										<li>Wednesday
											8:30 AM - 5:00 PM</li>
										<li>Thursday
											8:30 AM - 5:00 PM</li>
										<li>Friday
											8:30 AM - 5:00 PM</li>
										<li>Saturday
											8:30 AM - 4:00 PM</li>

										<li>Sunday: Closed</li>
									</ul>
								</div>

								<!--Links -->
								<div class="col-md-4 mb-4">
									<h5 class="text-primary">Quick Links</h5>
									<ul class="list-unstyled">
										<!-- <li><a href="home" class="text-black text-decoration-none">Home</a></li> -->
										<li><a href="About-Us" class="text-black text-decoration-none">About Us</a></li>
										<li><a href="services" class="text-black text-decoration-none">Services</a></li>
										<li><a href="careers" class="text-black text-decoration-none">Careers</a></li>
										<li><a href="Contact-Us" class="text-black text-decoration-none">Contact-Us</a></li>

									</ul>
								</div>
							</div>

							<div class="row">
								<!-- Social Media -->
								<div class="col-md-4 mb-4">
									<h5 class="text-primary">Follow Us</h5>
									<ul class="list-unstyled">
										<li><a href="www.facebook.com/BoticaPlusPharmacyFranchise" class="text-black me-3 text-decoration-none"><i class="fa-brands fa-facebook"></i> Facebook</a></li>
										<li><a href="https://www.tiktok.com/@ceramicology/video/7294831486891560198" class="text-black me-3 text-decoration-none"><i class="fa-brands fa-tiktok"></i> Tiktok</a></li>
										<li><a href="#" class="text-black me-3 text-decoration-none"><i class="fa-brands fa-instagram"></i> Instagram</a></li>
										<li><a href="www.youtube.com/@BoticaPlusPharmacy" class="text-black text-decoration-none"><i class="fa-brands fa-youtube"></i> YouTube</a></li>
									</ul>
								</div>

								<!-- Legal -->
								<div class="col-md-4 mb-4">
									<h5 class="text-primary">Legal</h5>
									<ul class="list-unstyled">
										<li><a href="privacy-policy" class="text-black text-decoration-none">Privacy Policy</a></li>
										<li><a href="refund_returns" class="text-black text-decoration-none">Terms of Service</a></li>
									</ul>
								</div>
								<!-- Accreditation & Certifications -->
								<div class="col-md-4 mb-4">
									<h5 class="text-primary">Accreditation & Certifications</h5>
									<!-- Insert logos here -->
									<p>Licensed Pharmacy Number: [Insert License Number]</p>
								</div>

								<!-- Newsletter Signup -->
								<!-- <div class="col-md-4 mb-4">
										<h5>Newsletter Signup</h5>
										<form>
											<div class="mb-3">
												<input type="email" class="form-control" placeholder="Enter your email">
											</div>
											<button type="submit" class="btn btn-primary">Subscribe</button>
										</form>
									</div> -->
							</div>

							<div class="row justify-content-center">


								<!-- Payment Methods -->
								<!-- <div class="col-md-4 mb-4">
										<h5>Payment Methods</h5>

										<ul class="list-unstyled">
											<li><i class="fa-brands fa-cc-visa"></i> Visa</li>
											<li><i class="fa-brands fa-cc-mastercard"></i> MasterCard</li>
											<li><i class="fa-brands fa-cc-paypal"></i> PayPal</li>
										</ul>
									</div> -->

								<!-- Locations -->
								<div class="col-md-5 mb-4">
									<h5 class="text-primary">Our Location</h5>
									<!-- Embed Google Map iframe -->
									<iframe src="https://www.google.com/maps/embed?..." width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
								</div>
							</div>

							<div class="row">
								<!-- Emergency Contact -->
								<div class="col-12 text-center">
									<p>Emergency Phone Number: (123) 456-7890 (for after-hours emergencies)</p>
								</div>
							</div>
						</div>

						<p class="text-center fw-semibold">&copy; 2024 BoticaPlusPharmacyFranchise. All rights reserved.</p>

						<!-- <?php understrap_site_info(); ?> -->

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!-- col -->

		</div><!-- .row -->

	</div><!-- .container(-fluid) -->

</div><!-- #wrapper-footer -->

<?php // Closing div#page from header.php. 
?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>