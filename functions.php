<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Wordpress Boilerplate Theme
 	 * @since 		Wordpress Boilerplate Theme 1.0
	 */

	/* ========================================================================================================================

	Required external files

	======================================================================================================================== */

	require_once( 'external/starkers-utilities.php' );

	/* ========================================================================================================================

	Theme specific settings

	Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme

	======================================================================================================================== */

	add_theme_support('post-thumbnails');

	// register_nav_menus(array('primary' => 'Primary Navigation'));
	function register_my_menu() {
	  register_nav_menu('primary-navigation',__( 'Primary Navigation' ));
	}
	add_action( 'init', 'register_my_menu' );

	/* ========================================================================================================================

	Actions and Filters

	======================================================================================================================== */

	// I'm going to do this in the header/footer template instead.
	// add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );

	add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );

	/* ========================================================================================================================

	TinyMCE Custom Styles

	======================================================================================================================== */

	// Callback function to insert 'styleselect' into the $buttons array
	function my_mce_buttons_2( $buttons ) {
		array_unshift( $buttons, 'styleselect' );
		return $buttons;
	}

	// Only allow desired block level elements
	function editmce($arr){
	    $arr['block_formats'] = 'Paragraph=p;Heading 2=h2;Heading 3=h3';
	    return $arr;
	}

	// Callback function to filter the MCE settings
	function my_mce_before_init_insert_formats( $init_array ) {
		// Define the style_formats array
		$style_formats = array(
			// Each array child is a format with it's own settings
			array(
				'title' => 'Large Orange',
				'inline' => 'span',
				'classes' => 'large-orange',
				'wrapper' => true,
			),
			array(
				'title' => 'Large Gray',
				'inline' => 'span',
				'classes' => 'large-gray',
				'wrapper' => true,
			),
			array(
				'title' => 'Arrow Link',
				'inline' => 'span',
				'classes' => 'arrow-link',
				'wrapper' => true,
			)
		);
		// Insert the array, JSON ENCODED, into 'style_formats'
		$init_array['style_formats'] = json_encode( $style_formats );
		return $init_array;
	}

	// Register our callback to the appropriate filter
	add_filter('mce_buttons_2', 'my_mce_buttons_2');
	add_filter('tiny_mce_before_init', 'editmce');
	add_filter('tiny_mce_before_init', 'my_mce_before_init_insert_formats');


	/* ========================================================================================================================

	Custom Post Types - include custom post types and taxonimies here e.g.

	e.g. require_once( 'custom-post-types/your-custom-post-type.php' );

	======================================================================================================================== */



	/* ========================================================================================================================

	Scripts

	======================================================================================================================== */

	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	// function starkers_script_enqueuer() {
	// 	wp_register_script( 'site', get_template_directory_uri().'/_ui/compiled/main.js', array( 'jquery' ) );
	// 	wp_enqueue_script( 'site' );

	// 	wp_register_style( 'screen', get_template_directory_uri().'/_ui/compiled/main.css', '', '', 'screen' );
 	//      wp_enqueue_style( 'screen' );
	// }

	/* ========================================================================================================================

	Comments

	======================================================================================================================== */

	/**
	 * Custom callback for outputting comments
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>
		<li>
			<article id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment ); ?>
				<h4><?php comment_author_link() ?></h4>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
				<?php comment_text() ?>
			</article>
		<?php endif;
	}

	/* ========================================================================================================================

	Allow SVG uploads

	======================================================================================================================== */

	function cc_mime_types($mimes) {
	  $mimes['svg'] = 'image/svg+xml';
	  return $mimes;
	}
	add_filter('upload_mimes', 'cc_mime_types');
