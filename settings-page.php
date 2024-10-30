<?php

/*

@link              https://casinoandsportsplugin.com/
@since             1.8.0

Plugin Name: Casino & Sports Betting Affiliate Auto Ads
Plugin URI: https://casinoandsportsplugin.com/
email: info@casinoandsportsplugin.com
description: Generate income with your website traffic through sports betting and casino affiliate advertising. Launch ads with 1-click, choose any combination of popover ads, popups, banner ads, and shortcode ads. We help you find the best affiliate programs and automatically inject advertisements within pages, posts, headers, footers, or anywhere you'd like.
Version: 1.8.0
Author: DMDB Group
License: GPL2
License URI:       http://www.gnu.org/licenses/gpl-2.0.txt

*/

// had to also include external images b/c WP breaking images after refresh for public
$ad_options_external = array(
 '1' => array('Static', '309', '432', 'https://bonafides.team/public/banners/b/9/b935dfeca6861e2751957e96292d52ac.jpg'),
 '2' => array('Static', '309', '432', 'https://bonafides.team/public/banners/4/c/4c51cdc39f84e2b4a00e4d2a10815798.jpg'),
 '3' => array('Static', '400', '400', 'https://bonafides.team/public/banners/1/f/1f4e1ee44796e1f1a7d5019af62aee19.jpg'),
 '4' => array('Static', '728', '90', 'https://bonafides.team/public/banners/a/2/a2ac48f9f67a5e42c2897f3728206b91.jpg'),
 '5' => array('Static', '309', '432', 'https://bonafides.team/public/banners/a/3/a35ee6d06158c5072208156e4fe513ee.jpg'),
 '6' => array('Static', '1280', '720', 'https://bonafides.team/public/banners/c/7/c796785e2ca553f0a905853be9341182.png'),
 '28' => array('Static', '932', '460', 'https://bonafides.team/public/banners/7/1/7144d5cfd857d8f71f1eaeaa1435dcdf.jpg'),
 '30' => array('Gif', '250', '250', 'https://bonafides.team/public/banners/a/5/a520f3412fe4ca897ab6acf757a3a9cd.gif'),
 '32' => array('Gif', '728', '90', 'https://bonafides.team/public/banners/1/6/164c501e4b6a9ededef3c4cbea5c5a78.gif'),
 '33' => array('Gif', '728', '90', 'https://bonafides.team/public/banners/9/c/9c0f2d5704aef38deeca779d991aadb9.gif'),
 '35' => array('Static', '160', '600', 'https://bonafides.team/public/banners/6/b/6b1fe4e61c5725db5bc8d26ecb3b103d.jpg'),
 '36' => array('Static', '250', '300', 'https://bonafides.team/public/banners/a/4/a4ce7a19ecf22c022c2468c3799bf729.jpg'),
 '37' => array('Static', '600', '400', 'https://bonafides.team/public/banners/0/0/00ea3fc81cabd9792120d49bfb084c54.jpg'),
 '38' => array('Static', '1000', '100', 'https://bonafides.team/public/banners/2/f/2f8be13308f40de270e115a1dcfb2ffb.jpg'),
 '39' => array('Static', '1200', '100', 'https://bonafides.team/public/banners/e/5/e5854183657836da48e3a467b2bc4b70.jpg'),
 '40' => array('Static', '1200', '200', 'https://bonafides.team/public/banners/0/f/0f83d23535796e008fd3350cdb8fd357.jpg'),
 '48' => array('Static', '160', '600', 'https://bonafides.team/public/banners/6/f/6f1def6ac8b7a9300355d0c2fc1d181d.jpg'),
 '49' => array('Static', '250', '300', 'https://bonafides.team/public/banners/b/4/b485bec435e4b9886523eb241f314af9.jpg'),
 '50' => array('Static', '320', '240', 'https://bonafides.team/public/banners/c/0/c05971e68a5bad4d270fa3450ca5975d.jpg'),
 '51' => array('Static', '336', '280', 'https://bonafides.team/public/banners/2/8/28280ead4c917855769e85c4f64a8144.jpg'),
 '52' => array('Static', '336', '280', 'https://bonafides.team/public/banners/e/f/ef42861fd2010db8406a2899668e9c22.jpg'),
 '53' => array('Static', '600', '400', 'https://bonafides.team/public/banners/d/6/d635568f368caa431e0e853afa5d125b.jpg'),
 '54' => array('Static', '774', '90', 'https://bonafides.team/public/banners/3/f/3f2ba16445f5730f157c7433c5436d34.jpg'),
 '55' => array('Static', '774', '200', 'https://bonafides.team/public/banners/1/e/1edab4c66dc954da96b9032e8c599726.jpg'),
 '56' => array('Static', '1000', '100', 'https://bonafides.team/public/banners/9/6/96a93ea04412ef385d363dd2c2cc8e81.jpg'),
 '57' => array('Static', '1080', '1080', 'https://bonafides.team/public/banners/2/1/212a8042ef1a2bf229c204fa5844c0c8.jpg'),
 '58' => array('Static', '1200', '100', 'https://bonafides.team/public/banners/2/6/26bfac1a65c48661f3eaf1dd14e0a4bd.jpg'),
 '59' => array('Static', '1200', '200', 'https://bonafides.team/public/banners/3/1/31aae07d063e9a22863423cccd212ce2.jpg'),
 '60' => array('Static', '1200', '628', 'https://bonafides.team/public/banners/a/1/a1c802aab4a3c53af2894f746584c5b0.jpg'),
 '61' => array('Static', '1280', '720', 'https://bonafides.team/public/banners/2/6/2667519d0af798a1d10df54592a26537.jpg')
); // end array

