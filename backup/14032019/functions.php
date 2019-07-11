<?php 


// disable Gutenberg for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);


require_once("inc/func-customposts.php");
require_once("inc/func-taxonomy.php");
require_once("inc/func-widgets.php");

/* ========================================================================
	Register menus
=========================================================================*/
register_nav_menus( array(
	'main-nav'		=> 'Main WP navigation',
	'big-nav'		=> 'Meta navigation',
	'fixed-nav'		=> 'Fixed navigation'
) );

/* ========================================================================
	END: Register menus
=========================================================================*/



/* ========================================================================
	Menu acf pozivanje polja 
=========================================================================*/

add_filter('wp_nav_menu_items', 'my_wp_nav_menu_items', 10, 2);

function my_wp_nav_menu_items( $items, $args ) {
	
	// get menu
	$menu = wp_get_nav_menu_object($args->menu);
	
	// modify primary only
	if( $args->theme_location == 'top' ) {
		
		// vars
		$logo = get_field('logo', $menu);
		$color = get_field('color', $menu);
		
		// prepend logo
		$html_logo = '<li class="menu-item-logo"><a href="'.home_url().'"><img src="'.$logo['url'].'" alt="'.$logo['alt'].'" /></a></li>';
		
		// append style
		$html_color = '<style type="text/css">.navigation-top{ background: '.$color.';}</style>';
		
		// append html
		$items = $html_logo . $items . $html_color;
		
	}
	// return
	return $items;
}

/* ========================================================================
	END: Menu acf pozivanje polja 
=========================================================================*/



/* ========================================================================
	Podešavanje teme (Theme Settings)
=========================================================================*/

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings General',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-settings-general',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Settings Header',
			'menu_title'	=> 'Header',
			'parent_slug'	=> 'theme-settings-general',
		));
		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Settings Footer',
			'menu_title'	=> 'Footer',
			'parent_slug'	=> 'theme-settings-general',
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Settings Analytics',
			'menu_title'	=> 'Website Analytic',
			'parent_slug'	=> 'theme-settings-general',
		));	
}

/* ========================================================================
	END: Podešavanje teme (Theme Settings)
=========================================================================*/



/* ========================================================================
	ADD CUSTOM Thumbnail SIZES
=========================================================================*/

function add_image_sizes()
{
	 if ( function_exists( 'add_image_size' ) ) { 
		   add_theme_support( 'post-thumbnails' ); // This feature enables post-thumbnail support for a theme
		   add_image_size( 'img_four_three', 480, 360, true);
		   add_image_size( 'img_four_three_min', 120, 90, true);
		   add_image_size( 'img_sixteen_nine', 480, 270, true); 
		   add_image_size( 'img_150x150', 150, 150, true);
		   add_image_size( 'img_200x200', 200, 200, true);
		   add_image_size( 'img_300x320', 300, 320, true);
		   add_image_size( 'img_350x350', 350, 350, true);
		   // Favicon sizes
		   add_image_size( 'favicon384', 384, 384, true); 
		   add_image_size( 'favicon192', 192, 192, true);
		   add_image_size( 'favicon180', 180, 180, true);
		   add_image_size( 'favicon32', 32, 32, true);
		   add_image_size( 'favicon16', 16, 16, true);
	 }
}
add_action('after_setup_theme', 'add_image_sizes');

/* ========================================================================
	END: ADD CUSTOM Thumbnail SIZES
=========================================================================*/



/* ========================================================================
	Google Maps
=========================================================================*/

function my_acf_init() {
	acf_update_setting('google_api_key', 'AIzaSyDF6WxpvlVuX0mvTdTnB0L_5T3hU8gzFnM');
}

add_action('acf/init', 'my_acf_init');

/* ========================================================================
	END: Google Maps
=========================================================================*/



/* ========================================================================
	TGM Plugin
=========================================================================*/

