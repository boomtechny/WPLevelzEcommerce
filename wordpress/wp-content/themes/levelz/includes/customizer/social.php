<?php

function bt_social_customizer_section( $wp_customize ){
	$wp_customize->add_setting( 'bt_facebook_handle', array(
		'default'                   =>  '',
	));

	$wp_customize->add_setting( 'bt_twitter_handle', array(
		'default'                   =>  '',
	));

	$wp_customize->add_setting( 'bt_instagram_handle', array(
		'default'                   =>  '',
	));

	$wp_customize->add_setting( 'bt_email', array(
		'default'                   =>  '',
	));

	$wp_customize->add_setting( 'bt_phone_number', array(
		'default'                   =>  '',
	));

	$wp_customize->add_section( 'bt_social_section', array(
		'title'                     =>  __( 'levelz Social Settings', 'levelz' ),
		'priority'                  =>  30,
		'panel'                     =>  'levelz'
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'bt_social_facebook_input',
		array(
			'label'                 =>  __( 'Facebook Handle', 'theme_name' ),
			'section'               => 'bt_social_section',
			'settings'              => 'bt_facebook_handle',
			'type'                  =>  'text'
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'bt_social_twitter_input',
		array(
			'label'                 =>  __( 'Twitter Handle', 'theme_name' ),
			'section'               => 'bt_social_section',
			'settings'              => 'bt_twitter_handle',
			'type'                  =>  'text'
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'bt_social_instagram_input',
		array(
			'label'                 =>  __( 'Instagram Handle', 'theme_name' ),
			'section'               => 'bt_social_section',
			'settings'              => 'bt_instagram_handle',
			'type'                  =>  'text'
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'bt_social_email_input',
		array(
			'label'                 =>  __( 'Email', 'theme_name' ),
			'section'               => 'bt_social_section',
			'settings'              => 'bt_email',
			'type'                  =>  'text'
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'bt_social_phone_number_input',
		array(
			'label'                 =>  __( 'Phone Number', 'theme_name' ),
			'section'               => 'bt_social_section',
			'settings'              => 'bt_phone_number',
			'type'                  =>  'text'
		)
	));
}