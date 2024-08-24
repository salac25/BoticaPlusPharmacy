<?php

/**
 * Template Name: Contact-Us Page Template
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
endwhile;
?>
<div class="container my-3">
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
<?php
get_footer();
