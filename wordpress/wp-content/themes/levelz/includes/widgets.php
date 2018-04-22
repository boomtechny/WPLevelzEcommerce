<?php

function bt_widgets(){
	register_sidebar(array(
		'name'              =>  __( 'My First Theme Sidebar', 'levelz' ),
		'id'                =>  'bt_sidebar',
		'description'       =>  __( 'Sidebar for the theme levelz', 'levelz' ),
		'before_widget'     =>  '<div id="%1$s" class="widget cleafix %2$s">',
		'after_widget'      =>  '</div>',
		'before_title'      =>  '<h4>',
		'after_title'       =>  '</h4>'
	));
}