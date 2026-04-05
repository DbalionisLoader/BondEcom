<?php

/**
 * Plugin Name: My Custom ACF Blocks
 * Description: Reuseable ACF blocks for all future WordPress projects 
 * Author: David
 * Version: 1.0.0
 */


defined('ABSPATH') || exit;

add_action('acf/init', 'oopb_register_acf_blocks');
