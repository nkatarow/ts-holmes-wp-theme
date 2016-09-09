	<footer>
		<div class="container reveal">
			<a href="/" class="logo">
				<span class="offscreen"><?php bloginfo( 'name' ); ?></span>
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 viewBox="0 0 113 71" style="enable-background:new 0 0 113 71;" xml:space="preserve">
				<path class="st1" d="M34.9,52c-2.1,0-3.5,1.7-3.5,3.7c0,2,1.4,3.7,3.5,3.7c2.1,0,3.5-1.7,3.5-3.7C38.4,53.7,37,52,34.9,52z M0,0v71
					h113V0H0z M25.3,63h-4.9v-8.4H13V63H8.1V41.9H13v8.5h7.3v-8.5h4.9V63z M34.9,63.4c-5,0-8.1-3.5-8.1-7.7s3.1-7.7,8.1-7.7
					c5.1,0,8.1,3.5,8.1,7.7S40,63.4,34.9,63.4z M49.2,63h-4.6V41.9h4.6V63z M74.4,63H70v-7.8c0-2-0.7-3.1-2.2-3.1
					c-1.4,0-2.5,0.9-2.5,3.7V63h-4.5v-7.9c0-2-0.6-3.1-2.2-3.1c-1.4,0-2.5,0.9-2.5,3.8V63h-4.5V48.4l4.5,2.1c0.6-1.4,2.2-2.5,4.2-2.5
					c2.6,0,3.8,1.1,4.4,2.6c0.8-1.5,2.4-2.6,4.6-2.6c4.3,0,5.1,2.9,5.1,5.9V63z M91.1,56.8H80.6c0.1,1.7,0.8,3.2,3.2,3.2
					c0.8,0,1.4-0.2,1.9-0.5c0.4-0.3,0.7-0.7,1-1.1c0.4,0.2,2.9,1.4,3.7,1.7c-1.1,1.8-3.4,3.1-6.6,3.1c-5.1,0-7.9-3.2-7.9-7.7
					c0-4.2,2.7-7.7,7.8-7.7c4.6,0,7.5,3.1,7.5,6.6C91.3,55.3,91.3,55.9,91.1,56.8z M98.8,63.4c-3.3,0-5.5-1.2-6.4-3.3
					c0,0,2.9-1.4,3.4-1.6c0.8,1.5,1.7,1.8,3.1,1.8c1.1,0,1.9-0.4,1.9-1.4c0-1.1-1.2-1.3-3.9-2.2c-2.4-0.8-4.5-1.4-4.5-4.2
					c0-3,2.5-4.4,6.5-4.4c3.2,0,5.1,1.2,5.9,2.9c0,0-3,1.4-3.4,1.6c-0.3-0.5-1.2-1.5-2.7-1.6c-0.9,0-1.7,0.4-1.7,1.3
					c0,1.1,1.3,1.2,3.7,2c2.6,0.8,4.7,1.4,4.7,4.3C105.4,62.1,102.5,63.4,98.8,63.4z M83.7,51.1c-1.8,0-3.1,1.1-3.1,3h6.1
					C86.7,52.3,85.5,51.1,83.7,51.1z"/>
				</svg>
			</a>

			<ul>
				<li>Australia</li>
				<li>Netherlands</li>
				<li>New Zealand</li>
				<li>USA</li>
			</ul>

			<small>&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. <a href="mailto:info@holmes.com">info@holmes.com</a> All rights reserved.</small>
		</div>
	</footer>

    <?php
        // Figure out what our server name is
        $host = $_SERVER['HTTP_HOST'];

        // If it's the dev environment...
        if ($host == 'holmes.dev') {
    ?>
        <!-- Provide the compiled JS file. -->
        <script src="<?php echo get_template_directory_uri(); ?>/_ui/compiled/footer-scripts.js"></script>

    <?php } else { ?>
        <!-- Otherwise, provide the compiled and uglified JS file. -->
        <script src="<?php echo get_template_directory_uri(); ?>/_ui/dist/footer-scripts.min.js"></script>
    <?php } ?>

	<!--[if IE]>
	  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/_ui/css/IE.css" />
	<![endif]-->
    </body>
</html>
