<?php
/**
 * @package: Easy_Content_Protector
 * @author: plugindeveloper
 * @version: 1.0.0
 * @author_uri: https://profiles.wordpress.org/plugindeveloper/
 * @since 1.0.0
 */
namespace Easy_Content_Protector\Inc\Hooks;
class Initialize{

    public function __construct(){
    	$this->init();
    }

    public function init(){
        $this->loader();
    }

    public function loader(){
      new Setup();
      new Enqueue();
      new Alert();
      new Notices();
    }

}
