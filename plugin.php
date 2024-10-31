<?php
/** 
* Plugin Name: Otterwp Animate Blocks
* Plugin URI: https://www.otterwp.io
* Description: Animate any gutenberg block.
* Author: Cyrus Shahbazi
* Author URI https://www.otterwp.io
* Version: 1.1.3
* License: GPL2+
* License URI: https://www.gnu.org/licenses/gpl-2.0.txt
* @package Otterwp-animate-blocks
*/
if (!defined('ABSPATH')) {
    exit;
}


        if ( ! defined( 'OTTERWP_ANIMATE_BLOCKS_PLUGIN_FILE' ) ) {
            define( 'OTTERWP_ANIMATE_BLOCKS_PLUGIN_FILE', __FILE__ );
        }
        if ( ! class_exists( \Otterwp_Animate_Blocks\Otterwp_Animate_Blocks::class ) ) {
            require_once plugin_dir_path( OTTERWP_ANIMATE_BLOCKS_PLUGIN_FILE ) . 'class-otterwp-animate-blocks.php';
        }


        \Otterwp_Animate_Blocks\Otterwp_Animate_Blocks::instance();



