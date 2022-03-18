<?php
/**
 * @package: Easy_Content_Protector
 * @author: plugindeveloper
 * @version: 1.0.0
 * @author_uri: https://profiles.wordpress.org/plugindeveloper/
 * @since 1.0.0
 */
namespace Easy_Content_Protector\Inc\Options;
use Easy_Content_Protector\Inc\Classes\Setting;
class Settings extends Setting{

    public function fields(){

        $default = easy_content_protector_default();
        $fields = array(
            'heading' => esc_html__( 'Content Protector Settings', 'easy-content-protector' ),
            'title' => esc_html__( 'Content Protector Options', 'easy-content-protector' ),
            'menu' => esc_html__( 'Content Protector', 'easy-content-protector' ),
            'slug' => 'easy-content-protector',
            'settings' => array(
                array(
                    'name' => 'easy_content_protector',
                    'option' => 'easy_content_protector',
                    'title' => esc_html__( 'General Settings', 'easy-content-protector' ),
                    'description' => esc_html__( 'Hello Description', 'easy-content-protector' ),
                    'fields' => array(
                        array(
                            'name' => 'disable_right_click',
                            'default' => $default['disable_right_click'],
                            'title' => esc_html__( 'Disable right click', 'easy-content-protector' ),
                            'type' => 'toggle',
                        ),
                        array(
                            'name' => 'message_right_click',
                            'default' => $default['message_right_click'],
                            'title' => esc_html__( 'Message on right click', 'easy-content-protector' ),
                            'type' => 'text',
                        ),
                        array(
                            'name' => 'disable_selection',
                            'default' => $default['disable_selection'],
                            'title' => esc_html__( 'Disable selection', 'easy-content-protector' ),
                            'type' => 'toggle',
                        ),
                        array(
                            'name' => 'message_selection',
                            'default' => $default['message_selection'],
                            'title' => esc_html__( 'Message on selection', 'easy-content-protector' ),
                            'type' => 'text',
                        ),
                        array(
                            'name' => 'disable_copy',
                            'default' => $default['disable_copy'],
                            'title' => esc_html__( 'Disable Copy', 'easy-content-protector' ),
                            'type' => 'toggle',
                        ),
                        array(
                            'name' => 'message_copy',
                            'default' => esc_html__( 'Sorry this site is not allow copy.', 'easy-content-protector' ),
                            'title' => esc_html__( 'Message on copy', 'easy-content-protector' ),
                            'type' => 'text',
                        ),
                        array(
                            'name' => 'disable_paste',
                            'default' => $default['disable_paste'],
                            'title' => esc_html__( 'Disable Paste', 'easy-content-protector' ),
                            'type' => 'toggle',
                        ),
                        array(
                            'name' => 'message_paste',
                            'default' => $default['message_paste'],
                            'title' => esc_html__( 'Message on paste', 'easy-content-protector' ),
                            'type' => 'text',
                        ),
                        array(
                            'name' => 'disable_cut',
                            'default' => $default['disable_cut'],
                            'title' => esc_html__( 'Disable Cut', 'easy-content-protector' ),
                            'type' => 'toggle',
                        ),
                        array(
                            'name' => 'message_cut',
                            'default' => $default['message_cut'],
                            'title' => esc_html__( 'Message on cut', 'easy-content-protector' ),
                            'type' => 'text',
                        ),
                        array(
                            'name' => 'disable_inspect_element',
                            'default' => $default['disable_inspect_element'],
                            'title' => esc_html__( 'Disable Inspect Element', 'easy-content-protector' ),
                            'type' => 'toggle',
                        ),
                        array(
                            'name' => 'message_inspect_element',
                            'default' => $default['message_inspect_element'],
                            'title' => esc_html__( 'Message on inspect element', 'easy-content-protector' ),
                            'type' => 'text',
                        ),
                        array(
                            'name' => 'remove_data_uninstall',
                            'default' => $default['remove_data_uninstall'],
                            'title' => esc_html__( 'Remove data on uninstall plugin', 'easy-content-protector' ),
                            'type' => 'toggle',
                        ),
                    )
                )
            )
        );

        $this->fields = $fields;

    }
}