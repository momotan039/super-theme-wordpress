<?php
function includeStyleFiles(){
    wp_enqueue_style('style', get_stylesheet_uri());
    // make it fit for arabic
    wp_style_add_data('style','rtl','replace');
}
add_action('wp_enqueue_scripts', 'includeStyleFiles');
?>