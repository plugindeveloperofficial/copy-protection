<?php
/**
 * @package: Easy_Content_Protector
 * @author: plugindeveloper
 * @version: 1.0.0
 * @author_uri: https://profiles.wordpress.org/plugindeveloper/
 * @since 1.0.0
 */
namespace Easy_Content_Protector\Inc\Hooks;
class Alert{

    public function __construct(){

    	$this->hooks();

    }

    public function hooks(){

        add_action( 'wp_footer', array( $this, 'html' ) );

    }

    public function html(){

        $default = easy_content_protector_default();
        $options = get_option( 'easy_content_protector', $default );
        
        ?>
            <div class="ecp-wrapper">
            <?php
                $disable_right_click = isset($options['disable_right_click']) ? $options['disable_right_click'] : '';
                $message_right_click = isset($options['message_right_click']) ? $options['message_right_click'] : '';
                if( $disable_right_click && $message_right_click ){
                    ?>
                    <div class="ecp-alert" data-event="right-click">
                        <span><?php echo esc_html($message_right_click);  ?></span>
                    </div>
                    <?php
                }
                
                $disable_selection = isset($options['disable_selection']) ? $options['disable_selection'] : '';
                $message_selection = isset($options['message_selection']) ? $options['message_selection'] : '';
                if($disable_selection && $message_selection ){
                    ?>
                    <div class="ecp-alert" data-event="selection">
                        <span><?php echo esc_html($message_selection);  ?></span>
                    </div>
                    <?php
                }
                
                $disable_cut = isset($options['disable_cut']) ? $options['disable_cut'] : '';
                $message_cut = isset($options['message_cut']) ? $options['message_cut'] : '';
                if($disable_cut && $message_cut ){
                    ?>
                    <div class="ecp-alert" data-event="cut">
                        <span><?php echo esc_html($message_cut);  ?></span>
                    </div>
                    <?php
                }

                $disable_copy = isset($options['disable_copy']) ? $options['disable_copy'] : '';
                $message_copy = isset($options['message_copy']) ? $options['message_copy'] : '';
                if($disable_copy && $message_copy ){
                    ?>
                    <div class="ecp-alert" data-event="copy">
                        <span><?php echo esc_html($message_copy);  ?></span>
                    </div>
                    <?php
                }

                $disable_paste = isset($options['disable_paste']) ? $options['disable_paste'] : '';
                $message_paste = isset($options['message_paste']) ? $options['message_paste'] : '';
                if($disable_paste && $message_paste ){
                    ?>
                    <div class="ecp-alert" data-event="paste">
                        <span><?php echo esc_html($message_paste);  ?></span>
                    </div>
                    <?php
                }

                $disable_inspect_element = isset($options['disable_inspect_element']) ? $options['disable_inspect_element'] : '';
                $message_inspect_element = isset($options['message_inspect_element']) ? $options['message_inspect_element'] : '';
                if($disable_inspect_element && $message_inspect_element ){
                    ?>
                    <div class="ecp-alert" data-event="inspect-element">
                        <span><?php echo esc_html($message_inspect_element);  ?></span>
                    </div>
                    <?php
                }

                ?>
            </div>
        <?php
        
    }

}
