
<?php
/*
Plugin Name: Custom Colors Palette by Promo EPEC
Plugin URI: http://cherch1peu.net/
Description: Un plugin d'édition de palette de couleurs wordpress
Version: 0.1
Author: Fhor Bidden
Author URI: http://votre-site.com
License: G2LOQ
*/
function mytheme_setup_theme_supported_features() {
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => __( 'Brand Color 1', 'epec-custom-palette' ),
            'slug' => 'purple',
            'color' => '#6128A1',
        ),
            array(
                'name' => __( 'Brand Color 2', 'epec-custom-palette' ),
                'slug' => 'light-red',
                'color' => '#E94B59',
            ),
            array(
                'name' => __( 'Very dark grey', 'epec-custom-palette' ),
                'slug' => 'dorian-grey',
                'color' => '#111111',
            ),
            array(
                'name' => __( 'White', 'epec-custom-palette' ),
                'slug' => 'snow-white',
                'color' => '#ffffff',
            ),
    )
    );
}

function my_scripts() {
wp_enqueue_script( 'jquery' );
wp_register_style( 'style', plugins_url('style.css', __FILE__) );
wp_enqueue_style( 'style' );
}
add_action('wp_enqueue_scripts','my_scripts');

add_action('after_setup_theme', 'mytheme_setup_theme_supported_features');
