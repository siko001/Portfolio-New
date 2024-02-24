<?php


// Registering a navigation menu
function register_custom_menus() {
    register_nav_menus(
        array(
            'navbar_menu' => __('Navbar Menu', 'portfolio')

        )
    );
}

add_action('init', 'register_custom_menus');
