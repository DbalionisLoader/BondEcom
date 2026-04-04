<?php
/**
 * Plugin Name:       Bondit Site Blocks
 * Description:       Example block scaffolded with Create Block tool.
 * Version:           0.1.0
 * Requires at least: 6.8
 * Requires PHP:      7.4
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       bondit-site-blocks
 *
 * @package CreateBlock
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Registers the block(s) metadata from the `blocks-manifest.php` and registers the block type(s)
 * based on the registered block metadata. Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://make.wordpress.org/core/2025/03/13/more-efficient-block-type-registration-in-6-8/
 * @see https://make.wordpress.org/core/2024/10/17/new-block-type-registration-apis-to-improve-performance-in-wordpress-6-7/
 */

function bontit_site_blocks_register(){
	$blocks = array(
		'bondit-site-blocks',
		'bontit-header',
	);

	foreach ($blocks as $block){
		register_block_type(__DIR__ . '/build/blocks/' . $block);
	}

	}

add_action('init', 'bontit_site_blocks_register');


function create_block_bondit_site_blocks_block_init() {
	wp_register_block_types_from_metadata_collection( __DIR__ . '/build', __DIR__ . '/build/blocks-manifest.php' );
}
add_action( 'init', 'create_block_bondit_site_blocks_block_init' );


/**
 * Register Custom Template Parts
 * 
 * 
 */
function outermost_mega_menu_template(array $areas){
	$areas[] = array(
		'area'        => 'menu',
		'area_tag'    => 'div',
		'description' => __( 'Menu templates are used to create sections of a mega menu.', 'mega-menu-block' ),
		'icon'        => '',
		'label'       => __( 'Menu', 'mega-menu-block' ),
	);

	return $areas;
}

add_filter('default_wp_template_part_areas','outermost_mega_menu_template');