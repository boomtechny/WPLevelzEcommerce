<?php

function bt_customize_register( $wp_customize ){
	$wp_customize->get_section( 'title_tagline' )->title    =   'General';

	$wp_customize->add_panel( 'levelz', array(
		'title'                 =>  __( 'levelz', 'levelz' ),
		'description'           =>  '<p>levelz Theme Settings</p>',
		'priority'              =>  160
	));

	bt_social_customizer_section( $wp_customize );
	bt_misc_customizer_section( $wp_customize );

//	echo '<pre>';
//	var_dump($wp_customize);
//	echo '</pre>';
}