<?php
function JB_theme_styles(){
	// Bootstrap core CSS
	wp_enqueue_style('bootstrap', get_template_directory_uri().'vendor/bootstrap/css/bootstrap.min.css');
	// Custom fonts for this template
	wp_enqueue_style('fontawesome', get_template_directory_uri().'vendor/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style('googlelora', 'https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic');
	wp_enqueue_style('googleopensans', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
	// Custom styles for this template
	wp_enqueue_style('cleanblog', get_template_directory_uri().'css/clean-blog.min.css');

	// Bootstrap core JavaScript
	wp_enqueue_script('jquery', get_template_directory_uri().'vendor/jquery/jquery.min.js');
	wp_enqueue_script('bootstrap_js', get_template_directory_uri().'vendor/bootstrap/js/bootstrap.bundle.min.js');
	// Custom scripts for this template
	wp_enqueue_script('cleanblog_js', get_template_directory_uri().'js/clean-blog.min.js');
}

function JB_after_setup(){

}