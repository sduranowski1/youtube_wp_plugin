<?php
    // Add Scripts
    function yts_add_scripts() {
        // Add main css
        wp_enqueue_style('yts-main-style', plugins_url(). '/youtube_wp_plugin/css/style.css');
        // Add Main JS
        wp_enqueue_script('yts-main-script', plugins_url(). '/youtube_wp_plugin/js/main.js');
    }

    add_action('wp_enqueue_scripts', 'yts_add_scripts');