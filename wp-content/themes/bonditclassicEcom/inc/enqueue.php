<?php


function bonditecom_typography()
{
	wp_enqueue_style(
		'google-fonts',
		'https://fonts.googleapis.com/css2?family=Sofia+Sans+Condensed:ital,wght@0,1..1000;1,1..1000&display=swap',
		[],
		false
	);
}


/* 
* Check css output path and name in package.json
*/
function bonditecom_style()
{

	$path = get_template_directory() . '/assets/css/dist/main_style.css';
	wp_enqueue_style(
		'header.css',
		get_template_directory_uri() . '/assets/css/dist/main_style.css',
		[],
		file_exists($path) ? filemtime($path) : null
	);
	/*path testing 
	$test = file_exists($path);
	echo $path;
	echo $test ? 'true' : 'false';*/
}



add_action('wp_enqueue_scripts', 'bonditecom_typography');
add_action('wp_enqueue_scripts', 'bonditecom_style');
