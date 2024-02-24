<?php

function enqueue_styles() {
    $styles = [
        ['handle' => 'css', 'src' => get_stylesheet_uri()],
        ['handle' => 'font', 'src' => 'https://fonts.googleapis.com/css2?family=Heebo&family=Noto+Sans&family=Sedgwick+Ave+Display&display=swap']
    ];

    foreach ($styles as $style) {
        wp_register_style($style['handle'], $style['src']);
        wp_enqueue_style($style['handle']);
    }
}

function enqueue_scripts() {
    $scripts = [
        ['handle' => 'main', 'src' => get_theme_file_uri() . '/dist/js/main.js', 'inFooter' => true],
        ['handle' => 'gsap', 'src' => "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js", "inFooter" => true],

    ];

    foreach ($scripts as $script) {
        wp_register_script($script['handle'], $script['src'], [], [], $script['inFooter']);
        wp_enqueue_script($script['handle']);
    }
}

add_action('wp_enqueue_scripts', 'enqueue_styles');
add_action('wp_enqueue_scripts', 'enqueue_scripts');



