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
function cgit_login_style () {
    $uri = get_stylesheet_directory_uri();
    echo "<link rel='stylesheet' href='$uri/login-style.css' />";
}

add_action('login_head', 'cgit_login_style')
