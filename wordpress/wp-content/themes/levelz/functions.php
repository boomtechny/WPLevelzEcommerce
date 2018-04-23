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
add_action( 'customize_register', 'bt_customize_register' );
add_action( 'customize_preview_init', 'bt_customize_preview_init' );
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
add_filter( 'woocommerce_billing_fields', 'bt_wc_billing_fields' );
add_filter( 'woocommerce_shipping_fields', 'bt_wc_shipping_fields' );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );