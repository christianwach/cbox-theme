<?php

// Options page title and menu title
function cbox_menu_title() {
	return __( 'CBox Theme Options', 'cbox' );
}
add_filter( 'infinity_dashboard_menu_setup_page_title', 'cbox_menu_title' );
add_filter( 'infinity_dashboard_menu_setup_menu_title', 'cbox_menu_title' );

/**
 * Custom jQuery Buttons
 */
function cbox_custom_buttons()
{
	// get button color option
	$cbox_button_color = infinity_option_get( 'cbox_button_color' );

	// render script tag ?>
	<script>
	// Adds color button classes to buttons depening on preset style/option
	jQuery(document).ready(function() {
			//buttons
			jQuery('.bp-primary-action,div.group-button').addClass('button white');
			jQuery('.generic-button .acomment-reply,div.not_friends').addClass('button white');
			jQuery('.bp-secondary-action, .view-post,.comment-reply-link').addClass('button white');
			jQuery('.standard-form .button,.not_friends,.group-button,.dir-form .button,.not-following,#item-buttons .group-button').addClass('<?php echo $cbox_button_color ?>');
			jQuery('input[type="submit"],.submit,#item-buttons .generic-button,#aw-whats-new-submit,.activity-comments submit').addClass('button <?php echo $cbox_button_color ?>');
			jQuery('div.pending,.dir-list .group-button,.dir-list .friendship-button').removeClass('<?php echo $cbox_button_color ?>');
			jQuery('#previous-next,#upload, div.submit,div,reply,#groups_search_submit').removeClass('<?php echo $cbox_button_color ?> button');
			jQuery('div.pending,.dir-list .group-button,.dir-list .friendship-button').addClass('white');
			jQuery('#upload').addClass('button green');
	});
	</script><?php
}
add_action( 'close_body', 'cbox_custom_buttons' );

/**
 * Compiler configuration callback, DO NOT TOUCH
 */
function infinity_compiler_config()
{
	return array(
		'output' => 'cbox-build',
		'refs' => array(
			'infinity' => 'buddypress',
			'cbox-theme' => 'master'
	));
}

/*
 * Include custom functionality.
 *
 * These will eventually become extensions!
 */

// Slider
if ( is_main_site() )
{
	// load metaboxes class
	function cbox_custom_init_cmb() {
		if ( !class_exists( 'cmb_Meta_Box' ) ) {
			require_once( 'metaboxes/init.php' );
		}
	}
	add_action( 'init', 'cbox_custom_init_cmb', 9999 );

	// load slider setup
	require_once( 'feature-slider/setup.php' );
}

// Template Tags

if ( false === function_exists( 'the_post_name' ) ) {
	/**
	* Echo the post name (slug)
	*/
	function the_post_name()
	{
		// use global post
		global $post;

		// post_name property is the slug
		echo $post->post_name;
	}
}

?>
