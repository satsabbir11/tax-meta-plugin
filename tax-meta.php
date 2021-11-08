<?php
/*
Plugin Name: Tax Meta
Plugin URI: https://github.com/satsabbir11/tax-meta-plugin
Description: Demonstration of creating taxonomy meta field
Version: 1.0
Author: satsabbir11
Author URI: https://github.com/satsabbir11
License: GPLv2 or later
Text Domain: tax-meta
Domain Path: /languages/
*/
function taxm_load_textdomain(){
    load_plugin_textdomain('tax-meta',false,dirname(__FILE__)."/languages");
}
add_action('plugins_loaded','taxm_load_textdomain');