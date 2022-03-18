<?php
/**
 * @package: Easy_Content_Protector
 * @author: plugindeveloper
 * @version: 1.0.0
 * @author_uri: https://profiles.wordpress.org/plugindeveloper/
 * @since 1.0.0
 */
namespace Easy_Content_Protector\Inc\Hooks;
class Setup{

    public function __construct(){

    	$this->hooks();
        
    }
    
    public function hooks(){

        add_action( 'activated_plugin', array( $this, 'redirect_setting' ), 10, 1 );
        add_action( 'init', array( $this, 'init' ) );
        
    }

    public function init() {
        load_plugin_textdomain( 'easy-content-protector', false, plugin_basename( EASY_CONTENT_PROTECTOR_PATH ) . '/lang' ); 
    }

    public function redirect_setting( $plugin ){
       
        if( $plugin == 'easy-content-protector/easy-content-protector.php' ) {
            wp_redirect( admin_url( 'options-general.php?page=easy-content-protector&notice=welcome' ) );
            die();
        }

    }      

}
