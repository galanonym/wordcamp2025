<?php
if (!defined('ABSPATH')) { exit; }

add_action('wp_enqueue_scripts', function() {
  wp_enqueue_style('main', get_theme_file_uri('/assets/main.css'), [], filemtime(get_theme_file_path('/assets/main.css')));
});