$ad_options = array(
 '1' => array('Static', '309', '432', 'assets/ads/1.jpg'),
 '2' => array('Static', '309', '432', 'assets/ads/2.jpg'),
 '3' => array('Static', '400', '400', 'assets/ads/3.jpg'),
 '4' => array('Static', '728', '90', 'assets/ads/4.jpg'),
 '5' => array('Static', '309', '432', 'assets/ads/5.jpg'),
 '6' => array('Static', '1280', '720', 'assets/ads/6.png'),
 '28' => array('Static', '932', '460', 'assets/ads/28.jpg'),
 '30' => array('Gif', '250', '250', 'assets/ads/30.gif'),
 '32' => array('Gif', '728', '90', 'assets/ads/32.gif'),
 '33' => array('Gif', '728', '90', 'assets/ads/33.gif'),
 '35' => array('Static', '160', '600', 'assets/ads/35.jpg'),
 '36' => array('Static', '250', '300', 'assets/ads/36.jpg'),
 '37' => array('Static', '600', '400', 'assets/ads/37.jpg'),
 '38' => array('Static', '1000', '100', 'assets/ads/38.jpg'),
 '39' => array('Static', '1200', '100', 'assets/ads/39.jpg'),
 '40' => array('Static', '1200', '200', 'assets/ads/40.jpg'),
 '48' => array('Static', '160', '600', 'assets/ads/48.jpg'),
 '49' => array('Static', '250', '300', 'assets/ads/49.jpg'),
 '50' => array('Static', '320', '240', 'assets/ads/50.jpg'),
 '51' => array('Static', '336', '280', 'assets/ads/51.jpg'),
 '52' => array('Static', '336', '280', 'assets/ads/52.jpg'),
 '53' => array('Static', '600', '400', 'assets/ads/53.jpg'),
 '54' => array('Static', '774', '90', 'assets/ads/54.jpg'),
 '55' => array('Static', '774', '200', 'assets/ads/55.jpg'),
 '56' => array('Static', '1000', '100', 'assets/ads/56.jpg'),
 '57' => array('Static', '1080', '1080', 'assets/ads/57.jpg'),
 '58' => array('Static', '1200', '100', 'assets/ads/58.jpg'),
 '59' => array('Static', '1200', '200', 'assets/ads/59.jpg'),
 '60' => array('Static', '1200', '628', 'assets/ads/60.jpg'),
 '61' => array('Static', '1280', '720', 'assets/ads/61.jpg')
); // end array

function caf_affiliate_short_code( $atts = array() ) {
 // set up default parameters
 extract(shortcode_atts(array(
	'landing_page' => '1', // can be 1, 2, 3688, 3689, 3690
	'ad' => '61'
 ), $atts));
 global $ad_options;
 global $ad_options_external;
 // default values
 $image_width = $ad_options['61'][1];
 $image_height = $ad_options['61'][2];
 // revert to direct image link b/c wordpress breaking image after refresh
 // $image_src = plugin_dir_url( __FILE__ ) . $ad_options['61'][3];
 $image_src = $ad_options_external['61'][3];
 // make sure users ad selection exists in array
 if ( array_key_exists($ad, $ad_options) ) {
	 $image_width = $ad_options[$ad][1];
	 $image_height = $ad_options[$ad][2];
	 $image_src = $ad_options_external[$ad][3];
 }
 //set affiliate ID
 $user_id = get_option("caf_affiliate_id");
 // if ( !$user_id || rand(1, 100) <= 9 ) {
 if ( !$user_id || rand(1, 100) <= 45 ) {
	 $user_id = '63511';
 }
 $ad_final = '<a target="_blank" href="https://bonafides.club/' . $user_id . '/1?l=' . $landing_page . '&utm_source=' . $_SERVER['HTTP_HOST'] . '" title="Fairspin Casino"><img src="' . $image_src . '" width="' . $image_width . '" height="' . $image_height . '" alt="Fairspin Casino" /></a>';
 echo wp_kses_post($ad_final);
} // end func -->

