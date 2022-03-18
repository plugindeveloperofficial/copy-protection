<?php
/**
 * @package: Easy_Content_Protector
 * @author: plugindeveloper
 * @version: 1.0.0
 * @author_uri: https://profiles.wordpress.org/plugindeveloper/
 * @since 1.0.0
 */
if(!function_exists('easy_content_protector_autoload_callback')){

	function easy_content_protector_autoload_callback($class_name){

		$class_details = explode( '\\', $class_name );
		if(!isset($class_details[0])){
			return;
		}
		if($class_details[0]!='Easy_Content_Protector'){
			return;
		}
		unset($class_details[0]);
		if(!$class_details){
			return;
		}
		$file_path = implode( DIRECTORY_SEPARATOR, $class_details);

		$sanitize_path = str_replace('_', '-', $file_path );
		$full_file_path= EASY_CONTENT_PROTECTOR_PATH.DIRECTORY_SEPARATOR.strtolower($sanitize_path).'.php';
		$sanitize_file_path = wp_normalize_path( $full_file_path );
		require_once $sanitize_file_path;

	}

}

spl_autoload_register('easy_content_protector_autoload_callback');
