<?php

/**
 * Template Name: About-us Page Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>
<div class="container my-5">
	<div class="row mb-3">
		<div class="col-md About-us bg-light py-3 ">
			<h1 class="text-center text-primary">About Us</h1>
			<p class="lead text-center">Welcome to our pharmacy franchise, where we are committed to providing the best pharmaceutical care.</p>
		</div>
		<div class="col-md p-0 ">
			<img src="/wp-content/uploads/2024/08/boticaplus_n.jpg" alt="">
		</div>
	</div>
	<!-- Our Mission -->
	<div class="row mb-3">
		<div class="col-md p-0">
			<img src="/wp-content/uploads/2024/08/boticaplus_n.jpg" alt="">
		</div>
		<div class="col-md mission bg-dark py-3">
			<h2 class="text-center text-primary">Our Mission</h2>
			<p class="lead text-center">At [Botica Plus], Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores enim quaerat delectus voluptatum nobis vitae officiis consequatur culpa dolorem asperiores.</p>
		</div>

	</div>

	<!-- Our Story -->
	<div class="row mb-3">
		<div class="col-md bg-light py-3">
			<h2 class="text-center text-primary">Our Story</h2>
			<p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus unde expedita labore soluta, repudiandae eos doloremque corrupti quas suscipit dolore!</p>
		</div>
		<div class="col-md p-0">
			<img src="/wp-content/uploads/2024/08/boticaplus_n.jpg" alt="">
		</div>
	</div>

	<!-- Meet Our Team -->
	<div class="my-5 d-flex flex-column justify-content-evenly">
		<h2 class="text-center text-primary">Meet Our Team</h2>
		<div class="row mx-auto">
			<div class="col-md team-member ">
				<img class="w-100 object-fit-cover" src="/wp-content/uploads/2024/08/icons.jpg" alt="Team Member">
				<h4 class="text-primary">John Doe</h4>
				<p>Title</p>
			</div>
			<div class="col-md team-member">
				<img class="w-100 object-fit-cover" src="/wp-content/uploads/2024/08/p2.jpg" alt="Team Member">
				<h4 class="text-primary">Will Smith</h4>
				<p>Title</p>
			</div>
			<div class="col-md team-member">
				<img class="w-100 object-fit-cover" src="/wp-content/uploads/2024/08/p3.jpg" alt="Team Member">
				<h4 class="text-primary">John Smith</h4>
				<p>Title</p>
			</div>
		</div>
	</div>

	<!-- Why Choose Us -->
	<div class="why-choose-us my-5">
		<h2 class="text-primary">Why Choose Us?</h2>
		<ul>
			<li><strong class="text-primary">Proven Model:</strong> Our franchise model is designed for success, offering comprehensive support and resources to ensure each location thrives.</li>
			<li><strong class="text-primary">Commitment to Quality:</strong> We uphold the highest standards of pharmaceutical care and customer service across our entire network.</li>
			<li><strong class="text-primary">Community Focus:</strong> We are dedicated to enhancing the health and well-being of the communities we serve through personalized care and local involvement.</li>
		</ul>
	</div>

	<!-- Commitment to Excellence -->
	<div class="commitment my-5">
		<h2 class="text-primary">Our Commitment to Excellence</h2>
		<p>We are devoted to maintaining excellence in every aspect of our franchise operations. This includes investing in the latest pharmaceutical technology, providing ongoing training for our franchisees, and continually improving our services based on community feedback and industry advancements. Our goal is to be the pharmacy franchise of choice for both patients and aspiring franchisees.</p>
	</div>
</div>



<?php
while (have_posts()) :
	the_post();
	get_template_part('loop-templates/content', 'empty');
endwhile;

get_footer();
