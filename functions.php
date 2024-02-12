<?php
// Register Navigation Menu
function register_my_menu() {
    register_nav_menu('primary-menu',
    ('Primary Menu'));
}
add_action('init', 'register_my_menu');