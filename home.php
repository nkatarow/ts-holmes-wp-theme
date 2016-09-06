<?php
/*
Template Name: Home
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/header' ) ); ?>


<section class="hero">
	<div class="orange-block">
		<h1 class="offscreen">Holmes</h1>
		<h2>Engineering Excellence</h2>
		<p>Client objectives and user needs are at the core of our decision-making. By being objective oriented—not rule bound—engineering becomes more meaningful, with design as an integral, collaborative, vital process of getting things right.</p>
	</div>
</section>

<section id="about-us">
	<div class="container">
		<h2 class="offscreen">About Us</h2>
		<?php the_field('about_us'); ?>
	</div>
</section>

<!-- This one repeats -->
<section id="holmes-consulting" class="img-alt">
	<img src="" alt="" />
	<h2>Holmes</h2>
	<p><span class="large-gray"> Our experience in engineering for challenging seismic zones is peerless. We combine rigorous thinking, original technologies and Kiwi ingenuity—finding new and better ways to design robust, resilient structures.</span></p>
	<p>Ever positive, and absolutely committed to leading new standards of analysis and design, we are the creative alternative to everyday engineering. With a substantial portfolio of signature projects, Holmes Consulting is trusted to deliver outstanding structural and civil designs all over the world.</p>
	<a href="#" class="arrow-link">Learn more about Holmes Consulting</a>
</section>
<!--  -->

<section id="holmes-structures" class="img-alt">
	<img src="" alt="" />
	<h2>Holmes Structures</h2>
	<p>Our experience in engineering for challenging seismic zones is peerless. We combine rigorous thinking, original technologies and Kiwi ingenuity—finding new and better ways to design robust, resilient structures. Ever positive, and absolutely committed to leading new standards of analysis and design, we are the creative alternative to everyday engineering. With a substantial portfolio of signature projects, Holmes Consulting is trusted to deliver outstanding structural and civil designs all over the world.</p>
	<a href="#" class="arrow-link">Learn more about Holmes Consulting</a>
</section>
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
