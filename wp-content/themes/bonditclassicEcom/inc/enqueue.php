<?php


function bonditecom_style()
{

	$path = get_template_directory() . '/assets/css/header.css';
	wp_enqueue_style(
		'header.css',
		get_template_directory_uri() . '/assets/css/header.css',
		[],
		file_exists($path) ? filemtime($path) : null
	);
	/*path testing 
	$test = file_exists($path);
	echo $path;
	echo $test ? 'true' : 'false';*/
}

add_action('wp_enqueue_scripts', 'bonditecom_style');
