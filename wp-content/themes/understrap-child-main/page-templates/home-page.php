<?php

/**
 * Template Name: Home Page Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

while (have_posts()) :
	the_post();
	get_template_part('loop-templates/content', 'empty');
endwhile; ?>


<div class="img-header">
	<img src="/wp-content/uploads/2024/08/boticaplus_n.jpg" class="w-100" alt="">
</div>
<div class="container my-5">

	<div class="container text-center py-5">
		<h1 class="display-4 text-primary">Join Our Pharmacy Franchise</h1>
		<p class="lead">Be part of a trusted network with a proven track record of success.</p>
		<a href="#contact" class="btn btn-light btn-lg">Get Started</a>
	</div>

	<!-- About Us Section -->
	<section id="about" class="py-5 bg-light">
		<div class="container">
			<div class="row text-center mb-4">
				<div class="col">
					<h2 class="text-primary">About Us</h2>
					<p>Learn more about our mission, values, and the journey that has made us a leading pharmacy franchise.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 mb-4">
					<h5 class="text-primary">Our Mission</h5>
					<p>We aim to provide accessible, affordable, and high-quality healthcare products and services to communities across the country.</p>
				</div>
				<div class="col-md-6 mb-4">
					<h5 class="">Our History</h5>
					<p>Founded in [Year], our pharmacy franchise has grown from a single location to a trusted network of pharmacies across the nation.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 mb-4">
					<h5 class="text-primary">Our Values</h5>
					<p>We are committed to integrity, excellence, and compassionate care, ensuring that our customers receive the best service possible.</p>
				</div>
				<div class="col-md-6 mb-4">
					<h5 class="text-primary">Why Choose Us?</h5>
					<p>With a strong brand, comprehensive support, and a proven business model, we empower our franchisees to succeed in a competitive market.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Benefits Section -->
	<section id="benefits" class="py-5">
		<div class="container">
			<div class="row text-center mb-4">
				<div class="col">
					<h2 class="text-primary">Why Choose Us?</h2>
					<p>Discover the advantages of joining our pharmacy franchise network.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 mb-4">
					<div class="card h-100">
						<div class="card-body text-center">
							<i class="bi bi-gear-fill fs-2 mb-3"></i>
							<h5 class="card-title text-primary">Proven Business Model</h5>
							<p class="card-text">Benefit from a tried-and-tested business model designed for success.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-4">
					<div class="card h-100">
						<div class="card-body text-center">
							<i class="bi bi-person-check-fill fs-2 mb-3"></i>
							<h5 class="card-title text-primary">Comprehensive Training</h5>
							<p class="card-text">Receive thorough training and support to ensure smooth operations.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-4">
					<div class="card h-100">
						<div class="card-body text-center">
							<i class="bi bi-bar-chart-fill fs-2 mb-3"></i>
							<h5 class="card-title text-primary">Strong Brand Recognition</h5>
							<p class="card-text">Leverage our established brand to attract and retain customers.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Services Section -->
	<section id="services" class="bg-light py-5">
		<div class="container">
			<div class="row text-center mb-4">
				<div class="col">
					<h2 class="text-primary">Our Services</h2>
					<p>Explore the range of services our franchise locations offer.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 mb-4">
					<div class="card h-100">
						<img src="/wp-content/uploads/2024/08/prescription-management.jpg" class="card-img-top" alt="Service Image">
						<div class="card-body">
							<h5 class="card-title text-primary">Prescription Management</h5>
							<p class="card-text">Streamline prescription refills and management with our advanced systems.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-4">
					<div class="card h-100">
						<img src="/wp-content/uploads/2024/08/68980934-doctor-and-pamedical-consultation.jpg" class="card-img-top" alt="Service Image">
						<div class="card-body">
							<h5 class="card-title text-primary">Health Consultations</h5>
							<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, amet.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-4">
					<div class="card h-100">
						<img src="/wp-content/uploads/2024/08/wellness.jpg" class="card-img-top" alt="Service Image">
						<div class="card-body">
							<h5 class="card-title text-primary">Wellness Programs</h5>
							<p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore, blanditiis.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="news" class="py-5">
		<div class="container">
			<div class="row text-center mb-4">
				<div class="col">
					<h2 class="text-primary">Latest News</h2>
					<p>Stay updated with the latest news and updates from our franchise network.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 mb-4">
					<div class="card h-100">
						<img src="/wp-content/uploads/2024/08/yulo.jpg" class="card-img-top" alt="News Image">
						<div class="card-body">
							<h5 class="card-title text-primary">Franchise Expansion Announcement</h5>
							<p class="card-text">We are excited to announce the opening of our new franchise locations in several key markets.</p>
							<a href="#" class="btn btn-primary">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-4">
					<div class="card h-100">
						<img src="/wp-content/uploads/2024/08/yulo.jpg" class="card-img-top" alt="News Image">
						<div class="card-body">
							<h5 class="card-title text-primary">New Health Initiative Launched</h5>
							<p class="card-text">Our latest initiative aims to improve community health with new wellness programs and resources.</p>
							<a href="#" class="btn btn-primary">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-4">
					<div class="card h-100">
						<img src="/wp-content/uploads/2024/08/yulo.jpg" class="card-img-top" alt="News Image">
						<div class="card-body">
							<h5 class="card-title text-primary">Franchisee Success Story</h5>
							<p class="card-text">Read about how one of our franchisees achieved remarkable growth with our support.</p>
							<a href="#" class="btn btn-primary">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Testimonials Section -->
	<section id="testimonials" class="py-5">
		<div class="container">
			<div class="row text-center mb-4">
				<div class="col">
					<h2 class="text-primary">What Our Franchisees Say</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 mb-4">
					<div class="card h-100 bg-light">
						<div class="card-body text-center">
							<blockquote class="blockquote">
								<p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod asperiores corrupti consequuntur ut iure. Aliquid asperiores qui molestias repellendus ipsa!</p>
							</blockquote>
							<footer class="blockquote-footer mt-3">Alice Guo</footer>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-4">
					<div class="card h-100 bg-light">
						<div class="card-body text-center">
							<blockquote class="blockquote">
								<p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quis ex facere similique blanditiis et?</p>
							</blockquote>
							<footer class="blockquote-footer mt-3">Bong Bong</footer>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-4">
					<div class="card h-100 bg-light">
						<div class="card-body text-center">
							<blockquote class="blockquote">
								<p class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo animi beatae voluptas, unde tempora rem.</p>
							</blockquote>
							<footer class="blockquote-footer mt-3">Bong Go</footer>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="text-center py-5">
		<div class="container">
			<h1 class="display-4 text-primary">Join Our Team</h1>
			<p class="lead">Explore exciting career opportunities with our pharmacy franchise network.</p>
		</div>
	</div>


	<!-- Current Openings Section -->
	<section id="careers" class="py-5">
		<div class="container">
			<div class="row text-center mb-4">
				<div class="col">
					<h2 class="text-primary">Current Job Openings</h2>
					<p>We are always on the lookout for talented individuals to join our team. Check out our latest job openings below.</p>
				</div>
			</div>
			<div class="row">
				<!-- Job 1 -->
				<div class="col-md-4 mb-4">
					<div class="card h-100">
						<div class="card-body">
							<h5 class="card-title text-primary">Pharmacist</h5>
							<p class="card-text">We are seeking a dedicated pharmacist to provide exceptional patient care and manage pharmacy operations.</p>
							<a href="#" class="btn btn-primary">Apply Now</a>
						</div>
					</div>
				</div>
				<!-- Job 2 -->
				<div class="col-md-4 mb-4">
					<div class="card h-100">
						<div class="card-body">
							<h5 class="card-title text-primary">Pharmacy Technician</h5>
							<p class="card-text">Join our team as a pharmacy technician and assist with medication preparation and customer service.</p>
							<a href="#" class="btn btn-primary">Apply Now</a>
						</div>
					</div>
				</div>
				<!-- Job 3 -->
				<div class="col-md-4 mb-4">
					<div class="card h-100">
						<div class="card-body">
							<h5 class="card-title text-primary">Customer Service Representative</h5>
							<p class="card-text">We are looking for a customer-focused representative to handle inquiries and support our pharmacy operations.</p>
							<a href="#" class="btn btn-primary">Apply Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Company Section -->
	<section id="culture" class=" py-5">
		<div class="container">
			<div class="row text-center mb-4">
				<div class="col">
					<h2 class="text-primary">Our Company Culture</h2>
					<p>Discover what makes working with us a rewarding experience. We pride ourselves on fostering a supportive and dynamic work environment.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 mb-4">
					<h5 class="text-primary">Supportive Environment</h5>
					<p>Our team is dedicated to supporting each other and providing the resources needed for success.</p>
				</div>
				<div class="col-md-6 mb-4">
					<h5 class="text-primary">Career Growth</h5>
					<p>We offer opportunities for professional development and career advancement within our network.</p>
				</div>
			</div>
		</div>
	</section>



	<!-- Contact Form Section -->
	<section id="contact" class="bg-light py-5">
		<div class="container">
			<div class="row text-center mb-4">
				<div class="col">
					<h2 class="text-primary">Contact Us</h2>
					<p>Get in touch to learn more about our franchise opportunities.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mx-auto">
					<?php
					echo do_shortcode('[contact-form-7 id="79e8759" title="Franchise Contact"]'); ?>
				</div>
			</div>
		</div>
	</section>
</div>


<?php
get_footer();
