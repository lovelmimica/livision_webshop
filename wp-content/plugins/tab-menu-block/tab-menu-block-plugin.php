<?php 

/**
 * Plugin Name: Tab Menu Block
 * Author: Lovel Mimica
 * Version: 1.0.0
 */

 function load_my_block(){
     wp_enqueue_script('tab-menu-block', plugin_dir_url(__FILE__) . 'tab-menu-block.js', array('wp-blocks', 'wp-editor'), true);
 }

 add_action('enqueue_block_editor_assets', 'load_my_block');

 ?>