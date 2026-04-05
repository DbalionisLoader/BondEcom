<?php

function bonditclassic_register_block()
{
  if (!function_exists('acf_register_block_type')) {
    return;
  }

  register_block_type(get_template_directory() . '/blocks/hero');
}

add_action('init', 'bonditclassic_register_block');
