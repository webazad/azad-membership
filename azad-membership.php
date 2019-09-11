<?php
/* 
Plugin Name: Azad Membership
Description: A very simple memebership practice.
Plugin URi: gittechs.com/plugin/azad-membership 
Author: Md. Abul Kalam Azad
Author URI: gittechs.com/author
Author Email: webdevazad@gmail.com
Version: 0.0.0.1
License: GPL2
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: azad-gutenberg
Domain Path: /languages

@package: azad-gutenberg
*/
if(! defined('ABSPATH')) exit;

// Check for gutenberg
//if(function_exists('the_gutenberg_project')){
    if(! function_exists('azad_membership')){
        function azad_membership(){
        }
        add_action('init','azad_membership');
    }
//}