/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 *
 * Depending on your implementation, you may want to change the include call:
 *
 * Parent Theme:
 * require_once get_template_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 * Child Theme:
 * require_once get_stylesheet_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 * Plugin:
 * require_once dirname( __FILE__ ) . '/path/to/class-tgm-plugin-activation.php';
 */
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'flsschooltheme_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function flsschooltheme_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

	// This is an example of how to include a plugin bundled with a theme.
	// Required
		// ACF PRO
		array(
			'name'               => 'Advanced Custom Fields PRO', // The plugin name.
			'slug'               => 'advanced-custom-fields-pro', // The plugin slug (typically the folder name).
			'source'             => get_stylesheet_directory() . '/lib/plugins/advanced-custom-fields-pro.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '5.7.13', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),

		// ACF Table
		array(
			'name'               => 'Advanced Custom Fields: Table Field', // The plugin name.
			'slug'               => 'advanced-custom-fields-table-field.1.3.5', // The plugin slug (typically the folder name).
			'source'             => get_stylesheet_directory() . '/lib/plugins/advanced-custom-fields-table-field.1.3.5.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),

		// Spider Event Calendar
		array(
			'name'               => 'Spider Event Calendar', // The plugin name.
			'slug'               => 'spider-event-calendar.1.5.62', // The plugin slug (typically the folder name).
			'source'             => get_stylesheet_directory() . '/lib/plugins/spider-event-calendar.1.5.62.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),

		// WordPress Popular Posts
		array(
			'name'               => 'WordPress Popular Posts', // The plugin name.
			'slug'               => 'wordpress-popular-posts.4.2.2', // The plugin slug (typically the folder name).
			'source'             => get_stylesheet_directory() . '/lib/plugins/wordpress-popular-posts.4.2.2.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),

		// WP Google Maps
		array(
			'name'               => 'WP Google Maps', // The plugin name.
			'slug'               => 'wp-google-maps', // The plugin slug (typically the folder name).
			'source'             => get_stylesheet_directory() . '/lib/plugins/wp-google-maps.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '7.11.13', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),

	// Recommended

		// Google XML Sitemaps
		array(
			'name'               => 'Google XML Sitemaps', // The plugin name.
			'slug'               => 'google-sitemap-generator.4.1.0', // The plugin slug (typically the folder name).
			'source'             => get_stylesheet_directory() . '/lib/plugins/google-sitemap-generator.4.1.0.zip', // The plugin source.
			'required'           => false, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '4.1.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),

		// Menu Icons
		array(
			'name'               => 'Menu Icons', // The plugin name.
			'slug'               => 'menu-icons', // The plugin slug (typically the folder name).
			'source'             => get_stylesheet_directory() . '/lib/plugins/menu-icons', // The plugin source.
			'required'           => false, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '0.11.4', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),

		// Shield
		array(
			'name'               => 'Shield', // The plugin name.
			'slug'               => 'wp-simple-firewall.7.2.1', // The plugin slug (typically the folder name).
			'source'             => get_stylesheet_directory() . '/lib/plugins/wp-simple-firewall.7.2.1.zip', // The plugin source.
			'required'           => false, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '7.2.1', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),

		// SiteOrigin Widgets Bundle
		array(
			'name'               => 'SiteOrigin Widgets Bundle', // The plugin name.
			'slug'               => 'so-widgets-bundle.1.15.3', // The plugin slug (typically the folder name).
			'source'             => get_stylesheet_directory() . '/lib/plugins/so-widgets-bundle.1.15.3.zip', // The plugin source.
			'required'           => false, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '1.15.3', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),

	// This is an example of how to include a plugin from an arbitrary external source in your theme.
		// array(
		// 	'name'         => 'TGM New Media Plugin', // The plugin name.
		// 	'slug'         => 'tgm-new-media-plugin', // The plugin slug (typically the folder name).
		// 	'source'       => 'https://s3.amazonaws.com/tgm/tgm-new-media-plugin.zip', // The plugin source.
		// 	'required'     => true, // If false, the plugin is only 'recommended' instead of required.
		// 	'external_url' => 'https://github.com/thomasgriffin/New-Media-Image-Uploader', // If set, overrides default API URL and points to an external URL.
		// ),

	// This is an example of how to include a plugin from a GitHub repository in your theme.
		// This presumes that the plugin code is based in the root of the GitHub repository
		// and not in a subdirectory ('/src') of the repository.
		// array(
		// 	'name'   => 'Adminbar Link Comments to Pending',
		// 	'slug'   => 'adminbar-link-comments-to-pending',
		// 	'source' => 'https://github.com/jrfnl/WP-adminbar-comments-to-pending/archive/master.zip',
		// ),

	// This is an example of how to include a plugin from the WordPress Plugin Repository.
		// array(
		// 	'name'     => 'BuddyPress',
		// 	'slug'     => 'buddypress',
		// 	'required' => false,
		// ),

	// This is an example of the use of 'is_callable' functionality. A user could - for instance -
	// have Yoast SEO installed *or* Yoast SEO Premium. The slug would in that last case be different, i.e.
	// 'wordpress-seo-premium'.
	// By setting 'is_callable' to either a function from that plugin or a class method
	// `array( 'class', 'method' )` similar to how you hook in to actions and filters, TGMPA can still
	// recognize the plugin as being installed.
		// array(
		// 	'name'        => 'Yoast SEO',
		// 	'slug'        => 'wordpress-seo',
		// 	'is_callable' => 'wpseo_init',
		// ),

	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		/*
		'strings'      => array(
			'page_title'                      => __( 'Install Required Plugins', 'theme-slug' ),
			'menu_title'                      => __( 'Install Plugins', 'theme-slug' ),
			// translators: %s: plugin name.
			'installing'                      => __( 'Installing Plugin: %s', 'theme-slug' ),
			// translators: %s: plugin name.
			'updating'                        => __( 'Updating Plugin: %s', 'theme-slug' ),
			'oops'                            => __( 'Something went wrong with the plugin API.', 'theme-slug' ),
			'notice_can_install_required'     => _n_noop(
				// translators: 1: plugin name(s).
				'This theme requires the following plugin: %1$s.',
				'This theme requires the following plugins: %1$s.',
				'theme-slug'
			),
			'notice_can_install_recommended'  => _n_noop(
				// translators: 1: plugin name(s).
				'This theme recommends the following plugin: %1$s.',
				'This theme recommends the following plugins: %1$s.',
				'theme-slug'
			),
			'notice_ask_to_update'            => _n_noop(
				// translators: 1: plugin name(s).
				'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
				'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
				'theme-slug'
			),
			'notice_ask_to_update_maybe'      => _n_noop(
				// translators: 1: plugin name(s).
				'There is an update available for: %1$s.',
				'There are updates available for the following plugins: %1$s.',
				'theme-slug'
			),
			'notice_can_activate_required'    => _n_noop(
				// translators: 1: plugin name(s).
				'The following required plugin is currently inactive: %1$s.',
				'The following required plugins are currently inactive: %1$s.',
				'theme-slug'
			),
			'notice_can_activate_recommended' => _n_noop(
				// translators: 1: plugin name(s).
				'The following recommended plugin is currently inactive: %1$s.',
				'The following recommended plugins are currently inactive: %1$s.',
				'theme-slug'
			),
			'install_link'                    => _n_noop(
				'Begin installing plugin',
				'Begin installing plugins',
				'theme-slug'
			),
			'update_link' 					  => _n_noop(
				'Begin updating plugin',
				'Begin updating plugins',
				'theme-slug'
			),
			'activate_link'                   => _n_noop(
				'Begin activating plugin',
				'Begin activating plugins',
				'theme-slug'
			),
			'return'                          => __( 'Return to Required Plugins Installer', 'theme-slug' ),
			'plugin_activated'                => __( 'Plugin activated successfully.', 'theme-slug' ),
			'activated_successfully'          => __( 'The following plugin was activated successfully:', 'theme-slug' ),
			// translators: 1: plugin name.
			'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'theme-slug' ),
			// translators: 1: plugin name.
			'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'theme-slug' ),
			// translators: 1: dashboard link.
			'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'theme-slug' ),
			'dismiss'                         => __( 'Dismiss this notice', 'theme-slug' ),
			'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'theme-slug' ),
			'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'theme-slug' ),

			'nag_type'                        => '', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
		),
		*/
	);
	tgmpa( $plugins, $config );
}

/* ========================================================================
	END: TGM Plugin
=========================================================================*/
