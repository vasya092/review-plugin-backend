<?php

define( 'DIR_PATH', plugin_dir_path( __FILE__ ) );


/**
 * Plugin Name: Custom Reviews
 * Version: 1.0
 * Description: Плагин, позволяющий создавать обзоры с определенным количеством специальных параметров
 * Plugin URI:  https://github.com/
 */

if ( ! class_exists( 'CustomReviewsPlugin' ) ) {
    class CustomReviewsPlugin {
        
        public function __construct() {
            add_action( 'init', array( $this, 'load_files' ) );
            add_action('admin_head', array($this, 'load_admin_styles'));
        }
        
        function load_files() {
            require_once __DIR__ . '/inc/post-type.php';
            require_once __DIR__ . '/inc/taxonomies/tax-parent.php';
            require_once __DIR__ . '/inc/taxonomies/tax-langs.php';
            require_once __DIR__ . '/inc/taxonomies/tax-platforms.php';
            require_once __DIR__ . '/inc/taxonomies/tax-payments.php';
            require_once __DIR__ . '/inc/fields/limit-fields.php';
            require_once __DIR__ . '/inc/fields/min-output-field.php';
        }  

        function load_admin_styles(){
            wp_enqueue_style("style-admin",plugin_dir_url( __FILE__ )."/css/style-admin.css");
        }
        
    }
    
    $wp_plugin_template = new CustomReviewsPlugin();
}