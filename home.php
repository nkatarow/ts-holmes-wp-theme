<?php
/*
Template Name: Home
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/header' ) ); ?>


<section class="hero">
	<div class="orange-block">
		<h1 class="offscreen">Holmes</h1>
		<h2><?php the_field('hero_headline'); ?></h2>
		<p><?php the_field('hero_copy'); ?></p>
	</div>
</section>

<section id="about-us">
	<div class="container">
		<h2 class="offscreen">About Us</h2>
		<?php the_field('about_us'); ?>
	</div>
</section>

<!-- This one repeats -->
<?php if( have_rows('vertical') ):

 	// loop through the rows of data
    while ( have_rows('vertical') ) : the_row(); ?>
		<section id="holmes-structures" class="vertical">
			<picture class="feature-img">
				<!--[if IE 9]><video style="display: none;"><![endif]-->
					<source srcset="<?php the_sub_field('featured_image_desktop') ?>" media="(min-width: 800px)" />
					<img srcset="<?php the_sub_field('featured_image_mobile') ?>" alt="">
				<!--[if IE 9]></video><![endif]-->
				<!--[if lte IE 9]><img src="<?php the_sub_field('featured_image_desktop') ?>" alt=""><![endif]-->
			</picture>
			<div class="copy">
				<div class="block">
					<h2>
						<img src="<?php the_sub_field('vertical_name_image') ?>" alt="<?php the_sub_field('vertical_name') ?>" />
					</h2>
					<?php the_sub_field('copy') ?>
				</div>
			</div>
		</section>
	<?php endwhile;
endif; ?>
<!--  -->

<section id="contact-us">
	<div class="third">
		<h2>Contact Us</h2>
	</div>

	<div class="third">
		<a href="#" class="arrow-link" target="_blank">Holmes Group Ltd.</a>
		<p>
			Level 2, Tower Centre
			50 Customhouse Quay
			Po Box 942
			Wellington 6140
			New Zealand
			T: +64 3 366 3366
		</p>
	</div>

	<div class="third">
		<a href="#" class="arrow-link" target="_blank">Holmes Structures</a>
		<a href="#" class="arrow-link" target="_blank">Holmes Consulting</a>
		<a href="#" class="arrow-link" target="_blank">Holmes Fire</a>
		<a href="#" class="arrow-link" target="_blank">Holmes Solutions</a>
		<a href="#" class="arrow-link" target="_blank">Holmes Farsight</a>
	</div>
</section>

<?php Starkers_Utilities::get_template_parts( array( 'parts/footer' ) ); ?>
