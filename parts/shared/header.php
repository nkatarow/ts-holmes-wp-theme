<!DOCTYPE HTML>
<html>
    <head>
        <title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Remove if you're not building a responsive site. (But then why would you do such a thing?) -->
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<meta name="description" content=""/>

		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="/_ui/img/favicons/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/_ui/img/favicons/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/_ui/img/favicons/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/_ui/img/favicons/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon-precomposed" sizes="60x60" href="/_ui/img/favicons/apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="/_ui/img/favicons/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="/_ui/img/favicons/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="/_ui/img/favicons/apple-touch-icon-152x152.png" />
		<link rel="icon" type="image/png" href="/_ui/img/favicons/favicon-196x196.png" sizes="196x196" />
		<link rel="icon" type="image/png" href="/_ui/img/favicons/favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/png" href="/_ui/img/favicons/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="/_ui/img/favicons/favicon-16x16.png" sizes="16x16" />
		<link rel="icon" type="image/png" href="/_ui/img/favicons/favicon-128.png" sizes="128x128" />
		<meta name="application-name" content="Bridge Partners Consulting"/>
		<meta name="msapplication-TileColor" content="#FFFFFF" />
		<meta name="msapplication-TileImage" content="/_ui/img/favicons/mstile-144x144.png" />
		<meta name="msapplication-square70x70logo" content="/_ui/img/favicons/mstile-70x70.png" />
		<meta name="msapplication-square150x150logo" content="/_ui/img/favicons/mstile-150x150.png" />
		<meta name="msapplication-wide310x150logo" content="/_ui/img/favicons/mstile-310x150.png" />
		<meta name="msapplication-square310x310logo" content="/_ui/img/favicons/mstile-310x310.png" />

		<meta property="og:title" content="Holmes Group Limited"/>
		<meta property="og:description" content="" />
		<meta property="og:url" content="http://holmesgrouplimited.com/"/>
		<meta property="og:site_name" content="Holmes Group Limited"/>
		<meta property="og:type" content="website"/>
		<meta property="og:image" content="http://holmesgrouplimited.com/_ui/img/global/bridge-partners-share.png"/>

		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@holmesgroup">
		<meta name="twitter:title" content="Holmes Group Limited">
		<meta name="twitter:description" content="">
		<meta name="twitter:image:src" content="http://holmesgrouplimited.com/_ui/img/global/bridge-partners-share.png">
		<meta name="twitter:domain" content="http://holmesgrouplimited.com/">


        <?php wp_head(); ?>
        <?php
            // Figure out what our server name is
            $host = $_SERVER['HTTP_HOST'];

            // If it's the dev environment...
            if ($host == 'holmes.dev') {
        ?>
            <!-- Then provide the regular compiled CSS/JS files. -->
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/_ui/compiled/main.css" type="text/css" media="all">
            <script src="<?php echo get_template_directory_uri(); ?>/_ui/compiled/header-scripts.js"></script>
        <?php } else { ?>
            <!-- Otherwise, provide the compiled and minified CSS file. -->
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/main.min.css" type="text/css" media="all">

            <!-- And the header scripts compiled and uglified -->
            <script src="<?php echo get_template_directory_uri(); ?>/dist/js/header-scripts.min.js"></script>
        <?php } ?>

		<style media="screen">
			/* REMOVE IF ADDING ADMIN BAR BEFORE LAUNCH */
			html { margin-top: 0 !important; }
			* html body { margin-top: 0 !important; }
			@media screen and ( max-width: 782px ) {
				html { margin-top: 0 !important; }
				* html body { margin-top: 0 !important; }
			}
		</style>
	</head>
    <body <?php body_class(); ?>>
        <header id="header">
            <a href="#header" class="logo"><?php bloginfo( 'name' ); ?></a>

			<nav id="primary" class="nav">
				<?php wp_nav_menu( array( 'theme_location' => 'primary-navigation' ) ); ?>
			</nav>
         </header>
