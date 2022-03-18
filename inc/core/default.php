<?php
/**
 * @package: Easy_Content_Protector
 * @author: plugindeveloper
 * @version: 1.0.0
 * @author_uri: https://profiles.wordpress.org/plugindeveloper/
 * @since 1.0.0
 */

 if(!function_exists('easy_content_protector_default')):
    
    function easy_content_protector_default(){

        $default = array(
            
            'disable_right_click'       => 1,
            'message_right_click'       => esc_html__( 'Sorry this site disable right click', 'easy-content-protector' ),
            'disable_selection'         => 1,
            'message_selection'         => esc_html__( 'Sorry this site disable selection', 'easy-content-protector' ),
            'disable_cut'               => 1,
            'message_cut'               => esc_html__( 'Sorry this site is not allow cut.', 'easy-content-protector' ),
            'disable_copy'              => 1,
            'message_copy'              => esc_html__( 'Sorry this site is not allow copy.', 'easy-content-protector' ),
            'disable_paste'             => 1,
            'message_paste'             => esc_html__( 'Sorry this site is not allow paste.', 'easy-content-protector' ),
            'disable_inspect_element'   => 1,
            'message_inspect_element'   => esc_html__( 'Sorry this site is not allow to inspect element.', 'easy-content-protector' ),
            'remove_data_uninstall'     => 0,
        );

        return $default;

    }

endif;