<?php
/**
Plugin Name: Bramka płatnicza dla Adeste
Plugin URI: http://adeste.eu
Description: Obsługa bramki Tpay dla Adeste
Version:           1.0
Author:            Maciej Laskowski
Author URL: http://adeste.eu
 */
 
 
if(!defined('WPINC'))die;
if(!defined("ABSPATH"))exit;



//[tpay]
function tpay_func( $atts ){
ob_start();
include plugin_dir_path( __FILE__ ) . 'front.php';;
return ob_get_clean();
}

add_shortcode( 'tpay', 'tpay_func' );

function add_style() {
    wp_register_style('bramka_style', plugins_url('css/style.css',__FILE__ ));
    wp_enqueue_style('bramka_style');
}

add_action( 'wp_enqueue_scripts','add_style');


function add_script_to_footer() {
?>
<script type="text/javascript" src="<?php echo plugins_url('js/index.js',__FILE__ ); ?>">
</script>
<?php
}
add_action('wp_footer', 'add_script_to_footer');

