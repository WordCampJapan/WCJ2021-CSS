<?php
/**
 * Plugin name: WCJ2021 CSS
 * Description: WordCamp Japan 2021 用 カスタムCSS
 * Version: 0.0.3
 *
 * @package wcj2021-css
 * @author WordCamp Japan team
 * @license GPL-2.0+
 */
 
/**
 * Directory url of this plugin
 *
 * @var string
 */
define( 'WCJ2021_CSS_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ) );

/**
 * Directory path of this plugin
 *
 * @var string
 */
define( 'WCJ2021_CSS_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );

add_action( 'wp_enqueue_scripts', function() {
	$time = WCJ2021_CSS_PATH. '/src/css/style.css';
	wp_enqueue_style( 'wcj2021', WCJ2021_CSS_URL. '/src/css/style.css', ['twentytwenty-style'], $time );
} );


function local_adminbar() {
	echo '<style type="text/css">#wpadminbar { background: #738e96; }</style>';
}
add_action( 'admin_head', 'local_adminbar' );
add_action( 'wp_head', 'local_adminbar' );
