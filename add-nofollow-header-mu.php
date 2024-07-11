<?php
/*
Plugin Name: Add nofollow Header for misc
Description: Adds a nofollow header to all content at /misc/*
Version: 1.0
Author: David Greene
*/

function add_nofollow_header() {
    // Check if the request URI starts with '/misc/'
    if (strpos($_SERVER['REQUEST_URI'], '/misc/') === 0) {
        header('X-Robots-Tag: nofollow', true);
    }
}
add_action('template_redirect', 'add_nofollow_header');