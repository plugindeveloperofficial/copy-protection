<?php
/**
 * @package: Easy_Content_Protector
 * @author: plugindeveloper
 * @version: 1.0.0
 * @author_uri: https://profiles.wordpress.org/plugindeveloper/
 * @since 1.0.0
 */
namespace Easy_Content_Protector\Inc\Hooks;
class Notices{

    public function __construct(){
    	$this->hooks();
    }

    public function hooks(){
        add_action( 'admin_notices', array( $this, 'welcome_notice' ) );
    }

    function welcome_notice(){

        global $pagenow;
        $notice = isset($_GET['notice']) ? sanitize_text_field($_GET['notice']) : '';
        $page = isset($_GET['page']) ? sanitize_text_field($_GET['page']) : '';
        
        if ( $pagenow == 'options-general.php' && $page='easy-content-protector' && $notice=='welcome' ) {
            ?>
            <div class="notice notice-success is-dismissible">
                <p><strong><?php esc_html_e( 'You are successfully installed the Copy Protection plugin. You can customize the settings below as per your requirements.', 'easy-content-protector' ); ?></strong></p>
            </div>
            <?php
        }
    }

}
