<?php

function bt_misc_customizer_section( $wp_customize ){
	$wp_customize->add_setting( 'bt_header_show_search', array(
		'default'                   =>  'yes',
		'transport'                 =>  'postMessage'
	));

	$wp_customize->add_setting( 'bt_header_show_cart', array(
		'default'                   =>  'yes',
		'transport'                 =>  'postMessage'
	));

	$wp_customize->add_setting( 'bt_footer_copyright_text', array(
		'default'                   =>  'Copyrights &copy; 2017 All Rights Reserved by Jasko Koyn Inc.',
	));

	$wp_customize->add_setting( 'bt_footer_tos_page', array(
		'default'                   =>  0,
	));

	$wp_customize->add_setting( 'bt_footer_privacy_page', array(
		'default'                   =>  0,
	));

	$wp_customize->add_setting( 'bt_show_header_popular_posts_widget', array(
		'default'                   =>  false
	));

	$wp_customize->add_setting( 'bt_popular_posts_widget_title', array(
		'default'                   =>  'Breaking News'
	));

	$wp_customize->add_section( 'bt_misc_section', array(
		'title'                     =>  __( 'Levelz Misc Settings' ,'levelz' ),
		'priority'                  =>  30,
		'panel'                     =>  'levelz'
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'bt_header_show_search_input',
		array(
			'label'                 =>  __( 'Show Search Button in Header', 'levelz' ),
			'section'               => 'bt_misc_section',
			'settings'              => 'bt_header_show_search',
			'type'                  =>  'checkbox',
			'choices'               =>  array(
				'yes'               =>  __( 'Yes', 'levelz' )
			)
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'bt_header_show_cart_input',
		array(
			'label'                 =>  __( 'Show Cart Button in Header', 'levelz' ),
			'section'               => 'bt_misc_section',
			'settings'              => 'bt_header_show_cart',
			'type'                  =>  'checkbox',
			'choices'               =>  array(
				'yes'               =>  __( 'Yes', 'levelz' )
			)
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'bt_footer_copyright_text_input',
		array(
			'label'                 =>  __( 'Copyright Text', 'levelz' ),
			'section'               => 'bt_misc_section',
			'settings'              => 'bt_footer_copyright_text'
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'bt_footer_tos_page_input',
		array(
			'label'                 =>  __( 'TOS Page', 'levelz' ),
			'section'               => 'bt_misc_section',
			'settings'              => 'bt_footer_tos_page',
			'type'                  =>  'dropdown-pages',
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'bt_footer_privacy_policy_page_input',
		array(
			'label'                 =>  __( 'Privacy Policy Page', 'levelz' ),
			'section'               => 'bt_misc_section',
			'settings'              => 'bt_footer_privacy_page',
			'type'                  =>  'dropdown-pages',
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'bt_show_header_popular_posts_widget_input',
		array(
			'label'                 =>  __( 'Show Popular Posts', 'levelz' ),
			'section'               => 'bt_misc_section',
			'settings'              => 'bt_show_header_popular_posts_widget',
			'type'                  =>  'checkbox',
			'choices'               =>  array(
				'yes'               =>  __( 'Yes', 'levelz' )
			)
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'bt_popular_posts_widget_title_input',
		array(
			'label'                 =>  __( 'Popular Posts Title', 'levelz' ),
			'section'               => 'bt_misc_section',
			'settings'              => 'bt_popular_posts_widget_title'
		)
	));
}