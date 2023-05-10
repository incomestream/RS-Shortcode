<?php
/*
Plugin Name: ZP Shortcodes
Plugin URI: http://www.zigzagpress.com/
Description: ZigzagPress list of shortcodes.
Author: ZigzagPress
Author URI: http://www.zigzagpress.com/
Text Domain: zp-shortcodes
Domain Path: /languages/
Version: 1.0.0
License: GNU General Public License v2.0 (or later)
License URI: http://www.opensource.org/licenses/gpl-license.php
*/
/** Define our constants */
define( 'ZPS_PLUGIN_DIR', dirname( __FILE__ ) );
define( 'ZPS_PLUGIN_URL', plugin_dir_url( __FILE__ )  );
/**
 * Load textdomain
 */
add_action( 'plugins_loaded', 'zps_load_textdomain' );
function zps_load_textdomain() {
	load_plugin_textdomain( 'zp-shortcodes', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' );
}
class ZZP_Shortcodes {
    function __construct(){	
    	require_once( ZPS_PLUGIN_DIR .'/include/shortcodes.php' );
		require_once( ZPS_PLUGIN_DIR .'/include/shortcode_label.php' );
        add_action('admin_head', array(&$this, 'zps_init'));
        add_action('admin_enqueue_scripts', array(&$this, 'zps_admin_init'));
        add_action('wp_enqueue_scripts', array(&$this, 'zps_shortcode_frontend'), 5 );
	}
	
	/**
	 * Registers TinyMCE rich editor buttons
	 *
	 * @return	void
	 */
	function zps_init()
	{
		if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
			return;
	
		if ( get_user_option('rich_editing') == 'true' )
		{
			add_filter( 'mce_external_plugins', array(&$this, 'zps_add_rich_plugins') );
			add_filter( 'mce_buttons', array(&$this, 'zps_register_rich_buttons') );
		}
	}
	
	// --------------------------------------------------------------------------
	
	/**
	 * Defins TinyMCE rich editor js plugin
	 *
	 * @return	void
	 */
	function zps_add_rich_plugins( $plugin_array )
	{
		$plugin_array['zps_button'] = ZPS_PLUGIN_URL . 'assets/js/plugin.js';
		return $plugin_array;
	}
	
	// --------------------------------------------------------------------------
	
	/**
	 * Adds TinyMCE rich editor buttons
	 *
	 * @return	void
	 */
	function zps_register_rich_buttons( $buttons )
	{
		array_push( $buttons, 'zps_button' );
		return $buttons;
	}
	
	/**
	 * Enqueue Admin Scripts and Styles
	 *
	 * @return	void
	 */
	function zps_admin_init()
	{
		// css
		wp_enqueue_style( 'zp_admin_shortcode', ZPS_PLUGIN_URL . 'assets/css/admin_shortcode.css', false, '1.0', 'all' );				
		wp_localize_script( 'jquery', 'zps_shortcode_label', zps_shortcode_label() );
	}
	/**
	 * Enqueue Shortcode Styles
	 *
	 * @return	void
	 */
	function zps_shortcode_frontend(){
		wp_enqueue_style( 'dashicons' );
		wp_enqueue_style( 'zps_shortcode', ZPS_PLUGIN_URL . 'assets/css/shortcode.css', false, '1.0', 'all' );
		wp_register_style( 'fontawesome', ZPS_PLUGIN_URL .'assets/css/font-awesome.min.css' );
		
		wp_register_style( 'owl_carousel', ZPS_PLUGIN_URL .'assets/css/owl.carousel.min.css' );
		wp_register_style( 'owl_carousel_transition', ZPS_PLUGIN_URL.'assets/css/owl.theme.default.min.css' );
		wp_enqueue_script( 'zps_shortcode_js', ZPS_PLUGIN_URL . 'assets/js/shortcode.js', '', '1.0', true );
		//wp_register_script( 'cycle2', ZPS_PLUGIN_URL . 'assets/js/jquery.cycle2.min.js', '', '2.1.6', true );
		wp_register_script( 'owl_carousel', ZPS_PLUGIN_URL . 'assets/js/owl.carousel.min.js', '', '1.3.2', true );
	}
    
}
$zps_shortcodes = new ZZP_Shortcodes();