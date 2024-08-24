<?php

/**
 * Template Name: Empty Page Template
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
<main role="main" class="container my-4">
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4 text-primary">Welcome to Our Pharmacy</h1>
			<p class="lead text-primary">Providing quality medications and health services to you and your family.</p>
		</div>
	</div>

	<section class="row">
		<div class="col-md-4">
			<div class="card">
				<img src="path-to-image1.jpg" class="card-img-top" alt="Service 1">
				<div class="card-body">
					<h5 class="card-title">Medication Services</h5>
					<p class="card-text">We offer a wide range of medications and prescriptions.</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<img src="path-to-image2.jpg" class="card-img-top" alt="Service 2">
				<div class="card-body">
					<h5 class="card-title">Health Consultations</h5>
					<p class="card-text">Consult with our pharmacists for personalized health advice.</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<img src="path-to-image3.jpg" class="card-img-top" alt="Service 3">
				<div class="card-body">
					<h5 class="card-title">Over-the-Counter Products</h5>
					<p class="card-text">Find a variety of over-the-counter products for your needs.</p>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
