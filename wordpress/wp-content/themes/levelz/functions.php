<?php

// Setup


// Includes
include( get_template_directory() . '/includes/front/enqueue.php' );
include( get_template_directory() . '/includes/setup.php' );
include( get_template_directory() . '/includes/widgets.php' );
include( get_template_directory() . '/includes/functions.php' );
include( get_template_directory() . '/includes/theme-customizer.php' );
include( get_template_directory() . '/includes/customizer/social.php' );
include( get_template_directory() . '/includes/customizer/misc.php' );
include( get_template_directory() . '/includes/customizer/enqueue.php' );
include( get_template_directory() . '/includes/woocommerce/checkout-fields.php' );


// Hooks

add_action( 'wp_enqueue_scripts', 'bt_enqueue' );
add_action( 'widgets_init', 'bt_widgets' );
add_action( 'after_setup_theme', 'bt_setup_theme' );