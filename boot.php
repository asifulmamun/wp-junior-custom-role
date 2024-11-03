<?php
    /**
     * Plugin Name: WP Junior Custom Role
     * Plugin URI:  https://github.com/asifulmamun/wp-junior-custom-role
     * Description: A plugin to create a custom "Reporter" role with specific capabilities.
     * Version:     1.0
     * Author:      Al Mamun - asifulmamun
     * Author URI:  https://asifulmamun.info.bd
     * License:     GPL2
     */



//     if ( ! defined( 'ABSPATH' ) ) {
//         exit; // Exit if accessed directly.
//     }

//     define('PLUGIN_DIR', plugin_dir_path(__FILE__) );
//     define('FILE_DIR', dirname( __FILE__ ) );

//     if( file_exists( FILE_DIR . '/vendor/autoload.php' ) ){
//         require_once FILE_DIR . '/vendor/autoload.php';
//     }




// /* ==================== PLUGIN TASKS =================================================================================================== */
//     // Activation hook
//     function activate() {
//         flush_rewrite_rules();
//     }
//     register_activation_hook(__FILE__, 'activate');

//     // Deactivation hook
//     function deactive() {
//         flush_rewrite_rules();
//     }
//     register_deactivation_hook(__FILE__, 'deactive');
// /* ==================== / PLUGIN DEFAULT =================================================================================================== */





//     // Custom role
//     use Backend\CreateReporterRole as Reporter;
//     Reporter::init();



function add_reporter_role() {
    // Remove the role if it already exists to avoid duplicates (optional)
    remove_role('reporter');
    
    // Add a new role called 'Reporter' with specific capabilities
    add_role('reporter', 'Reporter', [
        'read' => true,                     // Allow read access
        'edit_posts' => true,               // Allow editing their own posts (pending)
        'delete_posts' => true,             // Allow deleting their own posts (pending)
        'publish_posts' => false,           // Disallow publishing posts
        'edit_published_posts' => false,    // Disallow editing published posts
        'delete_published_posts' => false,  // Disallow deleting published posts
        'upload_files' => true,             // Allow uploading files
    ]);
}

add_action('init', 'add_reporter_role');
