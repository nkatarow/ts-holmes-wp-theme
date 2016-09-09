<?php
/*
Template Name: Home
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/header' ) ); ?>


<section class="hero">
	<div class="orange-block">
		<h1 class="offscreen">Holmes</h1>
		<h2 class="reveal"><?php the_field('hero_headline'); ?></h2>
		<p class="reveal"><?php the_field('hero_copy'); ?></p>
	</div>
</section>

<section id="about-us">
	<div class="container reveal">
		<h2 class="offscreen">About Us</h2>
		<?php the_field('about_us'); ?>
	</div>
</section>

<!-- Repeat -->
<?php if( have_rows('vertical') ):
 	// loop through the rows of data
    while ( have_rows('vertical') ) : the_row();
		$blob = get_sub_field('vertical_name');
		$sectionId = str_replace(' ', '-', strtolower($blob));
	?>
		<section id="<?php echo $sectionId ?>" class="vertical">
			<picture class="feature-img reveal">
				<source srcset="<?php the_sub_field('featured_image_desktop') ?>" media="(min-width: 800px)">
				<source srcset="<?php the_sub_field('featured_image_mobile') ?>" media="(max-width: 799px)">
				<img srcset="<?php the_sub_field('featured_image_desktop') ?>" alt="">
			</picture>

			<div class="copy">
				<div class="block reveal">
					<h2>
						<img src="<?php the_sub_field('vertical_name_image') ?>" alt="<?php the_sub_field('vertical_name') ?>" />
					</h2>
					<?php the_sub_field('copy') ?>
				</div>
			</div>
		</section>
	<?php endwhile;
endif; ?>
<!-- END: Repeat -->

<section id="contact-us" style="background-image: url(<?php the_field('contact_background_image') ?>)">
	<div class="container">
		<div class="third reveal">
			<h2 class="section-head">Contact Us</h2>
		</div>

		<div class="third reveal">
			<?php the_field('contact_center_column') ?>
		</div>

		<div class="third reveal">
			<?php the_field('contact_third_column') ?>
		</div>
	</div>
</section>

<?php Starkers_Utilities::get_template_parts( array( 'parts/footer' ) ); ?>
