<?php
/*
Plugin Name: Add nofollow Header for /team
Description: Adds a nofollow header to the exact /team URL.
Version: 1.1
Author: David Greene (BigScoots)
*/

function add_nofollow_header() {
    // Check if the request URI matches exactly '/team'
    if (trim($_SERVER['REQUEST_URI'], '/') === 'team') {
        header('X-Robots-Tag: nofollow', true);
    }
}
add_action('template_redirect', 'add_nofollow_header');
