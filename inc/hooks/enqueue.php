<?php
/**
 * @package: Easy_Content_Protector
 * @author: plugindeveloper
 * @version: 1.0.0
 * @author_uri: https://profiles.wordpress.org/plugindeveloper/
 * @since 1.0.0
 */
namespace Easy_Content_Protector\Inc\Hooks;
class Enqueue{

    public function __construct(){

    	  $this->hooks();

    }

    public function hooks(){

        add_action( 'wp_enqueue_scripts', array( $this, 'front_scripts' ) );
        add_action( 'admin_enqueue_scripts', array( $this, 'admin_scripts' ) );
        
    }

    public function front_scripts(){

        $prefix = '.min';
        $option_name = 'easy_content_protector';
        $option_values = get_option($option_name, easy_content_protector_default());
        $data = array(
            'disable_right_click'       => $option_values['disable_right_click'],
            'disable_selection'         => $option_values['disable_selection'],
            'disable_cut'               => $option_values['disable_cut'],
            'disable_copy'              => $option_values['disable_copy'],
            'disable_paste'             => $option_values['disable_paste'],
            'disable_inspect_element'   => $option_values['disable_inspect_element'],
        );

        wp_enqueue_style( 'easy-content-protector-main-css', easy_content_protector_assets_url('css/main'.$prefix.'.css'), array(), '1.0.0' );
        
        
        wp_enqueue_script( 'easy-content-protector-main-js', easy_content_protector_assets_url('js/main'.$prefix.'.js'), array('jquery'), '1.0.0', true );

        wp_localize_script( 'easy-content-protector-main-js', 'content_protector_config', $data );
      
    }

    public function admin_scripts(){

        $prefix = '.min';

        if(isset($_GET['page']) && $_GET['page'] == 'easy-content-protector' ){
            wp_enqueue_style( 'easy-content-protector-admin', easy_content_protector_assets_url('css/admin'.$prefix.'.css'), array(), '1.0.0' );
        }

    }

}
