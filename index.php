<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Wordpress Boilerplate Theme
 * @since 		Wordpress Boilerplate Theme 1.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/header' ) ); ?>

<section class="hero">
	<h1 class="offscreen">Holmes</h1>
	<h2>Engineering Excellence</h2>
	<p>Client objectives and user needs are at the core of our decision-making. By being objective oriented—not rule bound—engineering becomes more meaningful, with design as an integral, collaborative, vital process of getting things right.</p>
</section>

<section id="about-us">
	<h2 class="offscreen">About Us</h2>
	<p>Holmes Group is an organisation of engineering and design specialists, each independently expert in their fields that work together as an integrated whole.</p>
	<p>Founded over 60 years ago in New Zealand and now spanning the Paciﬁc Rim, our 300+ professionals deliver creative and practical solutions to our clients’ most exacting & dynamic challenges.</p>
	<p>From conceptualization through commercialization, our ﬁrms rigorously exercise the technical disciplines of structural, ﬁre, civil, mechanical and electrical engineering. And always with a sense of inspired practicality.</p>
	<p>Holmes Group companies share a culture of curiosity. Our common bond is the desire to explore and discover excellence in engineered solutions and to share the delight in its attainment.</p>
</section>

<!-- This one repeats -->
<section id="holmes-consulting" class="img-alt">
	<img src="" alt="" />
	<h2>Holmes</h2>
	<p>Our experience in engineering for challenging seismic zones is peerless. We combine rigorous thinking, original technologies and Kiwi ingenuity—finding new and better ways to design robust, resilient structures. Ever positive, and absolutely committed to leading new standards of analysis and design, we are the creative alternative to everyday engineering. With a substantial portfolio of signature projects, Holmes Consulting is trusted to deliver outstanding structural and civil designs all over the world.</p>
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
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer' ) ); ?>
