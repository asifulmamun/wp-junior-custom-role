<?php

    // namespace Backend;


    // class CreateReporterRole {
    
    //     // Public static method to add the Reporter role
    //     public static function add_reporter_role() {
    //         // Remove the role if it already exists to avoid duplicates (optional)
    //         remove_role('reporter');
    
    //         // Add a new role called 'Reporter' with specific capabilities
    //         add_role('reporter', 'Reporter', [
    //             'read' => true,                     // Allow read access
    //             'edit_posts' => true,               // Allow editing their own posts (pending)
    //             'delete_posts' => true,             // Allow deleting their own posts (pending)
    //             'publish_posts' => false,           // Disallow publishing posts
    //             'edit_published_posts' => false,    // Disallow editing published posts
    //             'delete_published_posts' => false,  // Disallow deleting published posts
    //             'upload_files' => true,             // Allow uploading files
    //         ]);
    //     }
    
    //     // Public static method to remove the Reporter role
    //     public static function remove_reporter_role() {
    //         remove_role('reporter');
    //     }
    
    //     // Initialize the plugin by hooking into WordPress
    //     public static function init() {
    //         add_action('init', [__CLASS__, 'add_reporter_role']);
    //         register_deactivation_hook(__FILE__, [__CLASS__, 'remove_reporter_role']);
    //     }
    // }