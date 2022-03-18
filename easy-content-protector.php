<?php
/*
Plugin Name: Easy Content Protector
Plugin URI: https://wordpress.org/plugins/easy-content-protector/
Description: Simple way to protect your content
Version: 1.0.0
Author: plugindeveloper
Author URI: https://profiles.wordpress.org/plugindeveloper/
License: GPLv3 or later
Text Domain: easy-content-protector
*/
if( !class_exists( 'Easy_Content_Protector' ) ){

    class Easy_Content_Protector{

        public function __construct(){

            if ( ! defined( 'ABSPATH' ) ) {
                die( 'Invalid request.' );
            }
            $this->define();
            $this->dependencies();
            $this->loader();
        }

        public function define(){

            if(!defined('EASY_CONTENT_PROTECTOR_VERSION')){
                define( 'EASY_CONTENT_PROTECTOR_VERSION', '1.0.0' );
            }

            if(!defined('DIRECTORY_SEPARATOR')){
                define( 'DIRECTORY_SEPARATOR', '/' );
            }

            if(!defined('EASY_CONTENT_PROTECTOR_DEV_MODE')){
                define( 'EASY_CONTENT_PROTECTOR_DEV_MODE', false );
            }

            if(!defined('EASY_CONTENT_PROTECTOR_PATH')){
                define( 'EASY_CONTENT_PROTECTOR_PATH', dirname( __FILE__ ) );
            }

            if(!defined('EASY_CONTENT_PROTECTOR_URL')){
                define( 'EASY_CONTENT_PROTECTOR_URL', plugins_url( '/', __FILE__ ) );
            }

        }

        public function dependencies(){

            require_once wp_normalize_path(EASY_CONTENT_PROTECTOR_PATH.'/inc/core/functions.php');
            require_once wp_normalize_path(EASY_CONTENT_PROTECTOR_PATH.'/inc/core/autoloader.php');

        }

        public function loader(){

            new \Easy_Content_Protector\Inc\Initialize();

        }

    }

}

new \Easy_Content_Protector();
