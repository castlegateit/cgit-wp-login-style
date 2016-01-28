<?php

/*

Plugin Name: Castlegate IT WP Login Style
Plugin URI: http://github.com/castlegateit/cgit-wp-login-style
Description: Add support for login-style.css to customize login page
Version: 1.0
Author: Castlegate IT
Author URI: http://www.castlegateit.co.uk/
License: MIT

*/

/**
 * Add CSS to login page
 */
add_action('login_enqueue_scripts', function() {
    echo '<link rel="stylesheet" href="' . get_stylesheet_directory_uri()
        . '/login-style.css" />';
});
