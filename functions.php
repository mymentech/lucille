<?php

function lucille_child_theme_setup(){
	load_textdomain('lucille-child',get_theme_file_path('/languages'));
}
add_action('after_setup_theme','lucille_child_theme_setup');

function lucille_child_scripts(){
	//wp_enqueue_style('parent-style', get_parent_theme_file_path('/style.css'));
}
add_action('wp_enqueue_scripts','lucille_child_scripts');