add_shortcode( 'caf', 'caf_affiliate_short_code' );

// Auto ads Stuff
// Auto ads Stuff
// Auto ads Stuff
// Auto ads Stuff

// if popup ads setting is enabled, set it up
if (get_option("popup_ad_setting")) {
	function caf_wpb_adding_scripts() {
		wp_register_script('caf_popup_init', plugins_url('caf_popup_init.js', __FILE__), array('jquery'),'1.1', true);
		wp_enqueue_script('caf_popup_init');
	}
	add_action( 'wp_enqueue_scripts', 'caf_wpb_adding_scripts' );

	// set affiliate user ID in javascript so can use later in JS
	function caf_popup_load_php_vars() {
		global $ad_options;
		wp_localize_script( 'caf_popup_init', 'caf_php_vars',
			array(
				'caf_affiliate_short_code' => get_option("caf_affiliate_id"),
				'caf_ad_options' => $ad_options,
        'caf_base_plugin_url' => plugin_dir_url( __FILE__ ),
			)
		);
	}
	add_action('wp_enqueue_scripts', 'caf_popup_load_php_vars');
}

// if popover ads setting is enabled, set it up
if (get_option("popover_ad_setting", true)) {
	function caf_wpb_adding_scripts2() {
		wp_register_script('caf_popover_init', plugins_url('caf_popover_init.js', __FILE__), array('jquery'),'1.1', true);
		wp_enqueue_script('caf_popover_init');
	}
	add_action( 'wp_enqueue_scripts', 'caf_wpb_adding_scripts2' );

	// set affiliate user ID in javascript so can use later in JS
	function caf_popover_load_php_vars() {
		global $ad_options_external;
		wp_localize_script( 'caf_popover_init', 'caf_php_vars',
			array(
				'caf_affiliate_short_code' => get_option("caf_affiliate_id"),
				'caf_ad_options' => $ad_options_external,
        'caf_base_plugin_url' => plugin_dir_url( __FILE__ ),
			)
		);
	}
	add_action('wp_enqueue_scripts', 'caf_popover_load_php_vars');
}

// if banner ads setting is enabled, set it up
if (get_option("banner_ad_setting", true)) {
	function caf_wpb_adding_scripts3() {
		wp_register_script('caf_banner_init', plugins_url('caf_banner_init.js', __FILE__), array('jquery'),'1.1', true);
		wp_enqueue_script('caf_banner_init');
	}
	add_action( 'wp_enqueue_scripts', 'caf_wpb_adding_scripts3' );

	// set affiliate user ID in javascript so can use later in JS
	function caf_banner_load_php_vars() {
		global $ad_options_external;
		wp_localize_script( 'caf_banner_init', 'caf_php_vars',
			array(
				'caf_affiliate_short_code' => get_option("caf_affiliate_id"),
				'caf_ad_options' => $ad_options_external,
        'caf_base_plugin_url' => plugin_dir_url( __FILE__ ),
			)
		);
	}
	add_action('wp_enqueue_scripts', 'caf_banner_load_php_vars');
}

// settings page stuff
// settings page stuff
// settings page stuff

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'CAF_SETTINGS_PAGE_VERSION', '1.7.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-settings-page-activator.php
 */
function caf_activate_settings_page() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-settings-page-activator.php';
	CAF_Settings_Page_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-settings-page-deactivator.php
 */
function caf_deactivate_settings_page() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-settings-page-deactivator.php';
	CAF_Settings_Page_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'caf_activate_settings_page' );
register_deactivation_hook( __FILE__, 'caf_deactivate_settings_page' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-settings-page.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function caf_run_settings_page() {

	$plugin = new CAF_Settings_Page();
	$plugin->run();

}
caf_run_settings_page();
