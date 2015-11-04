<?php

add_action( 'wp_enqueue_scripts', 'testtheme_scripts' );

function testtheme_scripts()
{
	wp_enqueue_style( 'mytest-css', get_stylesheet_uri() );
}


