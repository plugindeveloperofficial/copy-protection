<?php
/**
 * @package: Easy_Content_Protector
 * @author: plugindeveloper
 * @version: 1.0.0
 * @author_uri: https://profiles.wordpress.org/plugindeveloper/
 * @since 1.0.0
 */
namespace Easy_Content_Protector\Inc;
class Initialize{

    public function __construct(){
    	$this->init();
    }

    public function init(){
        $this->dependencies();
        $this->loader();
    }

    public function dependencies(){

        require_once wp_normalize_path(EASY_CONTENT_PROTECTOR_PATH.'/inc/core/default.php');

    }

    public function loader(){
        new Hooks\Initialize();
        new Options\Initialize();
    }

}
